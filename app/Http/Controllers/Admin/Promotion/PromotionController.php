<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Promotion\CreatePromotionRequest;
use App\Http\Resources\PromoResource;
use App\Models\Promotion;
use App\Repos\PromotionRepo;
use App\Services\UploadImageService;
use Exception;use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    protected $promotionRepo;
    protected $uploadImageService;

    public function __construct(PromotionRepo $promotionRepo, UploadImageService $uploadImageService)
    {
        $this->promotionRepo = $promotionRepo;
        $this->uploadImageService = $uploadImageService;
    }

    public function index()
    {
        return view('admin.promotion.promotion');
    }

    public function create()
    {
        return view('admin.promotion.create');
    }

    public function store(CreatePromotionRequest $request)
    {
        $values = $request->all();
        $files = $request->file('cover');
        if ($request->hasFile('cover')) {
            $paths = $this->uploadImageService->uploadImagesWithThumbnail([$files], config('promotion.cover_path'));
            $values['image_path'] = $paths->get('images')[0];
            $values['thumbnail_path'] = $paths->get('thumbnails')[0];
        }
        $this->promotionRepo->create($values);

        return redirect(route('promotion.listing'));
    }

    public function edit(Promotion $promotion)
    {
       return view('admin.promotion.edit', compact('promotion'));
    }

    public function update(CreatePromotionRequest $request, Promotion $promotion)
    {
        $values = $request->all();
        $files = $request->file('cover');
        if ($request->hasFile('cover')) {
            try {
                Storage::delete($promotion->image_path);
                Storage::delete($promotion->thumbnail_path);
            } catch (Exception $exception) {
                // file not found
            }
            $paths = $this->uploadImageService->uploadImagesWithThumbnail([$files], config('promotion.cover_path'));
            $values['image_path'] = $paths->get('images')[0];
            $values['thumbnail_path'] = $paths->get('thumbnails')[0];
        }
       $this->promotionRepo->update($promotion->id, $values);
       return redirect(route('promotion.listing'));
    }

    public function destroy(Promotion $promotion)
    {
        $this->promotionRepo->delete($promotion->id);
        try {
            Storage::delete($promotion->image_path);
            Storage::delete($promotion->thumbnail_path);
        } catch (Exception $exception) {
            // file not found
        }

        return redirect(route('promotion.listing'));
    }

    public function list()
    {
        return DataTables::resource(PromoResource::collection(
            Promotion::all()
        ))->toJson();
    }
}
