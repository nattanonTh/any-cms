<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        return  view('admin.image.gallery', ['imageList' => Image::all()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $path = 'gallery';

        $request->validate([
            'file' => 'mimes:png,jpg,jpeg|max:10240'
        ]);

        $file = $request->file('file');

        if ($file) {
            // save file
            $fullPath = $file->storeAs($path, $file->hashName());

            // create image record
            $image = Image::create([
                'name' => $file->hashName(),
                'type' => $file->getMimeType(),
                'size' => $file->getSize(),
                'path' => $fullPath,
            ]);
            return ['status' => 1, 'newImage' => $image];
        }
        return ['status' => 0, 'message' => 'file not found'];
    }

    public function show(Image $image)
    {
        //
    }

    public function edit(Image $image)
    {
        //
    }

    public function update(Request $request, Image $image)
    {
        //
    }

    public function destroy(Request $request)
    {
        $image = Image::find($request->input('id'));
        if ($image) {
            if (Storage::exists($image->path)) {
                Storage::delete($image->path);
            }
            $image->delete();
            return ['status' => 1];
        }
        return ['status' => 0, 'message' => 'image not found.'];
    }
}
