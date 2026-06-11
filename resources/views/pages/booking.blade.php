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
  <div class="max-w-6xl mx-auto grid lg:grid-cols-[1fr,1.2fr] gap-12">
    {{-- Trip summary --}}
    <div data-aos="fade-right">
      <h2 class="font-display text-3xl font-semibold text-navy-900 mb-6">Choose your trip</h2>
      <div class="space-y-4">
        @foreach([
          ['Egypt · Red Sea Cabin','7 nights · shared · from €890pp','egypt-bali/bali-40-nea-36.jpg'],
          ['Egypt · Roga Private Charter','7 nights · private · from €7,500','egypt-roga/65aa4168784e9459d407dde6.jpeg'],
          ['Greece · Cyclades Classic','10 nights · shared · from €1,450pp','greece/Greece_2.jpg'],
          ['Greece · Ionian Charter','7 nights · private · from €6,500','greece/Greece_8.jpg'],
        ] as $i => $t)
          <label class="trip-option flex gap-4 p-4 bg-white rounded-2xl border border-slate-200 hover:border-sea-400 hover:shadow-soft cursor-pointer transition" data-aos="fade-up" data-aos-delay="{{ $i*60 }}">
            <input type="radio" name="trip" class="mt-1 accent-sea-500" {{ $i===0?'checked':'' }}>
            <img src="/images/{{ $t[2] }}" class="w-24 h-24 object-cover rounded-xl" alt="">
            <div>
              <h3 class="font-semibold text-navy-900">{{ $t[0] }}</h3>
              <p class="text-sm text-slate-500 mt-1">{{ $t[1] }}</p>
            </div>
          </label>
        @endforeach
      </div>
    </div>

    {{-- Form --}}
    <div class="bg-sand-50 rounded-3xl p-8 md:p-10 shadow-soft" data-aos="fade-left">
      <h2 class="font-display text-3xl font-semibold text-navy-900 mb-6">Your details</h2>
      <form class="grid grid-cols-2 gap-4" onsubmit="event.preventDefault(); alert('Backend coming soon — your request would be saved here.');">
        <div class="col-span-2 sm:col-span-1">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">First name</label>
          <input class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 focus:border-sea-400 focus:ring-sea-400" required>
        </div>
        <div class="col-span-2 sm:col-span-1">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Last name</label>
          <input class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 focus:border-sea-400 focus:ring-sea-400" required>
        </div>
        <div class="col-span-2">
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Email</label>
          <input type="email" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" required>
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
          <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Tell us more (optional)</label>
          <textarea rows="4" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" placeholder="Diving? Dietary needs? Celebrating something?"></textarea>
        </div>
        <button type="submit" class="col-span-2 bg-sea-500 hover:bg-sea-600 text-white font-semibold py-4 rounded-full shadow-soft transition mt-2">Request booking</button>
        <p class="col-span-2 text-xs text-slate-500 text-center">No payment required now — we'll confirm by email first.</p>
      </form>
    </div>
  </div>
</section>

@push('scripts')
<script>
  document.querySelectorAll('.trip-option').forEach(el => {
    el.addEventListener('click', () => {
      document.querySelectorAll('.trip-option').forEach(o => o.classList.remove('border-sea-500','bg-white','ring-2','ring-sea-400'));
      el.classList.add('border-sea-500','ring-2','ring-sea-400');
    });
  });
</script>
@endpush
@endsection
