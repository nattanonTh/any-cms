<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\CreateBlogRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use App\Repos\BlogRepo;
use App\Services\UploadImageService;
use Yajra\DataTables\Facades\DataTables;

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
        $values = $request->validated();
        $files = $request->file('cover');
        if ($request->hasFile('cover')) {
            $paths = $this->uploadImageService->uploadImagesWithThumbnail([$files], config('blog.cover_path'));
            $values['image_path'] = $paths->get('images')[0];
            $values['thumbnail_path'] = $paths->get('thumbnails')[0];
        }
        $this->blogRepo->create($values);

        return redirect(route('blog.listing'));
    }

    public function edit(Blog $user)
    {
//        $roles = Role::all();
//
//        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update($request, Blog $blog)
    {
//        $this->userRepo->update($user->id, $request->validated());
//        $user->removeRole($user->getRoleNames()->first());
//        $user->assignRole($request->input('role'));
//
//        return redirect(route('user.listing'));
    }

    public function destroy(Blog $blog)
    {
        $this->blogRepo->delete($blog->id);

        return redirect(route('user.listing'));
    }

    public function list()
    {
        return DataTables::resource(BlogResource::collection(
            Blog::all()
        ))->toJson();
    }
}
