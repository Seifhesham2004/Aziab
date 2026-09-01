<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;

class LeadController extends Controller
{
    public function index()
    {
        $leads = Lead::orderByDesc('created_at')->get();
        // Mark everything as read once the admin opens the page.
        Lead::where('is_read', false)->update(['is_read' => true]);
        return view('admin.leads.index', compact('leads'));
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return redirect()->route('admin.leads.index')->with('status', 'Lead deleted.');
    }
}
