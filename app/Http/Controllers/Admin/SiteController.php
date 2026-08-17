<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Toggle the public site open/closed. Restricted to super admins by route middleware.
     */
    public function toggle(Request $request)
    {
        $closed = Setting::isSiteClosed();
        Setting::put('site_closed', $closed ? '0' : '1');

        return back()->with('status', $closed ? 'Website re-opened to the public.' : 'Website is now closed to the public.');
    }
}
