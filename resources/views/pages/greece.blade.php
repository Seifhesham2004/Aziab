@extends('layouts.app')
@section('title','Greece')
@section('content')

{{-- HERO --}}
<section class="relative h-[80vh] min-h-[560px] overflow-hidden text-white flex items-end">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/greece/Greece_1.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-7xl mx-auto w-full px-6 pb-20">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">GREECE · AEGEAN &amp; IONIAN</p>
    <h1 class="font-display text-5xl md:text-8xl font-semibold leading-[1.05] max-w-4xl" data-aos="fade-up">Whitewashed villages.<br>Quiet anchorages.</h1>
    <p class="mt-6 text-lg md:text-xl text-white/85 max-w-2xl" data-aos="fade-up" data-aos-delay="200">
      Catamaran charters through the Greek islands — built around skipping the crowds, not joining them.
    </p>
  </div>
</section>

{{-- INTRO --}}
<section class="py-24 px-6 lg:px-12">
  <div class="max-w-5xl mx-auto text-center" data-aos="fade-up">
    <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Greece, the Aziab way</p>
    <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">
      Two catamarans we know inside out. <br>The whole Aegean to choose from.
    </h2>
    <p class="text-slate-600 text-lg leading-relaxed">
      We manage two catamarans in Greece year-round, with additional yachts available on request. Our advantage isn't size — it's local knowledge: routes built around the islands locals love, not the ones that show up on every travel feed.
    </p>
  </div>
</section>

{{-- ITINERARIES --}}
<section class="py-20 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Pick your archipelago</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Two routes, two moods.</h2>
    </div>
    <div class="grid lg:grid-cols-2 gap-10">
      @foreach([
        ['Cyclades Classic','7 or 10 nights','Athens → Kea → Kythnos → Serifos → Sifnos → Milos → Folegandros → Santorini. White cubist villages, indigo domes, fiery sunsets.','Greece_2.jpg'],
        ['Ionian Cruise','7 nights','Lefkada → Meganisi → Ithaca → Kefalonia → Atokos. Emerald coves, calm seas, perfect for first-time sailors and families.','Greece_8.jpg'],
      ] as $i => $r)
        <div class="bg-white rounded-3xl overflow-hidden shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ $i*150 }}">
          <div class="img-zoom aspect-[16/10] overflow-hidden">
            <img src="/images/greece/{{ $r[3] }}" loading="lazy" class="w-full h-full object-cover" alt="{{ $r[0] }}">
          </div>
          <div class="p-8">
            <p class="text-sea-500 text-xs uppercase tracking-wider mb-2">{{ $r[1] }}</p>
            <h3 class="font-display text-3xl font-semibold text-navy-900 mb-3">{{ $r[0] }}</h3>
            <p class="text-slate-600 leading-relaxed">{{ $r[2] }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <p class="text-center text-sm text-slate-500 mt-8">Bespoke routes available — tell us your dates and dream islands, and we'll build it.</p>
  </div>
</section>

{{-- HOW WE RUN GREECE --}}
<section class="py-24 px-6 lg:px-12">
  <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
    <div data-aos="fade-right" class="img-zoom rounded-3xl overflow-hidden shadow-soft">
      <img src="/images/greece/Greece_10.jpg" class="w-full h-[520px] object-cover" alt="Sailing in Greece">
    </div>
    <div data-aos="fade-left">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">How it works</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">Skipper-led. Crew you choose.</h2>
      <ul class="space-y-5 text-slate-700">
        <li class="flex gap-4">
          <span class="font-display text-2xl text-sea-500 font-semibold leading-none w-8 shrink-0">01</span>
          <div><h3 class="font-semibold text-navy-900 mb-1">Professional skipper included</h3><p class="text-slate-600 text-sm leading-relaxed">Licensed and locally based, with deep knowledge of the Aegean and Ionian Seas.</p></div>
        </li>
        <li class="flex gap-4">
          <span class="font-display text-2xl text-sea-500 font-semibold leading-none w-8 shrink-0">02</span>
          <div><h3 class="font-semibold text-navy-900 mb-1">Add a chef, host or guide</h3><p class="text-slate-600 text-sm leading-relaxed">Tailor the crew to your trip — request a private chef, kid-host, dive instructor or yoga teacher.</p></div>
        </li>
        <li class="flex gap-4">
          <span class="font-display text-2xl text-sea-500 font-semibold leading-none w-8 shrink-0">03</span>
          <div><h3 class="font-semibold text-navy-900 mb-1">Cabin or whole yacht</h3><p class="text-slate-600 text-sm leading-relaxed">Join a shared expedition on select dates, or charter the entire boat for your group.</p></div>
        </li>
        <li class="flex gap-4">
          <span class="font-display text-2xl text-sea-500 font-semibold leading-none w-8 shrink-0">04</span>
          <div><h3 class="font-semibold text-navy-900 mb-1">May to October</h3><p class="text-slate-600 text-sm leading-relaxed">Greek season runs spring through autumn. Best winds in July–August; calmest waters in May and September.</p></div>
        </li>
      </ul>
    </div>
  </div>
</section>

{{-- GALLERY MASONRY --}}
<section class="py-24 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Postcards</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">From the Aegean</h2>
    </div>
    <div class="columns-1 sm:columns-2 lg:columns-3 gap-4">
      @foreach(['Greece_3.jpg','Greece_4.jpg','Greece_5.jpg','Greece_6.jpg','Greece_7.jpg','Greece_9.jpg','Greece_10.jpg','Greece_11.jpg','Greece_12.jpg'] as $g)
        <div class="img-zoom rounded-2xl overflow-hidden break-inside-avoid shadow-soft mb-4 inline-block w-full">
          <img src="/images/greece/{{ $g }}" loading="lazy" class="w-full h-auto object-cover block" alt="">
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="py-20 px-6 lg:px-12">
  <div class="max-w-5xl mx-auto bg-gradient-to-br from-navy-800 to-sea-600 rounded-3xl p-12 md:p-16 text-center text-white shadow-soft" data-aos="zoom-in">
    <h2 class="font-display text-4xl md:text-5xl font-semibold mb-4">Greek summer awaits.</h2>
    <p class="text-lg text-white/85 mb-8">Cabin spots on select dates. Private catamaran charters May–October.</p>
    <div class="flex flex-wrap gap-4 justify-center">
      <a href="{{ route('booking') }}" class="bg-white text-navy-900 hover:bg-sand-100 px-8 py-4 rounded-full font-semibold transition">Book a Greek seafari</a>
      <a href="{{ route('contact') }}" class="border border-white/40 hover:bg-white/10 px-8 py-4 rounded-full font-semibold transition">Request a custom route</a>
    </div>
  </div>
</section>

@endsection
