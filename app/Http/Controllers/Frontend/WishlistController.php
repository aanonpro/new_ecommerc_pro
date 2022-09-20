<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index(){
        $wishlist = Wishlist::where('user_id', Auth::id())->get();
        return view('frontend.wishlist', compact('wishlist'));
    }

    public function add(Request $request){
        $prod_id = $request->input('product_id');

        if(Auth::check())
        {
            $prod_check = Product::where('id', $prod_id)->first();
            if($prod_check){
                if(Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['message' => "Product Already added to wishlist"]);
                }
                else{
                    $wish = new Wishlist();
                    $wish->prod_id = $prod_id;
                    $wish->user_id = Auth::id();
                    $wish->save();
                    return response()->json(['message' => "Product Added to Wishlist"]);
                }
            }
        }
        else
        {
            return response()->json(['message' => 'Login to continue']);
        }
    }

    public function deleteitem(Request $request){
        if(Auth::check()){
            $prod_id = $request->input('prod_id');
            if(Wishlist::where('prod_id',$prod_id)->where('user_id', Auth::id())->exists())
            {
                $wish = Wishlist::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $wish->delete();
                return response()->json(['message'=>"Item Removed from wishlist"]);
            }
        }
        else{
            return response()->json(['message'=>"Login to continue"]);
        }
    }

    public function wishlistCount(){
        $wishlist = Wishlist::where('user_id', Auth::id())->count();
        return response()->json(['count'=>$wishlist]);
    }
}
