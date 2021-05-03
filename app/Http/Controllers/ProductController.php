<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Mail\ProductAdded;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product = Product::create([
            'prduct_name' => $request->p_name,
            'user_email' => $request->email,
        ]);
        Mail::to($request->email)->send(new ProductAdded());
        
    }
}
