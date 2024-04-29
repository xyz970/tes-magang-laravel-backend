<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManager as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageTempController extends Controller
{
    public function store(Request $request)
    {
        if ($request->has('cover')) {
            $file = $request->file('cover');
            $filename = Str::random(20).'.'.$file->getClientOriginalExtension();
            $actual_image = Image::imagick()->read($file->getRealPath());
            $actual_image->save(public_path().'/storage/img/temporary/'.$filename);
            return $filename;
        }
        return response()->json(['Gagal'], 500);
    }

    public function delete($filename)
    {
        unlink(public_path('storage/img/temporary/') . $filename);
    }
}