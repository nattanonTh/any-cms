<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use App\Http\Resources\EventResource;
use App\Models\Attention;use App\Models\Event;
use App\Models\Member;
use App\Repos\AttentionRepo;
use App\Repos\EventRepo;
use Barryvdh\DomPDF\PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    protected $eventRepo;
    protected $attentionRepo;

    public function __construct(EventRepo $eventRepo, AttentionRepo $attentionRepo)
    {
        $this->eventRepo = $eventRepo;
        $this->attentionRepo = $attentionRepo;
    }

    public function index()
    {
        return view('admin.events.events');
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(EventRequest $request)
    {
        $values = $request->all();

        $event = $this->eventRepo->create($values);

        return redirect()->to(route('event.listing'));
    }

    public function edit(Event $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(EventRequest $request, Event $event)
    {
        $values = $request->all();

        $this->eventRepo->update($event->id, $values);

        return redirect()->to(route('event.listing'));
    }

    public function destroy(Event $event)
    {
        $this->eventRepo->delete($event->id);

        return redirect()->to(route('event.listing'));
    }

    public function addAttention(Member $member, Request $request)
    {
        if (is_null($request->input('event_id'))) {
            return redirect()->to(route('member.view', $member->id));
        }
        $startDate = Carbon::createFromFormat('d/m/Y', $request->input('start_date'))->format('Y-m-d');
        $endDate = Carbon::createFromFormat('d/m/Y', $request->input('start_date'))
            ->addDays($request->input('attend_date'))
            ->format('Y-m-d');

        $this->attentionRepo->create([
            'event_id' => $request->input('event_id'),
            'member_id' => $member->id,
            'attend_date' => $request->input('attend_date'),
            'attend_start' => $startDate,
            'attend_end' => $endDate,
        ]);

        return redirect()->to(route('member.view', $member->id));
    }

    public function deleteAttention(Attention $attention, Request $request)
    {
        $this->attentionRepo->delete($attention->id);

        return redirect()->to(route('member.view', $attention->member->id));
    }

    public function printAttention(Attention $attention) {

        return view('admin.events.print', [
            'member' => $attention->member,
            'attention' => $attention,
        ]);
    }

    public function list()
    {
        return DataTables::resource(EventResource::collection(
            Event::all()
        ))->toJson();
    }
}
