<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class welcomeController extends Controller
{
    public function index(){
        $publishedProduct = Product::where('publicationStatus',1)->get();
        return view('frontEnd.home.homeContent',['publishedProduct'=>$publishedProduct]);
    }
    public function category($id){
        
        $publishedProduct = Product::where('categoryId',$id)
                ->where('publicationStatus',1)
                ->get();
        return view('frontEnd.category.categoryContent',['publishedProduct'=>$publishedProduct]);
    }
    
    public function productDetails(){
        return view('frontEnd.product.productContent');
    }
}
