<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductsController extends Controller
{
    function getProducts(){
        $products = ProductModel::all();
        return view('admin.product.getProducts',['products'=>$products]);
    }
}
