<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{

    public function imageUpload(Request $request)
    {

        if ($request->hasFile('image-upload')) {
            $image = $request->file('image-upload');
            $response = $image->store('image', 'public');
            return back();


        }

    }
}