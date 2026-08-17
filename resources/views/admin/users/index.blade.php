@extends('admin.layout')
@section('title','Team')
@section('content')

@php $me = auth()->user(); @endphp

<div class="mb-8">
  <h1 class="text-3xl font-bold">Team</h1>
  <p class="text-slate-500 text-sm mt-1">{{ $users->count() }} account(s).</p>
</div>

{{-- CREATE --}}
<div class="bg-white border border-slate-200 rounded-2xl p-6 mb-10 shadow-sm">
  <h2 class="font-semibold mb-4 text-lg">Create an account</h2>
  <form method="POST" action="{{ route('admin.users.store') }}" class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
    @csrf
    <div>
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Name</label>
      <input type="text" name="name" value="{{ old('name') }}" required class="w-full rounded-lg border-slate-200">
    </div>
    <div>
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Phone</label>
      <input type="text" name="phone" value="{{ old('phone') }}" required class="w-full rounded-lg border-slate-200">
    </div>
    <div>
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Password</label>
      <input type="text" name="password" required minlength="8" placeholder="min 8 characters" class="w-full rounded-lg border-slate-200">
    </div>
    <div>
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Role</label>
      <select name="role" required class="w-full rounded-lg border-slate-200">
        <option value="admin">Admin</option>
        @if($me->isSuperAdmin())
          <option value="super_admin">Super Admin</option>
        @endif
      </select>
    </div>
    <div class="flex items-end">
      <button class="w-full bg-navy-900 text-white rounded-lg py-2.5 font-semibold hover:bg-navy-800 transition">Create</button>
    </div>
  </form>
  @unless($me->isSuperAdmin())
    <p class="text-xs text-slate-400 mt-3">As an admin you can create Admin accounts. Only a super admin can create Super Admins.</p>
  @endunless
</div>

{{-- LIST --}}
<div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm">
  <table class="w-full text-sm">
    <thead class="bg-slate-50 text-slate-500 text-xs uppercase tracking-wider">
      <tr>
        <th class="text-left px-6 py-3">Name</th>
        <th class="text-left px-6 py-3">Phone</th>
        <th class="text-left px-6 py-3">Role</th>
        @if($me->isSuperAdmin())<th class="px-6 py-3"></th>@endif
      </tr>
    </thead>
    <tbody class="divide-y divide-slate-100">
      @foreach($users as $u)
        <tr>
          <td class="px-6 py-3 font-medium">{{ $u->name }}</td>
          <td class="px-6 py-3 text-slate-600">{{ $u->phone }}</td>
          <td class="px-6 py-3">
            @if($u->isSuperAdmin())
              <span class="inline-block bg-sea-500/10 text-sea-600 px-2.5 py-1 rounded-full text-xs font-semibold">Super Admin</span>
            @else
              <span class="inline-block bg-slate-100 text-slate-600 px-2.5 py-1 rounded-full text-xs font-semibold">Admin</span>
            @endif
          </td>
          @if($me->isSuperAdmin())
            <td class="px-6 py-3 text-right">
              @if($u->id !== $me->id)
                <form method="POST" action="{{ route('admin.users.destroy', $u) }}" onsubmit="return confirm('Delete {{ $u->name }}?')">
                  @csrf @method('DELETE')
                  <button class="text-rose-500 hover:text-rose-700 text-xs font-semibold">Delete</button>
                </form>
              @else
                <span class="text-xs text-slate-300">You</span>
              @endif
            </td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
