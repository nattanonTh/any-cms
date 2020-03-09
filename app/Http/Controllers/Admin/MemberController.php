<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Member\MemberCreateRequest;
use App\Http\Requests\Admin\Member\MemberEditRequest;
use App\Http\Resources\MemberResource;
use App\Models\Member;
use App\Repos\EventRepo;
use App\Repos\MemberRepo;
use App\Services\UploadImageService;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class MemberController extends Controller
{
    protected $memberRepo;
    protected $eventRepo;

    public function __construct(MemberRepo $memberRepo, EventRepo $eventRepo)
    {
        $this->memberRepo = $memberRepo;
        $this->eventRepo = $eventRepo;
    }

    public function index()
    {
        return view('admin.members.users');
    }

    public function create()
    {
        return view('admin.members.create');
    }

    public function createExternal() {
        return view('admin.members.create-ex');
    }

    public function storeExternal(MemberCreateRequest $request)
    {
        $values = $request->merge([
            'status' => config('any_cms.member_status.normal'),
        ])->all();
        $values['birth_date'] = Carbon::createFromFormat('d/m/Y', $values['birth_date'])->format('Y-m-d');

        // upload profile image
        $this->memberRepo->create($values);

        return 'ลงทะเบียนเรียบร้อยแล้ว กรุณาติดต่อเจ้าหน้าที่';
    }

    public function store(MemberCreateRequest $request)
    {
        $values = $request->merge([
            'status' => config('any_cms.member_status.normal'),
        ])->all();
        $values['birth_date'] = Carbon::createFromFormat('d/m/Y', $values['birth_date'])->format('Y-m-d');

        // upload profile image
        $this->memberRepo->create($values);

        return redirect()->to(route('member.listing'));
    }

    public function edit(Member $member)
    {
        return view('admin.members.edit', compact('member'));
    }

    public function update(MemberEditRequest $request, Member $member)
    {
        $values = $request->except('image');
        if (!is_null($request->input('image'))) {
            $values['image'] = $request->input('image');
        }
        $values['birth_date'] = Carbon::createFromFormat('d/m/Y', $values['birth_date'])->format('Y-m-d');

        $this->memberRepo->update($member->id, $values);

        return redirect()->to(route('member.listing'));
    }

    public function destroy(Member $member)
    {
        $this->memberRepo->delete($member->id);

        return redirect()->to(route('member.listing'));
    }

    public function view(Member $member)
    {
        $events = $this->eventRepo->all();
        $date = Carbon::now()->format('d/m/Y');
        return view('admin.members.view', compact('member', 'events', 'date'));
    }

    public function list()
    {
        return DataTables::resource(MemberResource::collection(
            Member::all()
        ))->toJson();
    }
}
