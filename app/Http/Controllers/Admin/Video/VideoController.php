<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Video\CreateVideoRequest;
use App\Http\Resources\VideoResource;
use App\Models\Video;
use App\Repos\VideoRepo;
use Yajra\DataTables\Facades\DataTables;

class VideoController extends Controller
{
    protected $videoRepo;

    public function __construct(VideoRepo $videoRepo)
    {
        $this->videoRepo = $videoRepo;
    }

    public function index()
    {
        return view('admin.video.video');
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(CreateVideoRequest $request)
    {
        $values = $request->all();
        $this->videoRepo->create($values);

        return redirect(route('video.listing'));
    }

    public function edit(Video $video)
    {
       return view('admin.video.edit', compact('video'));
    }

    public function update(CreateVideoRequest $request, Video $video)
    {
        $values = $request->all();
        $this->videoRepo->update($video->id, $values);
        return redirect(route('video.listing'));
    }

    public function destroy(Video $video)
    {
        $this->videoRepo->delete($video->id);

        return redirect(route('video.listing'));
    }

    public function list()
    {
        return DataTables::resource(VideoResource::collection(
            Video::all()
        ))->toJson();
    }
}
