<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Member\MemberCreateRequest;
use App\Http\Requests\Admin\Member\MemberEditRequest;
use App\Http\Resources\MemberResource;
use App\Models\Member;
use App\Repos\MemberRepo;
use App\Services\UploadImageService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class MemberController extends Controller
{
    protected $memberRepo;
    protected $uploadImageService;

    public function __construct(MemberRepo $memberRepo, UploadImageService $uploadImageService)
    {
        $this->memberRepo = $memberRepo;
        $this->uploadImageService = $uploadImageService;
    }

    public function index()
    {
        return view('admin.members.users');
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function store(MemberCreateRequest $request)
    {
        $values = $request->merge([
            'status' => config('any_cms.member_status.normal'),
        ])->all();
        $values['birth_date'] = Carbon::createFromFormat('d/m/Y', $values['birth_date'])->format('Y-m-d');

        // upload profile image
        $member = $this->memberRepo->create($values);

        return redirect()->to(route('member.listing'));
    }

    public function edit(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }

    public function update(MemberEditRequest $request, Member $member)
    {
        $values = $request->all();
        $values['birth_date'] = Carbon::createFromFormat('d/m/Y', $values['birth_date'])->format('Y-m-d');

        $this->memberRepo->update($member->id, $values);

        return redirect()->to(route('member.listing'));
    }

    public function destroy(Member $member)
    {
        Storage::delete($member->profile_path);
        $this->memberRepo->delete($member->id);

        return redirect()->to(route('member.listing'));
    }

    public function list()
    {
        return DataTables::resource(MemberResource::collection(
            Member::all()
        ))->toJson();
    }
}
