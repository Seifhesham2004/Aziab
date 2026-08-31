<?php

namespace App\Http\Controllers;

use App\Mail\BookingRequestMail;
use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function contact(Request $request)
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:150'],
            'email'   => ['required', 'email', 'max:190'],
            'subject' => ['nullable', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(config('mail.contact_to'))->send(new ContactMessageMail($data));

        return back()->with('sent', "Thanks {$data['name']}! Your message has been sent — we'll reply within 24 hours.");
    }

    public function booking(Request $request)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name'  => ['required', 'string', 'max:100'],
            'email'      => ['required', 'email', 'max:190'],
            'phone'      => ['nullable', 'string', 'max:50'],
            'guests'     => ['nullable', 'integer', 'min:1', 'max:100'],
            'date'       => ['nullable', 'date'],
            'message'    => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(config('mail.contact_to'))->send(new BookingRequestMail($data));

        return back()->with('sent', "Thanks {$data['first_name']}! Your booking request has been sent — we'll confirm by email within 24 hours.");
    }
}
