@extends('admin.layout')
@section('title','Schedule')
@section('content')

<div class="flex items-center justify-between mb-8">
  <div>
    <h1 class="text-3xl font-bold">Schedule</h1>
    <p class="text-slate-500 text-sm mt-1">{{ $entries->count() }} trips on file.</p>
  </div>
  <a href="#new" class="bg-sea-500 hover:bg-sea-600 text-white px-5 py-2.5 rounded-lg text-sm font-semibold transition">+ Add trip</a>
</div>

{{-- NEW ENTRY --}}
<div id="new" class="bg-white border border-slate-200 rounded-2xl p-6 mb-10 shadow-sm">
  <h2 class="font-semibold mb-4 text-lg">Add a new trip</h2>
  <form method="POST" action="{{ route('admin.schedules.store') }}" class="grid sm:grid-cols-2 lg:grid-cols-6 gap-4">
    @csrf
    <div class="lg:col-span-1">
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Region</label>
      <select name="region" required class="w-full rounded-lg border-slate-200">
        <option value="egypt">Egypt</option>
        <option value="greece">Greece</option>
      </select>
    </div>
    <div class="lg:col-span-2">
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Boat</label>
      <input type="text" name="boat" value="{{ old('boat') }}" required placeholder="Sailboat Beneteau Cyclades 50.5" class="w-full rounded-lg border-slate-200">
    </div>
    <div class="lg:col-span-1">
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Route (optional)</label>
      <input type="text" name="route" value="{{ old('route') }}" placeholder="Cyclades Route" class="w-full rounded-lg border-slate-200">
    </div>
    <div>
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Start</label>
      <input type="date" name="start_date" required class="w-full rounded-lg border-slate-200">
    </div>
    <div>
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">End</label>
      <input type="date" name="end_date" required class="w-full rounded-lg border-slate-200">
    </div>
    <div class="lg:col-span-3">
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Notes (optional)</label>
      <input type="text" name="notes" value="{{ old('notes') }}" class="w-full rounded-lg border-slate-200">
    </div>
    <div class="lg:col-span-2">
      <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Availability</label>
      <input type="text" name="availability" value="{{ old('availability') }}" list="availability-suggestions" placeholder="e.g. Fully Booked or 6 spots left" class="w-full rounded-lg border-slate-200">
      <datalist id="availability-suggestions">
        <option value="Fully Booked">
        <option value="2 spots left">
        <option value="4 spots left">
        <option value="6 spots left">
      </datalist>
    </div>
    <div class="lg:col-span-1 flex items-end">
      <button class="w-full bg-navy-900 text-white rounded-lg py-2.5 font-semibold hover:bg-navy-800 transition">Add</button>
    </div>
  </form>
</div>

{{-- LIST --}}
<div class="bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-sm">
  <table class="w-full text-sm">
    <thead class="bg-slate-50 text-xs uppercase tracking-wider text-slate-500">
      <tr>
        <th class="text-left px-4 py-3">Region</th>
        <th class="text-left px-4 py-3">Boat</th>
        <th class="text-left px-4 py-3">Route</th>
        <th class="text-left px-4 py-3">Start</th>
        <th class="text-left px-4 py-3">End</th>
        <th class="text-left px-4 py-3">Notes</th>
        <th class="text-left px-4 py-3">Availability</th>
        <th class="px-4 py-3"></th>
      </tr>
    </thead>
    <tbody class="divide-y divide-slate-100">
      @forelse($entries as $e)
        <tr>
          <form method="POST" action="{{ route('admin.schedules.update', $e) }}" class="contents">
            @csrf
            @method('PUT')
            <td class="px-4 py-2">
              <select name="region" class="w-full text-xs rounded border-slate-200">
                <option value="egypt"  @selected($e->region==='egypt')>Egypt</option>
                <option value="greece" @selected($e->region==='greece')>Greece</option>
              </select>
            </td>
            <td class="px-4 py-2"><input type="text" name="boat" value="{{ $e->boat }}" class="w-full text-xs rounded border-slate-200"></td>
            <td class="px-4 py-2"><input type="text" name="route" value="{{ $e->route }}" class="w-full text-xs rounded border-slate-200"></td>
            <td class="px-4 py-2"><input type="date" name="start_date" value="{{ $e->start_date->format('Y-m-d') }}" class="w-full text-xs rounded border-slate-200"></td>
            <td class="px-4 py-2"><input type="date" name="end_date" value="{{ $e->end_date->format('Y-m-d') }}" class="w-full text-xs rounded border-slate-200"></td>
            <td class="px-4 py-2"><input type="text" name="notes" value="{{ $e->notes }}" class="w-full text-xs rounded border-slate-200"></td>
            <td class="px-4 py-2"><input type="text" name="availability" value="{{ $e->availability }}" list="availability-suggestions" placeholder="—" class="w-full text-xs rounded border-slate-200"></td>
            <td class="px-4 py-2 whitespace-nowrap text-right">
              <button class="text-xs bg-sea-500 hover:bg-sea-600 text-white rounded px-3 py-1.5 font-semibold transition">Save</button>
          </form>
              <form method="POST" action="{{ route('admin.schedules.destroy', $e) }}" class="inline" onsubmit="return confirm('Delete this trip?')">
                @csrf
                @method('DELETE')
                <button class="text-xs bg-rose-500 hover:bg-rose-600 text-white rounded px-3 py-1.5 font-semibold transition ml-1">Delete</button>
              </form>
            </td>
        </tr>
      @empty
        <tr><td colspan="8" class="text-center text-slate-500 py-12">No schedule entries yet. Add one above.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>

@endsection
