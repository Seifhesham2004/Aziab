@extends('layouts.app')
@section('title','Contact')
@section('content')

<section class="relative pt-36 pb-20 px-6 lg:px-12 bg-navy-900 text-white overflow-hidden">
  <div class="absolute inset-0 opacity-25" style="background-image:url('/images/general/_MG_9565.jpg');background-size:cover;background-position:center;"></div>
  <div class="relative max-w-4xl mx-auto text-center">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">GET IN TOUCH</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-tight" data-aos="fade-up">Let's talk seafaris.</h1>
  </div>
</section>

<section class="py-20 px-6 lg:px-12">
  <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12">
    <div data-aos="fade-right">
      <h2 class="font-display text-3xl font-semibold text-navy-900 mb-6">Reach the crew.</h2>
      <p class="text-slate-600 leading-relaxed mb-8">We respond within 24 hours, usually faster. Drop us a line for bookings, private charters, group offers or just a chat about the sea.</p>
      <div class="space-y-6">
        @foreach([
          ['Email','hello@aziab-seafaris.com'],
          ['Phone / WhatsApp','+20 100 000 0000'],
          ['Office','Hurghada Marina, Egypt'],
          ['Operating','Year-round in Egypt · May–Oct in Greece'],
        ] as $c)
          <div class="flex gap-4 items-start">
            <div class="w-10 h-10 rounded-full bg-sea-500/15 text-sea-500 flex items-center justify-center font-bold">→</div>
            <div>
              <p class="text-xs uppercase tracking-wider text-slate-500">{{ $c[0] }}</p>
              <p class="font-medium text-navy-900">{{ $c[1] }}</p>
            </div>
          </div>
        @endforeach
      </div>
    </div>

    <form data-aos="fade-left" class="bg-sand-50 rounded-3xl p-8 md:p-10 space-y-4 shadow-soft" onsubmit="event.preventDefault(); alert('Backend coming soon — message would be sent.');">
      <div>
        <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Your name</label>
        <input class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" required>
      </div>
      <div>
        <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Email</label>
        <input type="email" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" required>
      </div>
      <div>
        <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Subject</label>
        <select class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3">
          <option>General enquiry</option><option>Booking</option><option>Private charter</option><option>Press / partnership</option>
        </select>
      </div>
      <div>
        <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Message</label>
        <textarea rows="5" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" required></textarea>
      </div>
      <button class="w-full bg-sea-500 hover:bg-sea-600 text-white font-semibold py-4 rounded-full shadow-soft transition">Send message</button>
    </form>
  </div>
</section>

@endsection
