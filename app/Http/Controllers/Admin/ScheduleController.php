<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ScheduleEntry;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $entries = ScheduleEntry::orderBy('region')
            ->orderBy('boat')
            ->orderBy('start_date')
            ->get();
        return view('admin.schedules.index', compact('entries'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'region'     => ['required', 'in:egypt,greece'],
            'boat'       => ['required','string','max:120'],
            'route'      => ['nullable','string','max:120'],
            'start_date' => ['required','date'],
            'end_date'   => ['required','date','after_or_equal:start_date'],
            'notes'      => ['nullable','string','max:255'],
        ]);

        ScheduleEntry::create($data);
        return redirect()->route('admin.schedules.index')->with('status','Schedule added.');
    }

    public function update(Request $request, ScheduleEntry $schedule)
    {
        $data = $request->validate([
            'region'     => ['required', 'in:egypt,greece'],
            'boat'       => ['required','string','max:120'],
            'route'      => ['nullable','string','max:120'],
            'start_date' => ['required','date'],
            'end_date'   => ['required','date','after_or_equal:start_date'],
            'notes'      => ['nullable','string','max:255'],
        ]);

        $schedule->update($data);
        return redirect()->route('admin.schedules.index')->with('status','Schedule updated.');
    }

    public function destroy(ScheduleEntry $schedule)
    {
        $schedule->delete();
        return redirect()->route('admin.schedules.index')->with('status','Schedule deleted.');
    }
}
