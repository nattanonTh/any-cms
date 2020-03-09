<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Banner\CreateBannerRequest;
use App\Http\Resources\BannerResource;
use App\Models\Banner;
use App\Repos\BannerRepo;
use App\Services\UploadImageService;
use Exception;use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    protected $bannerRepo;
    protected $uploadImageService;

    public function __construct(BannerRepo $bannerRepo, UploadImageService $uploadImageService)
    {
        $this->bannerRepo = $bannerRepo;
        $this->uploadImageService = $uploadImageService;
    }

    public function index()
    {
        return view('admin.banner.banner');
    }

    public function create()
    {
        return view('admin.banner.create');
    }

    public function store(CreateBannerRequest $request)
    {
        $values = $request->all();
        $files = $request->file('cover');
        if ($request->hasFile('cover')) {
            $paths = $this->uploadImageService->uploadImagesWithThumbnail([$files], config('any-cms.banner.cover_path'));
            $values['image_path'] = $paths->get('images')[0];
            $values['thumbnail_path'] = $paths->get('thumbnails')[0];
        }
        $this->bannerRepo->create($values);

        return redirect(route('banner.listing'));
    }

    public function edit(Banner $banner)
    {
       return view('admin.banner.edit', compact('banner'));
    }

    public function update(CreateBannerRequest $request, Banner $banner)
    {
        $values = $request->all();
        $files = $request->file('cover');
        if ($request->hasFile('cover')) {
            try {
                Storage::delete($banner->image_path);
                Storage::delete($banner->thumbnail_path);
            } catch (Exception $exception) {
                // file not found
            }
            $paths = $this->uploadImageService->uploadImagesWithThumbnail([$files], config('any-cms.banner.cover_path'));
            $values['image_path'] = $paths->get('images')[0];
            $values['thumbnail_path'] = $paths->get('thumbnails')[0];
        }
       $this->bannerRepo->update($banner->id, $values);
       return redirect(route('banner.listing'));
    }

    public function destroy(Banner $banner)
    {
        $this->bannerRepo->delete($banner->id);
        try {
            Storage::delete($banner->image_path);
            Storage::delete($banner->thumbnail_path);
        } catch (Exception $exception) {
            // file not found
        }

        return redirect(route('banner.listing'));
    }

    public function list()
    {
        return DataTables::resource(BannerResource::collection(
            Banner::all()
        ))->toJson();
    }
}
