@extends('layouts.app')
@section('title','Egypt · Red Sea')
@section('content')

{{-- HERO --}}
<section class="relative h-[80vh] min-h-[560px] overflow-hidden text-white flex items-end">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/egypt-bali/bali-40-nea-36.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-7xl mx-auto w-full px-6 pb-20">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">EGYPT · RED SEA</p>
    <h1 class="font-display text-5xl md:text-8xl font-semibold leading-[1.05] max-w-4xl" data-aos="fade-up">Our base.<br>Our speciality.</h1>
    <p class="mt-6 text-lg md:text-xl text-white/85 max-w-2xl" data-aos="fade-up" data-aos-delay="200">
      Sailing charters across the Red Sea — year-round, with our own licensed fleet and the crew that's done this longer than anyone in Egypt.
    </p>
  </div>
</section>

{{-- INTRO --}}
<section class="py-24 px-6 lg:px-12">
  <div class="max-w-5xl mx-auto text-center" data-aos="fade-up">
    <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Why the Red Sea</p>
    <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">
      Year-round sailing. Water at <span class="text-sea-500">22–30°C</span>. Reefs nobody else can reach.
    </h2>
    <p class="text-slate-600 text-lg leading-relaxed">
      An Aziab Red Sea trip is around <strong>50 nautical miles</strong> and 6–8 hours of actual sailing across the week — the rest of the time we're moored at protected reefs, swimming, eating, doing nothing. It's deliberately relaxed.
    </p>
  </div>
</section>

{{-- WILDLIFE & ACTIVITIES STRIP --}}
<section class="py-20 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">What you'll actually do</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Reefs, dolphins, deep breaths.</h2>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
      @foreach([
        ['Satayah Lagoon','One of the world\'s top sites for spinner dolphins — entire pods in clear shallow water.'],
        ['Hamata Islands','Quiet southern reefs with drop-offs, canyons and coral pinnacles — fewer boats than the north.'],
        ['Freediving paradise','Aziab is an apnea favourite — calm anchorages, perfect visibility, on-board safety.'],
        ['Yoga at anchor','Sunrise sessions on deck in the southern islands — the quietest stretch of the Red Sea.'],
      ] as $i => $a)
        <div class="bg-white rounded-2xl p-6 shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ $i*100 }}">
          <div class="w-10 h-1 bg-sea-500 mb-4 rounded-full"></div>
          <h3 class="font-display text-xl font-semibold text-navy-900 mb-2">{{ $a[0] }}</h3>
          <p class="text-slate-600 text-sm leading-relaxed">{{ $a[1] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- THE FLEET — 4 yachts --}}
<section class="py-24 px-6 lg:px-12">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Our fleet</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Four yachts. Pick yours.</h2>
      <p class="text-slate-600 mt-3 max-w-xl mx-auto">All licensed under Egyptian law and skippered by professional crew — bareboat charters are not permitted in Egypt.</p>
    </div>

    {{-- Flagship pair --}}
    <div class="grid lg:grid-cols-2 gap-8">
      {{-- SY ROAGA --}}
      <div class="bg-white rounded-3xl overflow-hidden shadow-soft card-hover" data-aos="fade-up">
        <div class="img-zoom aspect-[16/10] overflow-hidden relative">
          <img src="/images/egypt-roga/65aa4168784e9459d407dde6.jpeg" class="w-full h-full object-cover" alt="SY Roaga">
          <div class="absolute top-4 left-4 bg-white/95 backdrop-blur rounded-full px-4 py-1.5 text-xs font-semibold text-navy-900">Sailboat</div>
        </div>
        <div class="p-8">
          <h3 class="font-display text-3xl font-semibold text-navy-900 mb-1">SY Roaga</h3>
          <p class="text-sm text-sea-500 uppercase tracking-wider mb-5">Beneteau Cyclades 50.5</p>
          <p class="text-slate-600 leading-relaxed mb-6">A classic monohull built for blue water. Heels gracefully into the wind, sleeps eight in four cabins (a fifth on request), with two ensuite + one shared bathroom.</p>
          <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
            <div class="border-l-2 border-sea-400 pl-3"><p class="text-xs uppercase tracking-wider text-slate-500">Cabins</p><p class="font-display text-lg font-semibold text-navy-900">4 (+1)</p></div>
            <div class="border-l-2 border-sea-400 pl-3"><p class="text-xs uppercase tracking-wider text-slate-500">Guests</p><p class="font-display text-lg font-semibold text-navy-900">6–8 (max 10)</p></div>
            <div class="border-l-2 border-sea-400 pl-3"><p class="text-xs uppercase tracking-wider text-slate-500">Power</p><p class="font-display text-lg font-semibold text-navy-900">2 × 120W solar</p></div>
            <div class="border-l-2 border-sea-400 pl-3"><p class="text-xs uppercase tracking-wider text-slate-500">Watermaker</p><p class="font-display text-lg font-semibold text-navy-900">150 L / hr</p></div>
          </div>
          <a href="{{ route('booking') }}" class="inline-flex items-center gap-2 text-sea-500 font-semibold hover:gap-3 transition-all">Book SY Roaga →</a>
        </div>
      </div>

      {{-- SY SAINT TROPEZ --}}
      <div class="bg-white rounded-3xl overflow-hidden shadow-soft card-hover" data-aos="fade-up" data-aos-delay="120">
        <div class="img-zoom aspect-[16/10] overflow-hidden relative">
          <img src="/images/egypt-bali/bali-40-nea-50.jpg" class="w-full h-full object-cover" alt="SY Saint Tropez">
          <div class="absolute top-4 left-4 bg-white/95 backdrop-blur rounded-full px-4 py-1.5 text-xs font-semibold text-navy-900">Catamaran · Flagship</div>
        </div>
        <div class="p-8">
          <h3 class="font-display text-3xl font-semibold text-navy-900 mb-1">SY Saint Tropez</h3>
          <p class="text-sm text-sea-500 uppercase tracking-wider mb-5">World-class catamaran</p>
          <p class="text-slate-600 leading-relaxed mb-6">Six guest cabins, six bathrooms, air conditioning throughout, a 1,000 L watermaker and a tender with outboard. Our flagship — built for families and larger groups who want everything.</p>
          <div class="grid grid-cols-2 gap-4 mb-6 text-sm">
            <div class="border-l-2 border-sea-400 pl-3"><p class="text-xs uppercase tracking-wider text-slate-500">Cabins</p><p class="font-display text-lg font-semibold text-navy-900">6 + crew</p></div>
            <div class="border-l-2 border-sea-400 pl-3"><p class="text-xs uppercase tracking-wider text-slate-500">Bathrooms</p><p class="font-display text-lg font-semibold text-navy-900">6 + crew</p></div>
            <div class="border-l-2 border-sea-400 pl-3"><p class="text-xs uppercase tracking-wider text-slate-500">Comfort</p><p class="font-display text-lg font-semibold text-navy-900">A/C onboard</p></div>
            <div class="border-l-2 border-sea-400 pl-3"><p class="text-xs uppercase tracking-wider text-slate-500">Fresh water</p><p class="font-display text-lg font-semibold text-navy-900">1,000 L</p></div>
          </div>
          <a href="{{ route('booking') }}" class="inline-flex items-center gap-2 text-sea-500 font-semibold hover:gap-3 transition-all">Book SY Saint Tropez →</a>
        </div>
      </div>
    </div>

    {{-- Smaller cats --}}
    <div class="grid md:grid-cols-2 gap-8 mt-8">
      {{-- SY 38 --}}
      <div class="bg-navy-900 text-white rounded-3xl overflow-hidden shadow-soft card-hover" data-aos="fade-up">
        <div class="grid grid-cols-[1fr,1.4fr]">
          <div class="img-zoom overflow-hidden">
            <img src="/images/egypt-bali/images-23.jpeg" class="w-full h-full object-cover" alt="SY 38">
          </div>
          <div class="p-6">
            <p class="text-sea-300 uppercase tracking-wider text-xs mb-1">Catamaran</p>
            <h3 class="font-display text-2xl font-semibold mb-1">SY 38</h3>
            <p class="text-xs text-white/60 mb-4">Lagoon 380</p>
            <ul class="text-sm text-white/80 space-y-1 mb-4">
              <li>4 double cabins · 2 bathrooms</li>
              <li>2 × 29 hp Yanmar engines</li>
              <li>600 L fresh water · new trampoline</li>
              <li>Deck shower &amp; kitchen</li>
            </ul>
          </div>
        </div>
      </div>

      {{-- SY 4020 --}}
      <div class="bg-navy-900 text-white rounded-3xl overflow-hidden shadow-soft card-hover" data-aos="fade-up" data-aos-delay="120">
        <div class="grid grid-cols-[1fr,1.4fr]">
          <div class="img-zoom overflow-hidden">
            <img src="/images/egypt-bali/images-48.jpeg" class="w-full h-full object-cover" alt="SY 4020">
          </div>
          <div class="p-6">
            <p class="text-sea-300 uppercase tracking-wider text-xs mb-1">Catamaran · 40 ft</p>
            <h3 class="font-display text-2xl font-semibold mb-1">SY 4020</h3>
            <p class="text-xs text-white/60 mb-4">Family catamaran</p>
            <ul class="text-sm text-white/80 space-y-1 mb-4">
              <li>4 guest + 2 crew cabins</li>
              <li>4 bathrooms (+ crew)</li>
              <li>2 × 35 hp Yanmar engines</li>
              <li>700 L water · dinghy with outboard</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <p class="text-center text-sm text-slate-500 mt-10">Need something specific? We can source additional yachts on request.</p>
  </div>
</section>

{{-- WHAT'S INCLUDED --}}
<section class="py-20 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10">
    <div data-aos="fade-right">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">All-inclusive</p>
      <h2 class="font-display text-3xl md:text-4xl font-semibold text-navy-900 mb-6">Everything that matters, in the price.</h2>
      <ul class="space-y-3 text-slate-700">
        @foreach([
          'Professional crew — captain, chef and snorkel guide',
          '3 meals + snack daily, soft drinks, tea, coffee, juices',
          'Accommodation in your chosen cabin',
          'Snorkeling equipment &amp; water toys on board',
          'Emergency medical supplies',
        ] as $li)
          <li class="flex gap-3"><span class="text-sea-500 mt-1">✓</span><span>{!! $li !!}</span></li>
        @endforeach
      </ul>
    </div>
    <div class="bg-white rounded-3xl p-8 shadow-soft" data-aos="fade-left">
      <p class="text-xs uppercase tracking-[0.25em] text-slate-500 mb-3">Bring with you</p>
      <ul class="space-y-2 text-slate-700 text-sm mb-6">
        <li>• Personal towels &amp; toiletries</li>
        <li>• Sunblock (reef-safe please)</li>
        <li>• Any alcoholic beverages</li>
        <li>• Your camera</li>
      </ul>
      <div class="border-t border-slate-100 pt-4">
        <p class="text-xs uppercase tracking-[0.25em] text-amber-600 mb-2 font-semibold">Heads up</p>
        <p class="text-sm text-slate-600 leading-relaxed">Our boats run on solar — large electronic devices (laptops, drones with bulky chargers) can't always be charged on board. Phones &amp; cameras are fine.</p>
      </div>
    </div>
  </div>
</section>

{{-- SAMPLE ROUTE --}}
<section class="py-24 px-6 lg:px-12 bg-navy-900 text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-15" style="background-image:url('/images/general/22.11.25_Reef__Wreck_DSLR_1_edited.jpg');background-size:cover;background-position:center;"></div>
  <div class="relative max-w-5xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
      <p class="text-sea-300 uppercase tracking-[0.3em] text-sm mb-3">A typical week</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold">Hurghada → Satayah · 6 days, 5 nights</h2>
      <p class="text-white/70 mt-3">~50 nm of sailing across the week. The rest of the time we're moored, swimming, eating.</p>
    </div>
    <div class="space-y-6">
      @foreach([
        ['Day 1','Hurghada Marina','Welcome on board, briefing, dinner in the bay.'],
        ['Day 2','Abu Galawa wreck','Snorkel a half-submerged wreck wrapped in coral.'],
        ['Day 3','Hamata Islands','Drift along quiet southern reefs — drop-offs and canyons.'],
        ['Day 4','Satayah Lagoon','Swim with resident spinner dolphins; sunset yoga on deck.'],
        ['Day 5','Malahi reef','Remote anchorage, beach BBQ, stargazing.'],
        ['Day 6','Return to Hurghada','Slow sail back, late lunch on board.'],
      ] as $d)
        <div class="flex gap-6 items-start" data-aos="fade-up">
          <div class="font-display text-2xl text-sea-300 w-20 shrink-0">{{ $d[0] }}</div>
          <div class="border-l-2 border-sea-400/40 pl-6 pb-4 flex-1">
            <h3 class="font-display text-2xl mb-1">{{ $d[1] }}</h3>
            <p class="text-white/70">{{ $d[2] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
