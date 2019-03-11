<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use DB;
use Cart;
use App\Product;
use App\Category;
use App\Brand;
use App\Offer;
use App\Image;
use App\Review;
use Session;
session_start();

class productController extends Controller
{
     public function productDetails($productId)
    {
        $product=Product::find($productId);
        $relatedProducts=Product::where('productId' ,'<>', $productId)->where('category_id' , $product->category_id)->get();
        $categoryData=Category::all();
        $brandData=Brand::all();
        $offerData=Offer::all();
    $reviewProducts=Review::where('product_id' , $product->productId)->get();
        $cartContents=Cart::content();
        $cartCount=Cart::content()->count();
        return view('home.productDetails', compact(['offerData' , 'categoryData' , 'brandData' ,
            'product' , 'relatedProducts' , 'cartCount' , 'reviewProducts']));

    }
}
