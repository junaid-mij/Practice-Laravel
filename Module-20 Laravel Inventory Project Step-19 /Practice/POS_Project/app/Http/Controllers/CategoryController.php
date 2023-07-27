<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function CategoryPage(){
        return view('pages.dashboard.category-page');
    }
    // CRUD Operations:
    // Create:
    function CategoryCreate(Request $request){
        $user_id = $request->header('id');
        return Category::create([
            'name' => $request->input('name'),
            'user_id' => $user_id
        ]);
    }
    // Read:
    function CategoryList(Request $request){
        $user_id = $request->header('id');
        return Category::where('user_id', $user_id)->get();
    }
    // Update:
    function CategoryUpdate(Request $request){
        $category_id= $request->input('id');
        $user_id= $request->header('id');
        return Category::where('id', $category_id)->where('user_id', $user_id)->update([
            'name' => $request->input('name'),
        ]);
    }
    function CategoryByID(Request $request){
        $category_id= $request->input('id');
        $user_id= $request->header('id');
        return Category::where('id', $category_id)->where('user_id', $user_id)->first();
    }
    // Delete:
    function CategoryDelete(Request $request){
        $category_id= $request->input('id');
        $user_id= $request->header('id');
        return Category::where('id', $category_id)->where('user_id', $user_id)->delete();
    }
}
