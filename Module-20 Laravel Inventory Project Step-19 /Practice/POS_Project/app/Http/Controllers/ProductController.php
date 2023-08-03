<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    function ProductPage(){
        return view('pages.dashboard.product-page');
    }
    // CRUD Operations:
    // Create:
    function ProductCreate(Request $request){
        $user_id = $request->header('id');

        // Prepare File Name and Path:
        $img = $request->file('img');
        // Set File Name:
        $t=time();
        $file_name = $img->getClientOriginalName();
        $img_name ="{$user_id}-{$t}-{$file_name}";
        $img_url ="uploads/{$img_name}";
        // Upload file:
        $img->move(public_path('uploads'),$img_name);

        // Save to database:
        return Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'unit' => $request->input('unit'),
            'img_url' => $img_url,
            'category_id' => $request->input('category_id'),
            'user_id' => $user_id
        ]);
    }
    // Read:
    function ProductList(Request $request){
        $user_id = $request->header('id');
        return Product::where('user_id', $user_id)->get();
    }
    // Select By ID:
    function ProductByID(Request $request){
        $user_id= $request->header('id');
        $product_id= $request->input('id');
        return Product::where('id', $product_id)->where('user_id', $user_id)->first();
    }
    // Update:
    function ProductUpdate(Request $request){
        $user_id = $request->header('id');
        $product_id = $request->input('id');

        if($request->hasFile('img')){
            // Upload a new file:
            $img = $request->file('img');
            // Set File Name:
            $t=time();
            $file_name = $img->getClientOriginalName();
            $img_name ="{$user_id}-{$t}-{$file_name}";
            $img_url ="uploads/{$img_name}";
            // Upload file:
            $img->move(public_path('uploads'),$img_name);

            // Delete old file:
            $filePath= $request->input('file_path');
            File::delete($filePath);

            // Update Product:
            return Product::where('id', $product_id)->where('user_id', $user_id)->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'unit' => $request->input('unit'),
                'img_url' => $img_url,
                'category_id' => $request->input('category_id')
            ]);
        }
        else{
            // Update Product:
            return Product::where('id', $product_id)->where('user_id', $user_id)->update([
                'name' => $request->input('name'),
                'price' => $request->input('price'),
                'unit' => $request->input('unit'),
                'category_id' => $request->input('category_id')
            ]);
        }
    }
    // Delete:
    function ProductDelete(Request $request){
        $user_id= $request->header('id');
        $product_id= $request->input('id');
        $filePath= $request->input('file_path');
        File::delete($filePath);
        return Product::where('id', $product_id)->where('user_id', $user_id)->delete();
    }
}
