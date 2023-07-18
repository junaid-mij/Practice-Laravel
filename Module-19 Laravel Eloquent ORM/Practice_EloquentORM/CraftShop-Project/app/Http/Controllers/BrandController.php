<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function createData(Request $request){
        return Brand::create($request->input());
    }
    public function updateData(Request $request){
        return Brand::where('id',$request->id)->update($request->input());
    }
    public function upsertData(Request $request){
        return Brand::updateOrCreate(
            ['brandName' => $request->brandName],
            $request->input()
        );
    }
    public function deleteData(Request $request){
            return Brand::where('id',$request->id)->delete();
    }
}
