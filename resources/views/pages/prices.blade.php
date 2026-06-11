@extends('layouts.app')
@section('title','Prices & Schedule')
@section('content')

{{-- HERO --}}
<section class="relative pt-36 pb-24 px-6 lg:px-12 bg-navy-900 text-white overflow-hidden">
  <div class="absolute inset-0 opacity-30 ken-burns bg-cover bg-center" style="background-image:url('/images/general/8L4A8413.jpg')"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-navy-900/60 to-navy-900"></div>
  <div class="relative max-w-5xl mx-auto text-center">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">PRICES &amp; SCHEDULE</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-tight" data-aos="fade-up">Transparent rates.<br>No hidden anchors.</h1>
    <p class="mt-6 text-lg text-white/80 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">Cabin spots, private charters, full-board packages — pick the format that suits your group.</p>
  </div>
</section>

{{-- TABS --}}
<section class="sticky top-20 z-30 bg-white border-b border-slate-100 shadow-sm">
  <div class="max-w-7xl mx-auto px-6 flex gap-2 overflow-x-auto">
    @foreach([['egypt','Egypt · Red Sea'],['greece','Greece'],['maldives','Maldives'],['notes','Inclusions &amp; notes']] as $t)
      <a href="#{{ $t[0] }}" class="px-5 py-4 text-sm font-semibold text-slate-500 hover:text-sea-500 border-b-2 border-transparent hover:border-sea-500 transition whitespace-nowrap">{!! $t[1] !!}</a>
    @endforeach
  </div>
</section>

{{-- ============ EGYPT ============ --}}
<section id="egypt" class="py-24 px-6 lg:px-12 scroll-mt-32">
  <div class="max-w-7xl mx-auto">
    <div class="grid lg:grid-cols-[1fr,2fr] gap-12 items-start">
      <div data-aos="fade-right">
        <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Red Sea · Egypt</p>
        <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">Two ways to sail Egypt.</h2>
        <p class="text-slate-600 leading-relaxed mb-4">Join a shared expedition by the cabin, or charter the whole yacht for your group.</p>
        <p class="text-xs text-slate-500">Egyptian law requires a licensed skipper — bareboat charters are not permitted. Service &amp; food packages are mandatory and added on top of charter rates.</p>
      </div>

      <div class="space-y-10" data-aos="fade-left">
        {{-- Cabin spots --}}
        <div>
          <h3 class="font-display text-2xl font-semibold text-navy-900 mb-5">Book by the cabin</h3>
          <div class="grid sm:grid-cols-2 gap-5">
            @foreach([
              ['4 days · 3 nights','€500','+ €150 / person · food &amp; marina fees'],
              ['6 days · 5 nights','€650','+ €250 / person · food &amp; marina fees'],
            ] as $i => $c)
              <div class="bg-white border border-slate-200 rounded-2xl p-6 hover:border-sea-400 hover:shadow-soft transition" data-aos="fade-up" data-aos-delay="{{ $i*100 }}">
                <p class="text-xs uppercase tracking-wider text-slate-500 mb-2">{{ $c[0] }}</p>
                <p class="font-display text-4xl text-navy-900 font-semibold">{{ $c[1] }}<span class="text-base text-slate-400 font-sans">/person</span></p>
                <p class="text-sm text-slate-500 mt-3">{!! $c[2] !!}</p>
              </div>
            @endforeach
          </div>
          <p class="text-xs text-slate-500 mt-4">Shared double cabin. Private cabin = <span class="font-semibold text-navy-900">1.4×</span> the rate.</p>
        </div>

        {{-- Private charter --}}
        <div>
          <h3 class="font-display text-2xl font-semibold text-navy-900 mb-5">Private charter</h3>
          <div class="overflow-hidden rounded-2xl border border-slate-200">
            <table class="w-full text-left">
              <thead class="bg-navy-900 text-white text-xs uppercase tracking-wider">
                <tr><th class="p-4">Yacht</th><th class="p-4">4d · 3n</th><th class="p-4">6d · 5n</th><th class="p-4 hidden sm:table-cell">Daily</th></tr>
              </thead>
              <tbody class="divide-y divide-slate-100 text-navy-900">
                @foreach([
                  ['Sailboat · Roga','€3,000','€5,000','€890'],
                  ['Catamaran · Bali 40','€4,500','€5,900','€950'],
                ] as $r)
                  <tr class="hover:bg-sand-50 transition">
                    <td class="p-4 font-semibold">{{ $r[0] }}</td>
                    <td class="p-4 font-display text-xl">{{ $r[1] }}</td>
                    <td class="p-4 font-display text-xl">{{ $r[2] }}</td>
                    <td class="p-4 text-slate-500 hidden sm:table-cell">{{ $r[3] }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <p class="text-xs text-slate-500 mt-3">Mandatory service &amp; food: €150/person (4d) · €250/person (6d). EGP rates available for Egyptians and residents on request.</p>
        </div>

        <a href="{{ route('booking') }}" class="inline-flex items-center gap-2 bg-sea-500 hover:bg-sea-600 text-white px-7 py-3.5 rounded-full font-semibold shadow-soft transition">Book your Egypt trip →</a>
      </div>
    </div>
  </div>
</section>

{{-- ============ GREECE ============ --}}
<section id="greece" class="py-24 px-6 lg:px-12 bg-sand-50 scroll-mt-32 relative overflow-hidden">
  <div class="absolute right-0 top-0 w-1/2 h-full opacity-20 hidden md:block" style="background-image:url('/images/greece/Greece_5.jpg');background-size:cover;background-position:center;"></div>
  <div class="relative max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
    <div data-aos="fade-right">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Greece · Aegean</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">Curated by request.</h2>
      <p class="text-slate-600 leading-relaxed text-lg mb-6">
        Greek itineraries run May through October and are tailored to your group, route and preferred yacht. On select dates we open spots for cabin bookings — get in touch and we'll share the next availability.
      </p>
      <ul class="space-y-3 text-slate-700 mb-8">
        @foreach(['Cyclades Classic — 7 or 10 nights','Ionian Cruise — 7 nights','Saronic short break — 4 or 5 nights','Bespoke island-hopping itineraries'] as $li)
          <li class="flex items-start gap-3"><span class="text-sea-500 mt-1">◆</span>{{ $li }}</li>
        @endforeach
      </ul>
      <div class="flex flex-wrap gap-4">
        <a href="{{ route('contact') }}" class="bg-sea-500 hover:bg-sea-600 text-white px-7 py-3.5 rounded-full font-semibold shadow-soft transition">Request Greece pricing</a>
        <a href="{{ route('greece') }}" class="border border-navy-900/15 hover:border-navy-900 px-7 py-3.5 rounded-full font-semibold text-navy-900 transition">See itineraries</a>
      </div>
    </div>
    <div class="bg-white rounded-3xl p-8 md:p-10 shadow-soft" data-aos="fade-left">
      <p class="text-xs uppercase tracking-wider text-slate-500 mb-2">Indicative ranges</p>
      <div class="space-y-5">
        <div class="flex justify-between items-baseline border-b border-slate-100 pb-4">
          <div>
            <p class="font-display text-xl text-navy-900">Cabin spot</p>
            <p class="text-sm text-slate-500">Shared double · 7 nights</p>
          </div>
          <p class="font-display text-3xl text-navy-900 font-semibold">from €1,200<span class="text-base text-slate-400 font-sans">pp</span></p>
        </div>
        <div class="flex justify-between items-baseline border-b border-slate-100 pb-4">
          <div>
            <p class="font-display text-xl text-navy-900">Private monohull</p>
            <p class="text-sm text-slate-500">Up to 8 guests · 7 nights</p>
          </div>
          <p class="font-display text-3xl text-navy-900 font-semibold">from €6,500</p>
        </div>
        <div class="flex justify-between items-baseline">
          <div>
            <p class="font-display text-xl text-navy-900">Private catamaran</p>
            <p class="text-sm text-slate-500">Up to 10 guests · 7 nights</p>
          </div>
          <p class="font-display text-3xl text-navy-900 font-semibold">from €9,800</p>
        </div>
      </div>
      <p class="text-xs text-slate-500 mt-6">Final rates vary by yacht, season and route. Skipper fee, fuel and marina fees not included.</p>
    </div>
  </div>
</section>

{{-- ============ MALDIVES ============ --}}
<section id="maldives" class="py-24 px-6 lg:px-12 scroll-mt-32">
  <div class="max-w-5xl mx-auto text-center" data-aos="fade-up">
    <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Maldives · Atolls</p>
    <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">One week, one boat, one ocean.</h2>
    <div class="grid sm:grid-cols-2 gap-6 mt-10 text-left">
      <div class="bg-white border border-slate-200 rounded-2xl p-7 hover:border-sea-400 hover:shadow-soft transition">
        <p class="text-xs uppercase tracking-wider text-slate-500 mb-2">Cabin spot · 7 nights</p>
        <p class="font-display text-4xl text-navy-900 font-semibold">€1,270<span class="text-base text-slate-400 font-sans">/person</span></p>
        <p class="text-sm text-slate-500 mt-3">Shared cabin · group cooking on board</p>
      </div>
      <div class="bg-navy-900 text-white rounded-2xl p-7">
        <p class="text-xs uppercase tracking-wider text-sea-300 mb-2">Full yacht charter · 7 nights</p>
        <p class="font-display text-4xl font-semibold">€9,160</p>
        <p class="text-sm text-white/70 mt-3">Skipper, guide, transfers from Malé, food &amp; soft drinks included</p>
      </div>
    </div>
  </div>
</section>

{{-- ============ INCLUSIONS / NOTES ============ --}}
<section id="notes" class="py-24 px-6 lg:px-12 bg-navy-900 text-white relative overflow-hidden scroll-mt-32">
  <div class="absolute inset-0 opacity-15" style="background-image:url('/images/general/IMG_4108.jpg');background-size:cover;background-position:center;"></div>
  <div class="relative max-w-6xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <h2 class="font-display text-4xl md:text-5xl font-semibold">What's in the price.</h2>
    </div>
    <div class="grid md:grid-cols-2 gap-8">
      <div class="glass rounded-3xl p-8" data-aos="fade-right">
        <h3 class="font-display text-2xl mb-5 text-sea-300">Included</h3>
        <ul class="space-y-3 text-white/85">
          @foreach(['Licensed skipper &amp; crew','Marina fees &amp; marine park permits','Fuel for normal sailing','Linen, towels &amp; on-board amenities','Breakfast and most lunches','Snorkeling gear (on request)'] as $li)
            <li class="flex gap-3"><span class="text-sea-300">✓</span> {!! $li !!}</li>
          @endforeach
        </ul>
      </div>
      <div class="glass rounded-3xl p-8" data-aos="fade-left">
        <h3 class="font-display text-2xl mb-5 text-white/80">Not included</h3>
        <ul class="space-y-3 text-white/85">
          @foreach(['Flights &amp; airport transfers','Dinners ashore','Alcoholic beverages','Diving (PADI dives bookable on board)','Gratuities','Travel insurance'] as $li)
            <li class="flex gap-3"><span class="text-white/40">×</span> {!! $li !!}</li>
          @endforeach
        </ul>
      </div>
    </div>
    <div class="mt-12 text-center text-sm text-white/60" data-aos="fade-up">
      Deposit: 30% to confirm. Free cancellation up to 60 days before departure · 50% refund up to 30 days · non-refundable but transferable after.
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="py-20 px-6 lg:px-12">
  <div class="max-w-5xl mx-auto bg-gradient-to-br from-navy-800 to-sea-600 rounded-3xl p-12 md:p-16 text-center text-white shadow-soft" data-aos="zoom-in">
    <h2 class="font-display text-4xl md:text-5xl font-semibold mb-4">Have a date in mind?</h2>
    <p class="text-lg text-white/85 mb-8">Send us your group size and preferred week — we'll come back with availability and a full quote within 24h.</p>
    <div class="flex flex-wrap gap-4 justify-center">
      <a href="{{ route('booking') }}" class="bg-white text-navy-900 hover:bg-sand-100 px-8 py-4 rounded-full font-semibold transition">Request a booking</a>
      <a href="{{ route('contact') }}" class="border border-white/40 hover:bg-white/10 px-8 py-4 rounded-full font-semibold transition">Talk to us</a>
    </div>
  </div>
</section>

@endsection
