<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\CreateBlogRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use App\Repos\BlogRepo;
use App\Services\UploadImageService;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    protected $blogRepo;
    protected $uploadImageService;

    public function __construct(BlogRepo $blogRepo, UploadImageService $uploadImageService)
    {
        $this->blogRepo = $blogRepo;
        $this->uploadImageService = $uploadImageService;
    }

    public function index()
    {
        return view('admin.blog.blog');
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(CreateBlogRequest $request)
    {
        $values = $request->all();
        $files = $request->file('cover');
        if ($request->hasFile('cover')) {
            $paths = $this->uploadImageService->uploadImagesWithThumbnail([$files], config('blog.cover_path'));
            $values['image_path'] = $paths->get('images')[0];
            $values['thumbnail_path'] = $paths->get('thumbnails')[0];
        }
        $this->blogRepo->create($values);

        return redirect(route('blog.listing'));
    }

    public function edit(Blog $blog)
    {
       return view('admin.blog.edit', compact('blog'));
    }

    public function update(CreateBlogRequest $request, Blog $blog)
    {
       
       $files = $request->file('cover');
        if ($request->hasFile('cover')) {
            Storage::delete($blog->image_path);
            $paths = $this->uploadImageService->uploadImagesWithThumbnail([$files], config('blog.cover_path'));
            $values['image_path'] = $paths->get('images')[0];
            $values['thumbnail_path'] = $paths->get('thumbnails')[0];
        }
       $this->blogRepo->update($blog->id, $values);
       return redirect(route('blog.listing'));
    }

    public function destroy(Blog $blog)
    {
        $this->blogRepo->delete($blog->id);

        return redirect(route('blog.listing'));
    }

    public function list()
    {
        return DataTables::resource(BlogResource::collection(
            Blog::all()
        ))->toJson();
    }
}
