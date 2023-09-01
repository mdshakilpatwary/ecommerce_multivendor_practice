<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller\CategoryController;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Image;
use File;
use Illuminate\Support\Str;

class SubCatController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('backend.subcategory.add', compact('categories'));
    }
  
    function save(Request $rqst){
        $rqst->validate([
            'scat_name' => 'required',
            'scat_image' => 'required'
        ], [
            "scat_name.required" => 'this field is required'
        ]);
        
        $image = $rqst->file('scat_image');
        $customeName = rand().'.'.$image->getClientOriginalExtension();
        $path = public_path('uploads/sub_category/'. $customeName);
        Image::make($image)->resize(300,300)->save($path);

        $subCategory =new SubCategory;
        $subCategory->cat_id = $rqst->select_cat;
        $subCategory->subcat_name = $rqst->scat_name;
        $subCategory->subcat_slug = Str::slug($rqst->scat_name);
        $subCategory->subcat_image = $customeName;

        $subCategory->save();
        return back()->with('message'," successfully category submited");
    }


    public function manage(){
       $subcategories= SubCategory::latest()->get();
        return view('backend.subcategory.manage', compact('subcategories'));
    }
    function delete($id){
        $subcategory = SubCategory::find($id);
        if(File::exists(public_path("uploads/sub_category/".$subcategory->subcat_image))){
            File::delete(public_path("uploads/category/".$subcategory->subcat_image));
        }
        $subcategory->delete();
        return back()->with('message'," successfully  Delete");
    }
    function edit($id){
        $subcategory = SubCategory::find($id);
        return view('backend.subcategory.edit', compact('subcategory'));
    }
    function update(Request $rqst, $id){
        $subcategory = SubCategory::find($id);
        if($rqst->scat_image){

            if(File::exists(public_path("uploads/sub_category/". $subcategory->cat_image))){
                File::delete(public_path("uploads/sub_category/". $subcategory->cat_image));
            }
            $image = $rqst->file('scat_image');
            $customName = rand().'.'. $image->getClientOriginalExtension();
            $path = public_path('uploads/sub_category/'. $customName);
            Image::make($image)->resize(300,300)->save($path);

            $subcategory->subcat_name = $rqst->scat_name;
            $subcategory->subcat_slug = Str::slug($rqst->scat_name);
            $subcategory->subcat_image = $customName;
            $subcategory->update();
        }
        else{
            $subcategory->subcat_name = $rqst->scat_name;
            $subcategory->subcat_slug = Str::slug($rqst->scat_name);
            $subcategory->update();
        }
        return redirect('/subcategory/manage')->with('message'," successfully subcategory updated"); 

    }
}
