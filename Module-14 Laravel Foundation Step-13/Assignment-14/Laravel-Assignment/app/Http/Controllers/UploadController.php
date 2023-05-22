<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function handleUpload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $file->move(public_path('uploads'), $file->getClientOriginalName());

            return response()->json(['message' => 'File uploaded successfully']);
        } else {
            return response()->json(['message' => 'No file uploaded']);
        }
    }
}
