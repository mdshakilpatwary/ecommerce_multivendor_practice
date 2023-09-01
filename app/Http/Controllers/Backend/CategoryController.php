<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
// image intervantion package er jnno this code below 
use Image;
use File;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    function index (){
        return view('backend.category.add');
    }

    function save(Request $rqst){
        $rqst->validate([
            'cat_name' => 'required',
            'cat_image' => 'required'
        ], [
            "cat_name.required" => 'this field is required'
        ]);

        $image = $rqst->file('cat_image');

        $customName= rand().".".$image->getClientOriginalExtension();

        $path= public_path("uploads/category/".$customName);

        Image::make($image)->resize(300,300)->save($path);

        $category =new Category;
        $category->cat_name = $rqst->cat_name;
        $category->cat_slug = Str::slug($rqst->cat_name);
        $category->cat_image = $customName;
        $category->save();

        return back()->with('message'," successfully category submited");


    }
    function manage (){
        $categories = Category::latest()->get();
        return view('backend.category.manage', compact('categories'));
    }
    function delete($id){
        $category = Category::find($id);
        if(File::exists(public_path("uploads/category/".$category->cat_image))){
            File::delete(public_path("uploads/category/".$category->cat_image));
        }
        $category->delete();
        return back()->with('message',"successfully deleted");
    }


    function edit($id){
        $category= Category::find($id);
        return view('backend.category.edit', compact('category'));
    }
    function update(Request $rqst, $id){
        $category = Category::find($id);

        if($rqst->cat_image){

            if(File::exists(public_path("uploads/category/". $category->cat_image))){
                File::delete(public_path("uploads/category/". $category->cat_image));
            }
            $image = $rqst->file('cat_image');
            $customName = rand().'.'. $image->getClientOriginalExtension();
            $path = public_path('uploads/category/'. $customName);
            Image::make($image)->resize(300,300)->save($path);

            $category->cat_name = $rqst->cat_name;
            $category->cat_slug = Str::slug($rqst->cat_name);
            $category->cat_image = $customName;
            $category->update();
        }
        else{
            $category->cat_name = $rqst->cat_name;
            $category->cat_slug = Str::slug($rqst->cat_name);
            $category->update();
        }


        return redirect('/category/manage'); 
    }



}
