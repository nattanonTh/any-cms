<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateImageRequest;
use App\Http\Resources\ImageResource;
use App\Models\Image;
use App\Repos\ImageRepo;
use App\Services\UploadImageService;
use Exception;use Illuminate\Support\Facades\Storage;use Yajra\DataTables\Facades\DataTables;
use App\Models\Tag;

class ImageController extends Controller
{

    protected $imageRepo;
    protected $uploadImageService;

    public function __construct(ImageRepo $imageRepo, UploadImageService $uploadImageService)
    {
        $this->imageRepo = $imageRepo;
        $this->uploadImageService = $uploadImageService;
    }

    public function index()
    {
        //
        // return  view('admin.image.gallery', ['imageList' => Image::all()]);
        return view('admin.image.image');
    }

    public function create()
    {
        $tags = Tag::all();
        return view('admin.image.create', compact('tags'));
    }

    public function store(CreateImageRequest $request)
    {
        $values = $request->all();
        $files = $request->file('path');

        if ($request->hasFile('path')) {
            $paths = $this->uploadImageService->uploadImagesWithThumbnail($files, config('promotion.cover_path'));

            foreach ($paths->get('images') as $index => $path) {
                $values['path'] = $path;
                $values['thumb_path'] = $paths->get('thumbnails')[$index];
                $values['name'] = $files[$index]->hashName();
                $values['type'] = $files[$index]->getMimeType();
                $values['size'] = $files[$index]->getSize();

                $this->imageRepo->create($values);
            }
        }

        return redirect(route('image.listing'));
    }

    public function edit(Image $image)
    {
        $tags = Tag::all();
        return view('admin.image.edit', compact('image', 'tags'));
    }

    public function update(CreateImageRequest $request, Image $image)
    {
        $values = $request->all();

        $files = $request->file('path');
        if ($request->hasFile('path')) {
            try {
                Storage::delete($image->path);
                Storage::delete($image->thumb_path);
            } catch (Exception $exception) {
                // file not found
            }
            $paths = $this->uploadImageService->uploadImagesWithThumbnail([$files], config('promotion.cover_path'));
            $values['path'] = $paths->get('images')[0];
            $values['thumb_path'] = $paths->get('thumbnails')[0];
            $values['name'] = $files->hashName();
            $values['type'] = $files->getMimeType();
            $values['size'] = $files->getSize();
        }
        // dd($values);
        $this->imageRepo->update($image->id, $values);
        return redirect(route('image.listing'));
    }

    public function destroy(Image $image)
    {
        $this->imageRepo->delete($image->id);
        try {
            Storage::delete($image->path);
            Storage::delete($image->thumb_path);
        } catch (Exception $exception) {
            // file not found
        }

        return redirect(route('image.listing'));
    }

    public function list()
    {
        return DataTables::resource(ImageResource::collection(
            Image::all()->load('tag')
        ))->toJson();
    }

}
