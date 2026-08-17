<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderByRaw("role = 'super_admin' desc")->orderBy('name')->get();

        return view('admin.users.index', compact('users'));
    }

    public function store(Request $request)
    {
        $actor = $request->user();

        $data = $request->validate([
            'name'     => ['required', 'string', 'max:120'],
            'phone'    => ['required', 'string', 'max:30', 'unique:users,phone'],
            'password' => ['required', 'string', 'min:8'],
            'role'     => ['required', Rule::in([User::ROLE_ADMIN, User::ROLE_SUPER_ADMIN])],
        ]);

        // A normal admin may only create other admins — never a super admin.
        if ($data['role'] === User::ROLE_SUPER_ADMIN && ! $actor->isSuperAdmin()) {
            throw ValidationException::withMessages([
                'role' => 'Only a super admin can create a super admin account.',
            ]);
        }

        User::create($data);

        return back()->with('status', ucfirst(str_replace('_', ' ', $data['role'])).' account created.');
    }

    public function destroy(Request $request, User $user)
    {
        // Route is already restricted to super admins; also stop self-deletion.
        if ($user->id === $request->user()->id) {
            return back()->withErrors(['user' => 'You cannot delete your own account.']);
        }

        $user->delete();

        return back()->with('status', 'Account deleted.');
    }
}
