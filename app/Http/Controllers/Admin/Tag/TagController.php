<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTagRequest;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Repos\TagRepo;
use Yajra\DataTables\Facades\DataTables;

class TagController extends Controller
{
    protected $tagRepo;
    protected $uploadImageService;

    public function __construct(TagRepo $tagRepo)
    {
        $this->tagRepo = $tagRepo;
    }

    public function index()
    {
        return view('admin.tag.tag');
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(CreateTagRequest $request)
    {
        $values = $request->all();
        $this->tagRepo->create($values);

        return redirect(route('tag.listing'));
    }

    public function edit(Tag $tag)
    {
       return view('admin.tag.edit', compact('tag'));
    }

    public function update(CreateTagRequest $request, Tag $tag)
    {
        $values = $request->all();
        $this->tagRepo->update($tag->id, $values);
        return redirect(route('tag.listing'));
    }

    public function destroy(Tag $tag)
    {
        $this->tagRepo->delete($tag->id);

        return redirect(route('tag.listing'));
    }

    public function list()
    {
        return DataTables::resource(TagResource::collection(
            Tag::all()
        ))->toJson();
    }
}
