<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('backend.category.index');
    }
    public function addCategory(Request $req)
    {
        $category = new Category();
        $category->category_name = $req->category_name;
        $image = $req->category_image;
        if($image){
            $imageName = time() . $image->getClientOriginalName();
            $folder = 'category_image';
            $image->move($folder,$imageName);
            $category->category_image = $folder .'/'. $imageName;
        }
        $category->save();
        return redirect()->back()->with('msg','Category added successfully');
    }
    public function showCategory()
    {
        $categories = Category::all();
        return view('backend.category.all',compact('categories'));
    }
    public function editCategory($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit',compact('category'));
    }
    public function updateCategory(Request $req, $id)
    {
        $category = Category::find($id);
        $category->category_name = $req->category_name;
        $image = $req->category_image;
        if($image){
            $imageName = time() . $image->getClientOriginalName();
            $folder = 'category_image';
            $image->move($folder,$imageName);
            $category->category_image = $folder .'/'. $imageName;
        }
        
        $category->save();
        return redirect()->route('category.show');
    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $imagePath = $category->category_image;
        $category->delete();
        
        if(file_exists($imagePath)){
            @unlink($imagePath);

        }
        return redirect()->back();
    }
   
}
