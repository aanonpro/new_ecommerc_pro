<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
   //index
    public function index()
    {


        $categories = Category::latest()->paginate(5);
        return view('admin.category.index', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

  //create
    public function create()
    {
        return view('admin.category.create');
    }

   //add
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        $input['popular'] = $request->popular == true ? '1':'0';

        Category::create($input);

        return redirect()->route('categories.index')
                        ->with('message','Categories added successfully');

    }

    //show
    public function show(Category $category)
    {
        //
    }

  // edit
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    //update 
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $input = $request->all();

        if($request->hasFile('image')){
            $path = 'image/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }
        }
        $input['popular'] = $request->popular == true ? '1':'0';
        $category->update($input);

        return redirect()->route('categories.index')
                        ->with('message','Category updated successfully');
    }

    // delete 
    public function destroy(Category $category)
    {
        if($category->image){
            $path = 'image/'.$category->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $category->delete();

        return redirect()->route('categories.index')
                        ->with('message','Category deleted successfully');
    }
}
