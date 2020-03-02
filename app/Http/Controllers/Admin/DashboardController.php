<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResource;
use App\Models\Contact;use App\Repos\ContactRepo;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    protected $contactRepo;
    public function __construct(ContactRepo $contactRepo)
    {
        $this->contactRepo = $contactRepo;
    }

    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function destroyContact(Contact $contact)
    {
        $this->contactRepo->delete($contact->id);

        return redirect(route('dashboard'));
    }

    public function contactList()
    {
        return DataTables::resource(ContactResource::collection(
            Contact::all()
        ))->toJson();
    }
}
