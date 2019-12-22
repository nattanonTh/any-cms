<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\User\UserEditRequest;
use App\Http\Requests\Admin\User\UserCreateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Repos\UserRepo;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class UserManagementController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function index()
    {
        //
        return view('admin.users.users');
    }

    public function create()
    {
        //
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(UserCreateRequest $request)
    {
        $values = $request->validated();
        $values['password'] =  Hash::make($values['password']);
        $user = $this->userRepo->create($values);
        $user->assignRole( $values['role']);
        return redirect(route('user.listing'));
    }

    public function edit(User $user)
    {
        //
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(UserEditRequest $request, User $user)
    {
        //
        $this->userRepo->update($user->id, $request->validated());
        $user->removeRole($user->getRoleNames()->first());
        $user->assignRole($request->input('role'));
        return redirect(route('user.listing'));
    }

    public function destroy(User $user)
    {
        //
        $this->userRepo->delete($user->id);
        return redirect(route('user.listing'));
    }

    public function list()
    {
        return DataTables::resource(UserResource::collection(
            User::all()->except(config('any-cms.admin_user_id'))
        ))->toJson();
    }
}
