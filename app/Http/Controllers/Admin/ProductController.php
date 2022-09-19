<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create',  compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,webp,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        // $category= Category::findOrFail($request['category_id']);

        if ($image = $request->file('image')) {
            $destinationPath = 'product/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $input['category_id'] = $request->category_id;
        $input['slug'] = Str::slug($request->slug);
        $input['trending'] = $request->trending == true ? '1':'0';
        $input['status'] = $request->status == true ? '1':'0';
        $input['created_by'] = Auth::user()->id;

        Product::create($input);

        return redirect()->route('products.index')
                        ->with('message','Products added successfully');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('product','categories'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,webp,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        // $category= Category::findOrFail($request['category_id']);

        if($request->hasFile('image')){
            $path = 'product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            }
            if ($image = $request->file('image')) {
                $destinationPath = 'product/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }
        }
        $input['category_id'] = $request->category_id;
        $input['slug'] = Str::slug($request->slug);
        $input['trending'] = $request->trending == true ? '1':'0';
        $input['status'] = $request->status == true ? '1':'0';
        $input['created_by'] = Auth::user()->id;

        $product->update($input);

        return redirect()->route('products.index')
                        ->with('message','Products Updated successfully');
    }

    public function destroy(Product $product)
    {
        if($product->image){
            $path = 'product/'.$product->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $product->delete();

        return redirect()->route('products.index')
                        ->with('message','Product deleted successfully');
    }
}
