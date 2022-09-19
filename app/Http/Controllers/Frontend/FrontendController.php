<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){

        $arrival_products = Product::where('trending','1')->where('status', '1')->orderBy('id','desc')->latest()->take(8)->get();
        return view('frontend.index', compact('arrival_products'));
    }

    public function category(){
        $categories = Category::where('status','1')->get();
        return view('frontend.category', compact('categories'));
    }

    public function shop(){

        $products = Product::where('status','1')->get();
        return view('frontend.shop',compact('products'));
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function viewCategory($category_slug){

        if(Category::where('slug',$category_slug)->exists()){
            $category = Category::where('slug',$category_slug)->first();
            $products= Product::where('category_id',$category->id)->where('status','1')->get();
            return view('frontend.shop',compact('category','products'));
        }
    }

    public function viewProducts(string $category_slug, string $product_slug){

        $category = Category::where('slug', $category_slug)->where('status','1')->first();
        if($category)
        {
            // if(Product::where('slug', $product_slug)->exists())
            // {
                $products = Product::where('category_id',$category->id)->where('slug', $product_slug)->where('status', '1')->first();
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
