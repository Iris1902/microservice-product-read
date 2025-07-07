<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Obtener todos los productos
    public function index()
    {
        $products = Product::all();
        return response()->json(['data' => $products]);
    }

    // Obtener producto por ID
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }
        return response()->json(['data' => $product]);
    }

    // Health check endpoint
    public function healthCheck()
    {
        return response()->json(['status' => 'ok', 'message' => 'Service is running']);
    }
}