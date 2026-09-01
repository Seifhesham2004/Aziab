@extends('admin.layout')
@section('title','Leads')
@section('content')

<div class="mb-8">
  <h1 class="text-3xl font-bold">Leads</h1>
  <p class="text-slate-500 text-sm mt-1">{{ $leads->count() }} submission(s) from the contact & booking forms.</p>
</div>

@if($leads->isEmpty())
  <div class="bg-white border border-slate-200 rounded-2xl p-10 text-center text-slate-500 shadow-sm">
    No leads yet. Contact and booking form submissions will appear here.
  </div>
@else
  <div class="space-y-4">
    @foreach($leads as $lead)
      <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm">
        <div class="flex items-start justify-between gap-4 flex-wrap">
          <div>
            <div class="flex items-center gap-2 mb-1">
              @if($lead->type === 'booking')
                <span class="text-[11px] font-bold uppercase tracking-wider bg-sea-500/10 text-sea-600 px-2 py-0.5 rounded-full">Booking</span>
              @else
                <span class="text-[11px] font-bold uppercase tracking-wider bg-navy-900/5 text-navy-800 px-2 py-0.5 rounded-full">Contact</span>
              @endif
              @if($lead->subject)<span class="text-xs text-slate-400">· {{ $lead->subject }}</span>@endif
            </div>
            <h3 class="text-lg font-semibold text-navy-900">{{ $lead->name }}</h3>
            @if($lead->trip)
              <p class="text-sm mt-1"><span class="text-[11px] uppercase tracking-wider text-sea-600 font-semibold">Trip:</span> <span class="text-navy-800 font-medium">{{ $lead->trip }}</span></p>
            @endif
            <div class="text-sm text-slate-600 mt-1 flex flex-wrap gap-x-4 gap-y-1">
              <a href="mailto:{{ $lead->email }}" class="text-sea-600 hover:underline">{{ $lead->email }}</a>
              @if($lead->phone)<a href="tel:{{ $lead->phone }}" class="hover:underline">{{ $lead->phone }}</a>@endif
              @if($lead->guests)<span>Guests: {{ $lead->guests }}</span>@endif
              @if($lead->preferred_date)<span>Preferred: {{ $lead->preferred_date->format('d M Y') }}</span>@endif
            </div>
          </div>
          <div class="text-right shrink-0">
            <div class="text-xs text-slate-400">{{ $lead->created_at->format('d M Y, H:i') }}</div>
            <form method="POST" action="{{ route('admin.leads.destroy', $lead) }}" class="mt-2"
                  onsubmit="return confirm('Delete this lead permanently?');">
              @csrf @method('DELETE')
              <button class="text-xs text-rose-500 hover:text-rose-700 transition">Delete</button>
            </form>
          </div>
        </div>
        <div class="mt-4 bg-sand-50 rounded-xl p-4 text-sm text-slate-700 whitespace-pre-line">{{ $lead->message }}</div>
      </div>
    @endforeach
  </div>
@endif

@endsection
