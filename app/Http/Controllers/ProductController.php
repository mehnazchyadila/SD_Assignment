<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function all(){
        $data = Product::leftJoin('categories','products.category_id','categories.id')
                        ->select('products.id','products.title','products.status','categories.title as category')
                        ->get();
        return view('admin.pages.products',['products'=>$data]);
    }
}
