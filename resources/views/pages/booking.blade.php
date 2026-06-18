@extends('layouts.app')
@section('title','Booking')
@section('content')

<section class="relative pt-32 pb-16 px-6 lg:px-12 bg-navy-900 text-white overflow-hidden">
  <div class="absolute inset-0 opacity-30" style="background-image:url('/images/general/8L4A8413.jpg');background-size:cover;background-position:center;"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-navy-900/40 to-navy-900"></div>
  <div class="relative max-w-5xl mx-auto text-center">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">RESERVE YOUR JOURNEY</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-tight" data-aos="fade-up">Book your seafari.</h1>
    <p class="mt-5 text-lg text-white/80 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">Pick a cabin on a shared trip, or charter the whole yacht. We'll confirm availability within 24 hours.</p>
  </div>
</section>

<section class="py-20 px-6 lg:px-12">
  <div class="max-w-3xl mx-auto">
    <div class="bg-sand-50 rounded-3xl p-8 md:p-12 shadow-soft" data-aos="fade-up">
      <h2 class="font-display text-3xl font-semibold text-navy-900 mb-2">Your details</h2>
      <p class="text-slate-500 mb-8">Tell us about the trip you have in mind — we'll get back to you within 24 hours.</p>
      <form class="grid grid-cols-2 gap-4" onsubmit="event.preventDefault(); alert('Backend coming soon — your request would be saved here.');">
        <div class="col-span-2 sm:col-span-1">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">First name</label>
          <input class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 focus:border-sea-400 focus:ring-sea-400" required>
        </div>
        <div class="col-span-2 sm:col-span-1">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Last name</label>
          <input class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 focus:border-sea-400 focus:ring-sea-400" required>
        </div>
        <div class="col-span-2 sm:col-span-1">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Email</label>
          <input type="email" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" required>
        </div>
        <div class="col-span-2 sm:col-span-1">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Phone</label>
          <input type="tel" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3">
        </div>
        <div class="col-span-2 sm:col-span-1">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Guests</label>
          <input type="number" min="1" value="2" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3">
        </div>
        <div class="col-span-2 sm:col-span-1">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Preferred date</label>
          <input type="date" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3">
        </div>
        <div class="col-span-2">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Tell us about your trip</label>
          <p class="text-xs text-slate-500 mb-2">Destination (Egypt / Greece), yacht preference, private charter or shared cabin, route, any special requests — the more detail, the better.</p>
          <textarea rows="8" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" placeholder="e.g. Egypt — Sailboat Roga, private charter, 6 days in October 2027 for a group of 6. Interested in freediving and Sataya dolphins." required></textarea>
        </div>
        <button type="submit" class="col-span-2 bg-sea-500 hover:bg-sea-600 text-white font-semibold py-4 rounded-full shadow-soft transition mt-2">Request booking</button>
        <p class="col-span-2 text-xs text-slate-500 text-center">No payment required now — we'll confirm by email first.</p>
      </form>
    </div>
  </div>
</section>

@endsection
