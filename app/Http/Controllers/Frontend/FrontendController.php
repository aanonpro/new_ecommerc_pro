<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        $arrival_products = Product::where('trending','1')->where('status', '1')->latest()->take(8)->get();
        return view('frontend.index', compact('arrival_products'));
    }

    public function shop(){
        $categories = Category::where('status','1')->get();
        return view('frontend.shop', compact('categories'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function viewProducts(string $category_slug, string $product_slug){
        $category = Category::where('slug', $category_slug)->exists();
        if($category)
        {
            // if(Product::where('slug', $product_slug)->exists())
            // {
                $products = Product::where('slug', $product_slug)->where('status', '1')->first();
                return view('frontend.view', compact('products'));
            // }
            // else{
            //     return redirect('/')->with('message','something went wrong');
            // }
        }
        else{
            return redirect('/')->with('message', 'category not found');
        }
    }
}
