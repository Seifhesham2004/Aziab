<?php

namespace App\Http\Controllers;

use App\Mail\BookingRequestMail;
use App\Mail\ContactMessageMail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

        // Always store the lead so nothing is lost, even if email fails.
        Lead::create([
            'type'    => 'contact',
            'name'    => $data['name'],
            'email'   => $data['email'],
            'subject' => $data['subject'] ?? 'General enquiry',
            'message' => $data['message'],
        ]);

        try {
            Mail::to(config('mail.contact_to'))->send(new ContactMessageMail($data));
        } catch (\Throwable $e) {
            Log::warning('Contact email failed: ' . $e->getMessage());
        }

        return back()->with('sent', "Thanks {$data['name']}! Your message has been received — we'll reply within 24 hours.");
    }

    public function booking(Request $request)
    {
        $data = $request->validate([
            'first_name'  => ['required', 'string', 'max:100'],
            'last_name'   => ['required', 'string', 'max:100'],
            'email'       => ['required', 'email', 'max:190'],
            'phone'       => ['nullable', 'string', 'max:50'],
            'guests'      => ['nullable', 'integer', 'min:1', 'max:100'],
            'date'        => ['nullable', 'date'],
            'message'     => ['required', 'string', 'max:5000'],
            'trip_boat'   => ['nullable', 'string', 'max:120'],
            'trip_region' => ['nullable', 'string', 'max:40'],
            'trip_route'  => ['nullable', 'string', 'max:120'],
            'trip_from'   => ['nullable', 'date'],
            'trip_to'     => ['nullable', 'date'],
        ]);

        // Build a human-readable label for the schedule trip they clicked, if any.
        $trip = null;
        if (! empty($data['trip_boat']) || ! empty($data['trip_from'])) {
            $parts = array_filter([
                $data['trip_boat'] ?? null,
                ! empty($data['trip_region']) ? ucfirst($data['trip_region']) : null,
                $data['trip_route'] ?? null,
                (! empty($data['trip_from']) && ! empty($data['trip_to']))
                    ? \Illuminate\Support\Carbon::parse($data['trip_from'])->format('d M Y') . ' – ' . \Illuminate\Support\Carbon::parse($data['trip_to'])->format('d M Y')
                    : null,
            ]);
            $trip = implode(' · ', $parts);
        }
        $data['trip'] = $trip;

        Lead::create([
            'type'           => 'booking',
            'name'           => $data['first_name'] . ' ' . $data['last_name'],
            'email'          => $data['email'],
            'phone'          => $data['phone'] ?? null,
            'trip'           => $trip,
            'guests'         => $data['guests'] ?? null,
            'preferred_date' => $data['date'] ?? null,
            'message'        => $data['message'],
        ]);

        try {
            Mail::to(config('mail.contact_to'))->send(new BookingRequestMail($data));
        } catch (\Throwable $e) {
            Log::warning('Booking email failed: ' . $e->getMessage());
        }

        return back()->with('sent', "Thanks {$data['first_name']}! Your booking request has been received — we'll confirm by email within 24 hours.");
    }
}
