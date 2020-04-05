<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    public function getImage(Request $request, $image)
    {
        $imagePath = sprintf('uploads/images/%s', $image);
        if (Storage::exists($imagePath)) {
            return response(Storage::get($imagePath))->header('Content-Type', 'image/jpeg');
        }
        return response(null, 404);
    }
}
