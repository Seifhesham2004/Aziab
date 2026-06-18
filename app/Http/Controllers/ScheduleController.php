<?php

namespace App\Http\Controllers;

use App\Models\ScheduleEntry;

class ScheduleController extends Controller
{
    public function index()
    {
        $entries = ScheduleEntry::orderBy('start_date')->get();

        $grouped = [];
        foreach ($entries as $e) {
            $monthKey = $e->start_date->format('Y-m');
            $grouped[$e->region][$e->boat][$monthKey][] = $e;
        }

        return view('pages.schedule', compact('grouped'));
    }
}
