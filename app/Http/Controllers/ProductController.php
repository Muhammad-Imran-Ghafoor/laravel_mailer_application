<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::create([
            'prduct_name' => $request->p_name,
            'user_email' => $request->email,
        ]);
    }
}
