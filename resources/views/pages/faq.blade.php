@extends('layouts.app')
@section('title','FAQ')
@section('content')

@php
  $faqs = [
    ['cat'=>'planning',  'q'=>'Do I need sailing experience?',
      'a'=>"Not at all. Every Aziab trip is led by a licensed skipper and crew. You can help hoist the sails, take the wheel for a tack, or simply lie back with a book and a cold drink. Whatever pace suits you."],
    ['cat'=>'money',     'q'=>"What's included in the price?",
      'a'=>"The yacht, skipper and crew, fuel for normal sailing, marina &amp; marine-park fees, breakfast and most lunches on board, linen, towels and snorkeling gear on request. Not included: flights, transfers, dinners ashore, alcohol, and optional add-ons like diving or kite."],
    ['cat'=>'onboard',   'q'=>'Can I book just one cabin?',
      'a'=>"Yes. Many of our expeditions are sold cabin-by-cabin. You'll join a small group of like-minded travellers and the crew will make sure the chemistry works. Solo travellers can also book a shared cabin at a reduced rate."],
    ['cat'=>'onboard',   'q'=>'Is it family-friendly?',
      'a'=>"Absolutely. Our catamarans are wide, stable and ideal for kids. We can arrange family-only sailings, kid-friendly snorkeling routes, and on-board games. Tell us their ages and we'll plan around them."],
    ['cat'=>'wellbeing', 'q'=>'What about food allergies and dietary needs?',
      'a'=>"Tell us in advance and our cook will tailor the menu — vegan, gluten-free, halal, kosher, low-FODMAP, no problem. We provision locally and adapt the menu day-by-day."],
    ['cat'=>'planning',  'q'=>'What happens if the weather turns?',
      'a'=>"Safety first, always. Our skippers may adjust the route to find calmer anchorages or stay in port for the day. We never sail through unsafe conditions — and the boat is just as much fun moored in a quiet bay."],
    ['cat'=>'wellbeing', 'q'=>'How fit do I need to be?',
      'a'=>"Reasonably mobile is enough. You'll need to climb a small boarding ladder, walk on a moving deck, and get in and out of the water. Nothing more demanding than that."],
    ['cat'=>'money',     'q'=>'Cancellation policy?',
      'a'=>"Free cancellation up to 60 days before departure. 50% refund up to 30 days. After that, non-refundable but transferable to another date or guest."],
  ];

  $cats = [
    'all'      => ['All',         '#0f2138'],
    'planning' => ['Planning',    '#0ea5e9'],
    'money'    => ['Money',       '#f59e0b'],
    'onboard'  => ['On board',    '#f43f5e'],
    'wellbeing'=> ['Wellbeing',   '#10b981'],
  ];

  $catLabels = [
    'planning'=>'Planning', 'money'=>'Money matters', 'onboard'=>'On board', 'wellbeing'=>'Wellbeing'
  ];
@endphp

{{-- HERO --}}
<section class="relative pt-40 pb-20 px-6 lg:px-12 bg-navy-900 text-white overflow-hidden">
  <div class="absolute inset-0 opacity-25 ken-burns bg-cover bg-center" style="background-image:url('/images/general/DSCF9867.jpg')"></div>
  <div class="absolute inset-0 bg-gradient-to-b from-navy-900/40 to-navy-900"></div>
  <div class="relative max-w-5xl mx-auto text-center">
    <p class="text-sea-300 tracking-[0.5em] text-xs mb-6" data-aos="fade-down">FREQUENTLY ASKED QUESTIONS</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-tight" data-aos="fade-up">Everything you wanted to ask.</h1>
    <p class="mt-6 text-lg text-white/80 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="150">
      Pick a question from the list — the answer appears in the captain's log.
    </p>
  </div>
  <svg class="absolute -bottom-px left-0 right-0 w-full text-sand-50" viewBox="0 0 1440 80" preserveAspectRatio="none" aria-hidden="true">
    <path fill="currentColor" d="M0,40 C240,80 480,0 720,40 C960,80 1200,0 1440,40 L1440,80 L0,80 Z"/>
  </svg>
</section>

{{-- MAIN --}}
<section class="bg-sand-50 py-16 px-6 lg:px-12">
  <div class="max-w-4xl mx-auto">

    {{-- Category filter chips --}}
    <div class="flex flex-wrap justify-center gap-2 mb-10" data-aos="fade-up">
      @foreach($cats as $key => $c)
        <button data-cat="{{ $key }}" class="cat-chip text-sm font-semibold px-4 py-2 rounded-full border border-slate-200 bg-white hover:border-sea-400 transition flex items-center gap-2 {{ $key==='all'?'is-active':'' }}">
          <span class="w-2 h-2 rounded-full" style="background:{{ $c[1] }}"></span>{{ $c[0] }}
        </button>
      @endforeach
    </div>

    {{-- Captain's Log Q&A card --}}
    <div class="relative" data-aos="fade-up">
      <div id="logCard" class="relative bg-[#fdfaf1] border border-amber-900/10 rounded-2xl shadow-soft p-8 md:p-12 transition-all duration-500"
           style="background-image: repeating-linear-gradient(0deg, transparent 0 30px, rgba(15,33,56,0.06) 30px 31px);">
        <div class="absolute -top-4 -right-4 md:-right-6 rotate-6 bg-rose-500 text-white text-xs uppercase tracking-widest font-bold px-3 py-1 rounded shadow-soft">Captain's Log</div>
        <div class="absolute -top-3 left-1/2 -translate-x-1/2 w-20 h-5 bg-sea-300/70 rotate-[-2deg] rounded-sm"></div>

        <div class="flex items-center gap-3 text-xs uppercase tracking-[0.25em] text-navy-800/60 mb-6">
          <span id="logCat" class="px-2 py-1 rounded bg-sea-500/10 text-sea-600 font-semibold">All</span>
          <span class="opacity-60">Question <span id="logNum">01</span> / {{ count($faqs) }}</span>
        </div>

        <div class="flex gap-4 mb-6">
          <span class="font-display text-3xl md:text-4xl text-sea-500 font-bold leading-none">Q.</span>
          <h3 id="logQ" class="font-display text-2xl md:text-3xl font-semibold text-navy-900 leading-snug pt-1">
            {!! $faqs[0]['q'] !!}
          </h3>
        </div>
        <div class="flex gap-4">
          <span class="font-display text-3xl md:text-4xl text-amber-600 font-bold leading-none">A.</span>
          <p id="logA" class="text-slate-700 leading-relaxed text-lg pt-1">
            {!! $faqs[0]['a'] !!}
          </p>
        </div>

        <div class="flex items-center justify-between mt-8 pt-6 border-t border-navy-900/10">
          <button id="prevBtn" class="group flex items-center gap-2 text-navy-800 font-semibold hover:text-sea-500 transition">
            <span class="inline-flex w-9 h-9 rounded-full border border-navy-900/15 items-center justify-center group-hover:border-sea-500 group-hover:bg-sea-500 group-hover:text-white transition">←</span>
            Previous
          </button>
          <div class="font-display italic text-navy-800/70 hidden sm:block">— Captain Aziab</div>
          <button id="nextBtn" class="group flex items-center gap-2 text-navy-800 font-semibold hover:text-sea-500 transition">
            Next
            <span class="inline-flex w-9 h-9 rounded-full border border-navy-900/15 items-center justify-center group-hover:border-sea-500 group-hover:bg-sea-500 group-hover:text-white transition">→</span>
          </button>
        </div>
      </div>
    </div>

    {{-- All questions list (pills) --}}
    <div class="mt-12" data-aos="fade-up">
      <p class="text-center text-xs uppercase tracking-[0.3em] text-slate-500 mb-4">All questions — tap to read</p>
      <div class="flex flex-wrap justify-center gap-2" id="jumpList">
        @foreach($faqs as $i => $f)
          <button data-jump="{{ $i }}" data-cat="{{ $f['cat'] }}" class="jump-pill text-sm bg-white border border-slate-200 rounded-full pl-2 pr-4 py-2 hover:border-sea-400 hover:shadow-soft transition text-navy-800 flex items-center gap-2 {{ $i===0?'is-active':'' }}">
            <span class="inline-flex w-6 h-6 rounded-full bg-navy-900 text-white text-[10px] font-bold items-center justify-center">{{ str_pad($i+1,2,'0',STR_PAD_LEFT) }}</span>
            {{ Str::limit(strip_tags($f['q']), 38) }}
          </button>
        @endforeach
      </div>
      <div id="emptyState" class="hidden text-center mt-8 text-slate-500">No questions in this category.</div>
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="py-16 px-6 lg:px-12 text-center bg-white" data-aos="fade-up">
  <p class="text-slate-600 mb-4">Still wondering about something?</p>
  <a href="{{ route('contact') }}" class="bg-sea-500 hover:bg-sea-600 text-white px-7 py-3.5 rounded-full font-semibold inline-block transition">Hail the captain →</a>
</section>

@push('scripts')
<style>
  .cat-chip.is-active { background:#0f2138; color:#fff; border-color:#0f2138; }
  .jump-pill.is-active { background:#0f2138; color:#fff; border-color:#0f2138; }
  #logCard.swapping { opacity: 0; transform: translateY(10px); }
</style>
<script>
(() => {
  const faqs = @json($faqs);
  const catLabels = @json($catLabels);
  const catColor = { planning:'#0ea5e9', money:'#f59e0b', onboard:'#f43f5e', wellbeing:'#10b981' };

  const logCard = document.getElementById('logCard');
  const logQ    = document.getElementById('logQ');
  const logA    = document.getElementById('logA');
  const logNum  = document.getElementById('logNum');
  const logCat  = document.getElementById('logCat');
  const pills   = [...document.querySelectorAll('.jump-pill')];
  let active = 0;

  const goto = (i, items) => {
    items = items || pills.filter(p => p.style.display !== 'none');
    if (!items.length) return;
    if (i < 0) i = items.length - 1;
    if (i >= items.length) i = 0;
    const target = +items[i].dataset.jump;
    active = target;

    pills.forEach(p => p.classList.remove('is-active'));
    items[i].classList.add('is-active');

    logCard.classList.add('swapping');
    setTimeout(() => {
      const f = faqs[target];
      logQ.innerHTML = f.q;
      logA.innerHTML = f.a;
      logNum.textContent = String(target+1).padStart(2,'0');
      logCat.textContent = catLabels[f.cat] || 'All';
      const col = catColor[f.cat] || '#0ea5e9';
      logCat.style.backgroundColor = col + '1A';
      logCat.style.color = col;
      logCard.classList.remove('swapping');
    }, 220);
  };

  const visiblePills = () => pills.filter(p => p.style.display !== 'none');

  pills.forEach((p) => p.addEventListener('click', () => {
    const list = visiblePills();
    goto(list.indexOf(p), list);
  }));
  document.getElementById('prevBtn').addEventListener('click', () => {
    const list = visiblePills();
    const idx = list.findIndex(p => +p.dataset.jump === active);
    goto(idx - 1, list);
  });
  document.getElementById('nextBtn').addEventListener('click', () => {
    const list = visiblePills();
    const idx = list.findIndex(p => +p.dataset.jump === active);
    goto(idx + 1, list);
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') document.getElementById('nextBtn').click();
    if (e.key === 'ArrowLeft')  document.getElementById('prevBtn').click();
  });

  // Category filter
  document.querySelectorAll('.cat-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      document.querySelectorAll('.cat-chip').forEach(c => c.classList.remove('is-active'));
      chip.classList.add('is-active');
      const want = chip.dataset.cat;
      pills.forEach(p => {
        p.style.display = (want === 'all' || p.dataset.cat === want) ? '' : 'none';
      });
      const list = visiblePills();
      document.getElementById('emptyState').classList.toggle('hidden', list.length > 0);
      if (list.length) goto(0, list);
    });
  });

  goto(0);
})();
</script>
@endpush
@endsection
