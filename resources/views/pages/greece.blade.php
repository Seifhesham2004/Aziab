@extends('layouts.app')
@section('title','Greece')
@section('content')

{{-- HERO --}}
<section class="relative h-[85vh] min-h-[600px] overflow-hidden text-white flex items-center">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/greece/greece.png')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-5xl mx-auto w-full px-6 text-center">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">GREECE · AEGEAN &amp; IONIAN</p>
    <h1 class="font-display text-4xl md:text-6xl lg:text-7xl font-semibold leading-[1.1]" data-aos="fade-up">Sailing in Greece<br><span class="text-sea-300">— The Aegean Way of Life</span></h1>
    <p class="mt-6 text-lg md:text-xl text-white/90 max-w-3xl mx-auto font-light" data-aos="fade-up" data-aos-delay="200">
      Sailing in Greece is a rhythm, a lifestyle, and a way to experience the islands as they were meant to be seen: from the sea.
    </p>
  </div>
</section>

{{-- INTRO --}}
<section id="why" class="py-24 px-6 lg:px-12">
  <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
    <div class="img-zoom rounded-3xl overflow-hidden shadow-soft" data-aos="fade-right">
      <img src="/images/greece/Greece_10.jpg" class="w-full h-[560px] object-cover" alt="Sailing in the Aegean">
    </div>
    <div data-aos="fade-left">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Greece, the Aziab way</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">Endless horizons. Hidden coves. Timeless bays.</h2>
      <p class="text-slate-600 text-lg leading-relaxed mb-5">
        The Aegean and Ionian waters open up a world of endless horizons, whitewashed villages, hidden coves, and turquoise bays that feel untouched and timeless. Every island has its own personality — from the iconic beauty of the Cyclades to the lush, green landscapes of the Ionian Sea.
      </p>
      <p class="text-slate-600 text-lg leading-relaxed">
        Life onboard is slow, effortless, and deeply freeing. You wake up anchored in a quiet bay, swim straight into crystal-clear water, sail with the wind between islands, and end your day watching the sun melt into the horizon behind centuries-old villages.
      </p>
    </div>
  </div>
</section>

{{-- WHAT MAKES GREECE SPECIAL --}}
<section class="py-20 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-12" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">What makes it special</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">A combination unlike anywhere else.</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      @foreach([
        ['Islands &amp; villages exploration','Each island carries its own character, history, and rhythm.'],
        ['Short, scenic sailing distances','Move easily between islands — more time anchored, less time crossing.'],
        ['Hidden beaches only by boat','Coves and bays the road never reaches, all to yourselves.'],
      ] as $i => $v)
        <div class="bg-white rounded-3xl p-8 shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ $i*120 }}">
          <div class="w-12 h-12 rounded-full bg-sea-500 text-white flex items-center justify-center font-display text-xl font-bold mb-5">0{{ $i+1 }}</div>
          <h3 class="font-display text-xl font-semibold text-navy-900 mb-3">{!! $v[0] !!}</h3>
          <p class="text-slate-600 leading-relaxed text-sm">{{ $v[1] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- OUR YACHTS (carousel) --}}
<section id="fleet" class="py-24 px-6 lg:px-12">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-12" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Our yachts</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">A fleet shaped to your group.</h2>
    </div>

    <div class="grid lg:grid-cols-5 gap-10 items-center">
      <div class="lg:col-span-3" data-aos="fade-right">
        @php
          $greeceFleet = ['Greece_3.jpg','Greece_4.jpg','Greece_6.jpg','Greece_9.jpg','Greece_11.jpg','Greece_12.jpg'];
        @endphp
        <div class="carousel relative aspect-[16/10] overflow-hidden rounded-3xl shadow-soft" data-carousel>
          @foreach($greeceFleet as $i => $img)
            <div class="carousel-slide absolute inset-0 transition-opacity duration-700 {{ $i===0?'opacity-100':'opacity-0' }}">
              <img src="/images/greece/{{ $img }}" loading="lazy" class="w-full h-full object-cover" alt="Yachts in Greece">
            </div>
          @endforeach
          <button class="carousel-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white/85 hover:bg-white text-navy-900 flex items-center justify-center shadow-soft transition" aria-label="Previous">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
          </button>
          <button class="carousel-next absolute right-4 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white/85 hover:bg-white text-navy-900 flex items-center justify-center shadow-soft transition" aria-label="Next">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
          </button>
          <div class="carousel-dots absolute bottom-4 left-1/2 -translate-x-1/2 z-10 flex gap-2">
            @foreach($greeceFleet as $i => $_)
              <button data-dot="{{ $i }}" class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/50 hover:bg-white transition {{ $i===0?'bg-white':'' }}" aria-label="Slide {{ $i+1 }}"></button>
            @endforeach
          </div>
        </div>
      </div>

      <div class="lg:col-span-2" data-aos="fade-left">
        <p class="text-slate-600 text-lg leading-relaxed mb-5">
          At Aziab Seafaris, we manage a diverse fleet of yachts across Greece, ranging from smaller sailing boats to medium-sized sailboats and spacious luxury catamarans. This variety allows us to comfortably accommodate different group sizes — for 4, 6, 8, or up to 10 guests — and cater to a wide range of travel styles, group preferences, and sailing experiences.
        </p>
        <div class="space-y-4 mt-6">
          <div class="border-l-2 border-sea-400 pl-4">
            <h3 class="font-semibold text-navy-900 mb-1">Solo / shared bookings</h3>
            <p class="text-slate-600 text-sm leading-relaxed">Yacht chosen based on the number of guests booked — typically a sailboat with 3 or 4 cabins.</p>
          </div>
          <div class="border-l-2 border-sea-400 pl-4">
            <h3 class="font-semibold text-navy-900 mb-1">Private charters</h3>
            <p class="text-slate-600 text-sm leading-relaxed">Choose between sailboats and catamarans based on the group's preference and size.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ITINERARIES --}}
<section id="route" class="py-24 px-6 lg:px-12 bg-navy-900 text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-15 bg-cover bg-center" style="background-image:url('/images/greece/Greece_7.jpg')"></div>
  <div class="relative max-w-6xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
      <p class="text-sea-300 uppercase tracking-[0.3em] text-sm mb-3">Itineraries</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold">Two routes, two moods.</h2>
    </div>

    <div class="grid lg:grid-cols-2 gap-10">
      {{-- Corfu / Ionian --}}
      <div class="bg-white/5 backdrop-blur border border-white/10 rounded-3xl overflow-hidden" data-aos="fade-up">
        <div class="img-zoom aspect-[4/3] overflow-hidden">
          <img src="/images/greece/Greece_8.jpg" loading="lazy" class="w-full h-full object-cover" alt="Ionian Sea">
        </div>
        <div class="p-8">
          <p class="text-sea-300 uppercase tracking-[0.25em] text-xs font-semibold mb-2">Itinerary 1</p>
          <h3 class="font-display text-3xl font-semibold mb-3">Corfu / Ionian Sea</h3>
          <p class="text-xs uppercase tracking-wider text-white/60 mb-5">Arrival &amp; departure · Gouvia Marina — Corfu</p>
          <p class="text-white/80 leading-relaxed mb-4">
            A relaxed week of sailing exploring Paleokastritsa bays, Erimitis hidden coves, Paxos, Antipaxos, and Sivota bays. You'll explore authentic Greek villages and tavernas, visit untouched pristine waters, coves and cliffs only accessible by boat — and visit Corfu Old Town (UNESCO) and the famous Canal d'Amour cliff.
          </p>
          <p class="text-white/80 leading-relaxed mb-4">
            Along the journey, you'll discover authentic Greek villages, family-run tavernas by the water, and a slower rhythm of life that feels untouched by time. You'll sail into pristine coves, dramatic cliffs, and secluded beaches that are only accessible by boat, making every anchorage feel private and exclusive.
          </p>
          <p class="text-white/80 leading-relaxed italic mb-6">A journey where sailing, culture, and natural beauty come together in one effortless week at sea.</p>
          <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-sea-300 font-semibold hover:gap-3 transition-all border-b border-sea-300/60 pb-1">Email us for the detailed PDF →</a>
        </div>
      </div>

      {{-- Cyclades --}}
      <div class="bg-white/5 backdrop-blur border border-white/10 rounded-3xl overflow-hidden" data-aos="fade-up" data-aos-delay="150">
        <div class="img-zoom aspect-[4/3] overflow-hidden">
          <img src="/images/greece/Greece_2.jpg" loading="lazy" class="w-full h-full object-cover" alt="Cyclades">
        </div>
        <div class="p-8">
          <p class="text-sea-300 uppercase tracking-[0.25em] text-xs font-semibold mb-2">Itinerary 2</p>
          <h3 class="font-display text-3xl font-semibold mb-1">Cyclades Route</h3>
          <p class="font-display text-lg text-sea-300 mb-3">Athens to Mykonos Sailing Escape</p>
          <p class="text-xs uppercase tracking-wider text-white/60 mb-2">Arrival &amp; departure · Alimos or Lavrion Marinas — Athens</p>
          <p class="text-sm text-white/70 mb-5 font-medium">Athens → Kythnos → Syros → Mykonos → Athens</p>
          <p class="text-white/80 leading-relaxed italic mb-4">A journey through the heart of the Cyclades.</p>
          <p class="text-white/80 leading-relaxed mb-6">
            Set sail from Athens into the heart of the Cyclades on a week designed to blend authentic Greek island life, crystal-clear anchorages, elegant harbor towns, and vibrant cosmopolitan energy. From hidden coves and untouched beaches to whitewashed villages and iconic sunsets, this itinerary combines adventure, relaxation, culture, and unforgettable sailing experiences.
          </p>
          <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 text-sea-300 font-semibold hover:gap-3 transition-all border-b border-sea-300/60 pb-1">Email us for the detailed PDF →</a>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ACTIVITIES --}}
<section id="activities" class="py-24 px-6 lg:px-12">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Activities</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Tailored to your ideal pace.</h2>
      <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Every charter can be tailored to your ideal pace — whether you seek adventure, wellness, discovery, or complete relaxation.</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
      @foreach([
        'Island hopping across hidden bays and picturesque villages',
        'Swimming in crystal-clear waters',
        'Sunset sailing experiences',
        'Islands exploration',
        'Coastal hiking and scenic viewpoints',
        'Greek food and local tavern experiences',
        'Stargazing nights on deck',
        'Leisure cruises and slow travel experiences',
      ] as $i => $a)
        <div class="bg-sand-50 rounded-2xl p-6 shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ $i*60 }}">
          <div class="w-10 h-10 rounded-full bg-sea-500/15 text-sea-500 flex items-center justify-center font-display font-bold mb-4">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</div>
          <p class="font-semibold text-navy-900 leading-snug">{{ $a }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- POSTCARDS --}}
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

@push('scripts')
<script>
  document.querySelectorAll('[data-carousel]').forEach(c => {
    const slides = c.querySelectorAll('.carousel-slide');
    const dots   = c.querySelectorAll('.carousel-dot');
    let i = 0;
    const show = (n) => {
      i = (n + slides.length) % slides.length;
      slides.forEach((s,k)=> s.style.opacity = k===i ? '1' : '0');
      dots.forEach((d,k)=> d.classList.toggle('bg-white', k===i));
    };
    c.querySelector('.carousel-prev').addEventListener('click', ()=> show(i-1));
    c.querySelector('.carousel-next').addEventListener('click', ()=> show(i+1));
    dots.forEach((d,k)=> d.addEventListener('click', ()=> show(k)));
    setInterval(()=> show(i+1), 5500);
  });
</script>
@endpush
@endsection
