@extends('layouts.app')
@section('title','Home')
@section('content')

{{-- ============ HERO SLIDER ============ --}}
@php
  $heroSlides = [
    ['img'=>'8L4A8648.jpg','kicker'=>'CONNECT','title'=>'With family & friends','sub'=>'on an exclusive sailing journey'],
    ['img'=>'22.11.26_Aziab_day_one_DSLR_38_edited_phshop.jpg','kicker'=>'DISCOVER','title'=>'Untouched coves & reefs','sub'=>'across three continents'],
    ['img'=>'IMG_4355.jpg','kicker'=>'ESCAPE','title'=>'Slow down at sea','sub'=>'wake to sunrise on deck'],
  ];
@endphp

<div id="heroWrap" class="relative">
  <section id="hero" class="relative h-screen min-h-[640px] w-full overflow-hidden text-white">
    <div id="slides" class="absolute inset-0">
      @foreach($heroSlides as $i => $s)
        <div class="hero-slide absolute inset-0 transition-opacity duration-1000 {{ $i===0?'opacity-100':'opacity-0' }}">
          <div class="hero-bg absolute inset-0 ken-burns bg-cover bg-center will-change-transform" style="background-image:url('/images/general/{{ $s['img'] }}')"></div>
          <div class="absolute inset-0 hero-overlay"></div>
        </div>
      @endforeach
    </div>

    {{-- Content layered above all slides — fades & lifts on scroll --}}
    <div id="heroContent" class="relative z-10 h-full flex flex-col justify-center items-center text-center px-6 will-change-transform">
      @foreach($heroSlides as $i => $s)
        <div class="hero-text absolute inset-x-0 px-6 transition-opacity duration-1000 {{ $i===0?'opacity-100':'opacity-0' }}">
          <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">{{ $s['kicker'] }}</p>
          <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-semibold leading-[1.05] max-w-5xl mx-auto" data-aos="fade-up">{{ $s['title'] }}</h1>
          <p class="mt-6 text-lg md:text-2xl text-white/90 font-light max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">{{ $s['sub'] }}</p>
          @if($i===0)
            <div class="mt-10 flex flex-wrap gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
              <a href="{{ route('booking') }}" class="bg-sea-500 hover:bg-sea-600 px-8 py-4 rounded-full font-semibold shadow-soft transition">Book your trip</a>
              <a href="#destinations" class="glass hover:bg-white/20 px-8 py-4 rounded-full font-semibold transition">Explore destinations</a>
            </div>
          @endif
        </div>
      @endforeach
    </div>

    {{-- Dots --}}
    <div id="heroDots" class="absolute bottom-24 left-1/2 -translate-x-1/2 z-20 flex gap-3">
      @foreach($heroSlides as $i => $_)
        <button data-dot="{{ $i }}" class="hero-dot w-10 h-1 rounded-full bg-white/40 hover:bg-white transition {{ $i===0?'bg-white':'' }}"></button>
      @endforeach
    </div>

    {{-- Scroll cue --}}
    <div id="scrollCue" class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 text-white/80 text-xs tracking-widest flex flex-col items-center gap-2 animate-bounce">
      SCROLL
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
    </div>

    {{-- Dim layer that intensifies on scroll --}}
    <div id="heroDim" class="absolute inset-0 bg-navy-900 pointer-events-none opacity-0"></div>
  </section>
</div>

{{-- Sub-bar --}}
<div class="bg-navy-800 text-white py-4 text-center font-medium tracking-wider text-sm md:text-base">
  Sailing expeditions over <span class="text-sea-300">3 continents</span> — Egypt · Greece · Maldives
</div>

{{-- ============ BRIEF / INTRO ============ --}}
<section class="py-24 px-6 lg:px-12 bg-sand-50 relative overflow-hidden">
  <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-16 items-center">
    <div class="img-zoom rounded-3xl overflow-hidden shadow-soft" data-aos="fade-right">
      <img src="/images/general/8L4A8021.jpg" alt="Sailing" class="w-full h-[520px] object-cover">
    </div>
    <div data-aos="fade-left">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-4">Welcome aboard</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 leading-tight mb-6">
        A different kind of <span class="gradient-text">seafari</span>.
      </h2>
      <p class="text-slate-600 text-lg leading-relaxed mb-6">
        Aziab Seafaris curates intimate sailing expeditions for travellers who crave authenticity over agenda. From the silent reefs of the Red Sea to the sun-bleached islets of the Aegean, every voyage is shaped around the people on board.
      </p>
      <p class="text-slate-600 text-lg leading-relaxed mb-8">
        Book a single cabin and meet kindred sailors, or charter the whole yacht for a private escape with the people who matter most.
      </p>
      <div class="grid grid-cols-3 gap-6">
        @foreach([['10+','Years sailing'],['3','Continents'],['1k+','Happy guests']] as $s)
          <div class="text-center">
            <p class="font-display text-4xl font-bold text-navy-900">{{ $s[0] }}</p>
            <p class="text-xs uppercase tracking-wider text-slate-500 mt-2">{{ $s[1] }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

{{-- ============ DESTINATIONS ============ --}}
<section id="destinations" class="py-24 px-6 lg:px-12 bg-white">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Where we sail</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Choose your horizon</h2>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      @php
        $dests = [
          ['name'=>'Egypt','sub'=>'Red Sea · Catamarans & Sailboats','img'=>'8L4A8413.jpg','route'=>'egypt'],
          ['name'=>'Greece','sub'=>'Cyclades · Ionian Islands','img'=>'greece/Greece_3.jpg','route'=>'greece','base'=>true],
          ['name'=>'Maldives','sub'=>'Atolls · Reef sailing','img'=>'IMG_4108.jpg','route'=>'home'],
        ];
      @endphp
      @foreach($dests as $i => $d)
        <a href="{{ route($d['route']) }}" class="group card-hover relative block h-[520px] rounded-3xl overflow-hidden shadow-soft" data-aos="fade-up" data-aos-delay="{{ $i*120 }}">
          <img src="/images/{{ isset($d['base'])?$d['img']:'general/'.$d['img'] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]" alt="{{ $d['name'] }}">
          <div class="absolute inset-0 bg-gradient-to-t from-navy-900/95 via-navy-900/30 to-transparent"></div>
          <div class="absolute inset-x-0 bottom-0 p-8 text-white">
            <h3 class="font-display text-4xl font-semibold mb-1">{{ $d['name'] }}</h3>
            <p class="text-sm text-white/80 mb-4">{{ $d['sub'] }}</p>
            <span class="inline-flex items-center gap-2 text-sea-300 text-sm font-medium border-b border-sea-300/60 pb-1 group-hover:gap-4 transition-all">
              Discover →
            </span>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ EXPERIENCE STRIP ============ --}}
<section class="py-24 px-6 lg:px-12 relative bg-navy-900 text-white overflow-hidden">
  <div class="absolute inset-0 opacity-20" style="background-image:url('/images/general/22.11.25_Reef__Wreck_DSLR_15_edited.jpg'); background-size:cover; background-position:center;"></div>
  <div class="absolute inset-0 bg-navy-900/70"></div>
  <div class="relative max-w-6xl mx-auto text-center">
    <h2 class="font-display text-4xl md:text-6xl font-semibold mb-6" data-aos="fade-up">More than a charter.<br><span class="text-sea-300">A way of travelling.</span></h2>
    <p class="text-lg md:text-xl text-white/80 max-w-3xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="150">
      Snorkel pristine reefs at sunrise, dine under the stars, anchor in coves only a sailboat can reach. Our skippers are storytellers; our crew, your hosts.
    </p>
    <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6">
      @php
        $features = [
          ['Reef & wreck dives', '<path d="M3 12c2-3 4-3 6 0s4 3 6 0 4-3 6 0" stroke-linecap="round" stroke-width="2"/><path d="M3 17c2-3 4-3 6 0s4 3 6 0 4-3 6 0" stroke-linecap="round" stroke-width="2"/>'],
          ['Chef on board',      '<path d="M7 8a5 5 0 1110 0v9H7V8zM5 21h14" stroke-width="2" stroke-linecap="round"/>'],
          ['Secluded coves',     '<path d="M3 20h18M6 20c0-4 3-7 6-7s6 3 6 7M12 13V4M9 7l3-3 3 3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>'],
          ['Yoga at anchor',     '<circle cx="12" cy="5" r="2" stroke-width="2"/><path d="M12 7v6m-5 8l5-8 5 8M7 11h10" stroke-width="2" stroke-linecap="round"/>'],
        ];
      @endphp
      @foreach($features as $i => $f)
        <div class="glass rounded-2xl p-6" data-aos="zoom-in" data-aos-delay="{{ $i*100 }}">
          <svg class="w-10 h-10 mb-4 text-sea-300" viewBox="0 0 24 24" fill="none" stroke="currentColor">{!! $f[1] !!}</svg>
          <p class="font-medium">{{ $f[0] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ TESTIMONIALS ============ --}}
<section class="py-24 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Guest stories</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Voices from the deck</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      @foreach([
        ['name'=>'Lina · Berlin','quote'=>'The most peaceful week of my year. We sailed to islands without a single other boat in sight.','trip'=>'Cyclades, 7 nights'],
        ['name'=>'Marco · Milan','quote'=>'Aziab feels like sailing with old friends. The crew, the food, the music — every detail thought through.','trip'=>'Red Sea, 5 nights'],
        ['name'=>'Yara · Cairo','quote'=>'I came alone, left with a whole new circle. The vibe on board is something special.','trip'=>'Hurghada to Sataya'],
      ] as $i => $t)
        <div class="bg-white rounded-3xl p-8 shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ $i*120 }}">
          <svg class="w-10 h-10 text-sea-400 mb-4" fill="currentColor" viewBox="0 0 24 24"><path d="M7.17 6C4.32 6 2 8.32 2 11.17V18h6.83v-6.83H5.5c0-1.84 1.5-3.34 3.34-3.34V6H7.17zM18.17 6c-2.85 0-5.17 2.32-5.17 5.17V18h6.83v-6.83H16.5c0-1.84 1.5-3.34 3.34-3.34V6h-1.67z"/></svg>
          <p class="text-slate-700 leading-relaxed italic mb-6">"{{ $t['quote'] }}"</p>
          <div class="border-t border-slate-100 pt-4">
            <p class="font-semibold text-navy-900">{{ $t['name'] }}</p>
            <p class="text-xs text-slate-500 mt-1">{{ $t['trip'] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ GALLERY MARQUEE ============ --}}
<section class="py-16 bg-white overflow-hidden">
  <div class="text-center mb-10" data-aos="fade-up">
    <h2 class="font-display text-3xl md:text-4xl font-semibold text-navy-900">Postcards from the sea</h2>
  </div>
  <div class="relative">
    <div class="marquee">
      @php
        $gallery = ['DSCF9790.jpg','DSCF9798.jpg','DSCF9867.jpg','DSCF9972.jpg','IMG_4219.jpg','IMG_4342.jpg','IMG_4363.jpg','IMG_4409.jpg'];
        $loop = array_merge($gallery,$gallery);
      @endphp
      @foreach($loop as $g)
        <div class="shrink-0 w-72 h-48 rounded-2xl overflow-hidden">
          <img src="/images/general/{{ $g }}" class="w-full h-full object-cover" alt="">
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ============ CTA ============ --}}
<section class="py-24 px-6 lg:px-12">
  <div class="max-w-6xl mx-auto bg-gradient-to-br from-navy-800 to-sea-600 rounded-3xl p-12 md:p-20 text-center text-white shadow-soft relative overflow-hidden" data-aos="zoom-in">
    <div class="absolute inset-0 opacity-20" style="background-image:url('/images/general/_MG_9640.jpg'); background-size:cover; background-position:center;"></div>
    <div class="relative">
      <h2 class="font-display text-4xl md:text-6xl font-semibold mb-6">Ready to set sail?</h2>
      <p class="text-lg md:text-xl text-white/85 max-w-2xl mx-auto mb-10">Book a single cabin or charter the whole yacht. We'll handle the rest.</p>
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="{{ route('booking') }}" class="bg-white text-navy-900 hover:bg-sand-100 px-8 py-4 rounded-full font-semibold transition">Book a spot</a>
        <a href="{{ route('contact') }}" class="border border-white/40 hover:bg-white/10 px-8 py-4 rounded-full font-semibold transition">Private charter</a>
      </div>
    </div>
  </div>
</section>

@push('scripts')
<script>
  // ===== Hero slider =====
  const slides = document.querySelectorAll('.hero-slide');
  const texts  = document.querySelectorAll('.hero-text');
  const dots   = document.querySelectorAll('.hero-dot');
  let idx = 0;
  const show = (n) => {
    slides.forEach((s,i)=> s.style.opacity = i===n ? '1' : '0');
    texts.forEach((t,i)=>  t.style.opacity = i===n ? '1' : '0');
    dots.forEach((d,i)=> d.classList.toggle('bg-white', i===n));
    idx = n;
  };
  dots.forEach((d,i)=> d.addEventListener('click', ()=> show(i)));
  setInterval(()=> show((idx+1)%slides.length), 6000);

  // ===== Scroll-driven hero parallax =====
  const heroWrap   = document.getElementById('heroWrap');
  const heroBgs    = document.querySelectorAll('.hero-bg');
  const heroContent= document.getElementById('heroContent');
  const heroDim    = document.getElementById('heroDim');
  const scrollCue  = document.getElementById('scrollCue');
  const heroDots   = document.getElementById('heroDots');

  let ticking = false;
  const onScroll = () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(() => {
      const y = window.scrollY;
      const vh = window.innerHeight;
      const p = Math.min(1, Math.max(0, y / vh));   // 0 → 1 across first viewport

      // Background drifts down (parallax) + subtle zoom
      heroBgs.forEach(bg => {
        bg.style.transform = `translate3d(0, ${y * 0.4}px, 0) scale(${1.05 + p * 0.1})`;
      });

      // Content lifts and fades
      heroContent.style.transform = `translate3d(0, ${y * -0.25}px, 0)`;
      heroContent.style.opacity   = String(Math.max(0, 1 - p * 1.3));

      // Dim layer deepens
      heroDim.style.opacity = String(p * 0.5);

      // UI chrome fades out quickly
      const chromeOpacity = String(Math.max(0, 1 - p * 2.5));
      scrollCue.style.opacity = chromeOpacity;
      heroDots.style.opacity  = chromeOpacity;

      ticking = false;
    });
  };
  document.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
</script>
@endpush
@endsection
