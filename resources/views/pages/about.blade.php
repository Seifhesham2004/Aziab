@extends('layouts.app')
@section('title','About Us')
@section('content')

{{-- HERO --}}
<section class="relative h-[70vh] min-h-[480px] overflow-hidden text-white flex items-center">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/general/8L4A8498-Enhanced-NR.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">ABOUT AZIAB</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-tight" data-aos="fade-up">A south wind, in a sea of north winds.</h1>
    <p class="mt-6 text-lg md:text-xl text-white/80 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">A brand built by passion, for passionate people.</p>
  </div>
</section>

{{-- WHAT THE NAME MEANS --}}
<section class="py-24 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-5xl mx-auto text-center" data-aos="fade-up">
    <p class="text-sea-500 uppercase tracking-[0.4em] text-xs font-semibold mb-4">The name</p>
    <h2 class="font-display text-5xl md:text-7xl font-semibold text-navy-900 mb-8 leading-none">Aziab.</h2>
    <p class="text-slate-700 text-xl md:text-2xl leading-relaxed font-light">
      A word in the local fishermen's slang — meaning the winds blowing from the <span class="text-sea-500 font-semibold">south</span>,
      which is not the usual wind direction in the Red Sea.
    </p>
    <p class="text-slate-500 italic mt-4 text-base">A name for going against the grain.</p>
  </div>
</section>

{{-- WHO --}}
<section class="py-24 px-6 lg:px-12">
  <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-12 items-center">
    <div class="lg:col-span-2 img-zoom rounded-3xl overflow-hidden shadow-soft" data-aos="fade-right">
      <img src="/images/general/IMG_3851.jpg" class="w-full h-[560px] object-cover" alt="">
    </div>
    <div class="lg:col-span-3" data-aos="fade-left">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Who we are</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">A brand built by passion, for passionate people.</h2>
      <p class="text-slate-600 text-lg leading-relaxed mb-5">
        We believe the ocean is the optimum joy. By offering our guests the chance to spend a few days sailing the beautiful Red Sea, we give them their best shot at an unmatched holiday — one they'll measure other trips against.
      </p>
      <p class="text-slate-600 text-lg leading-relaxed">
        Years on the water taught us what guests truly want. So we serve small groups, on purpose. On an Aziab trip the guest is the star — not the schedule, not the boat, not the brochure.
      </p>
    </div>
  </div>
</section>

{{-- MILESTONE: First officially recognized --}}
<section class="py-24 px-6 lg:px-12 bg-navy-900 text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-25 ken-burns bg-cover bg-center" style="background-image:url('/images/general/_MG_9640.jpg')"></div>
  <div class="absolute inset-0 bg-gradient-to-r from-navy-900 via-navy-900/80 to-navy-900/40"></div>
  <div class="relative max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
    <div data-aos="fade-right">
      <p class="text-sea-300 uppercase tracking-[0.4em] text-xs font-semibold mb-4">2022 — a turning point</p>
      <h2 class="font-display text-4xl md:text-6xl font-semibold leading-tight mb-6">
        The first <span class="text-sea-300">officially recognized</span> sailing charter company in Egypt.
      </h2>
      <p class="text-white/80 text-lg leading-relaxed">
        After years of hard work and dedication, in 2022 we became the first officially licensed sailing charter operator in Egypt. We are proud to be pioneering this sector in Egypt and the Red Sea — and prouder still of the standard it set for everything we do next.
      </p>
    </div>
    <div class="flex justify-center" data-aos="zoom-in">
      <div class="relative">
        <div class="absolute inset-0 bg-sea-400/30 blur-3xl rounded-full"></div>
        <div class="relative bg-white text-navy-900 rounded-full w-72 h-72 md:w-80 md:h-80 flex flex-col items-center justify-center shadow-2xl border-8 border-sea-400/40">
          <p class="font-display text-7xl md:text-8xl font-bold leading-none">1<span class="text-sea-500">st</span></p>
          <p class="mt-3 text-center text-xs uppercase tracking-[0.3em] font-semibold px-6">Licensed sailing<br>charter in Egypt</p>
          <p class="mt-2 font-display text-lg text-slate-500">2022</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- VALUES --}}
<section class="py-24 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">What we believe</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Three things, always.</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      @foreach([
        ['Small groups','We cap every trip so each guest gets the attention — and the space — they deserve.'],
        ['Slow travel','No checklist. We follow the wind, the weather and the moods of the people on board.'],
        ['Local soul','Our routes are stitched together with the kind of places only locals know.'],
      ] as $i => $v)
        <div class="bg-white rounded-3xl p-8 shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ $i*120 }}">
          <div class="w-12 h-12 rounded-full bg-sea-500 text-white flex items-center justify-center font-display text-xl font-bold mb-5">0{{ $i+1 }}</div>
          <h3 class="font-display text-2xl font-semibold text-navy-900 mb-3">{{ $v[0] }}</h3>
          <p class="text-slate-600 leading-relaxed">{{ $v[1] }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- TEAM --}}
<section class="py-24 px-6 lg:px-12">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">The crew</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Meet the people behind Aziab.</h2>
    </div>
    @php
      $team = [
        [
          'name' => 'Omar Sherif',
          'role' => 'Founder · Skipper · Dive Master',
          'img'  => 'Omar_Sherif.jpg',
          'bio'  => 'Omar, founder of Aziab Seafaris, is a professional sailor and a dive master. Beside the tourism &amp; hospitality industry, Omar has a huge experience in marketing &amp; brand management — for years he worked with well-established corporates as part of their marketing teams.',
        ],
        [
          'name' => 'Yousra Gamea',
          'role' => 'Co-founder · CFO · Advanced Diver',
          'img'  => 'Yousra_Gamea.jpg',
          'bio'  => 'Yousra, the co-founder of Aziab Seafaris, is an advanced diver and a crew member. Besides her experience in the sailing industry, Yousra is also the CFO of the company, running the day-to-day finances. She brings more than 10 years of experience in the financial sector.',
        ],
        [
          'name' => 'Sara Ellaithy',
          'role' => 'Marine Conservationist',
          'img'  => 'Sara_Ellaithy.jpg',
          'bio'  => 'Sara, our mermaid! With a long history in conservational work, it is always great having her on board. She never gets tired of helping people or sharing everything she knows about dolphins and their behaviour.',
        ],
        [
          'name' => 'Hesham Saqr',
          'role' => 'Senior Captain',
          'img'  => 'Hesham_Saqr.jpg',
          'bio'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.',
        ],
        [
          'name' => 'Mahmoud Hassan',
          'role' => 'Guest Experience',
          'img'  => 'Mahmoud_Hassan.JPG',
          'bio'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.',
        ],
      ];
    @endphp

    <div class="grid sm:grid-cols-2 lg:grid-cols-6 gap-8">
      @foreach($team as $i => $m)
        <div class="bg-white rounded-3xl overflow-hidden shadow-soft card-hover lg:col-span-2 {{ $i===3 ? 'lg:col-start-2' : '' }}" data-aos="fade-up" data-aos-delay="{{ $i*80 }}">
          <div class="img-zoom aspect-[4/5] overflow-hidden">
            <img src="/images/team/{{ $m['img'] }}" class="w-full h-full object-cover object-top" alt="{{ $m['name'] }}">
          </div>
          <div class="p-6">
            <h3 class="font-display text-2xl font-semibold text-navy-900">{{ $m['name'] }}</h3>
            <p class="text-xs text-sea-500 tracking-[0.2em] uppercase mt-1 mb-4">{{ $m['role'] }}</p>
            <p class="text-slate-600 text-sm leading-relaxed">{!! $m['bio'] !!}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- TIMELINE --}}
<section class="py-24 px-6 lg:px-12 bg-navy-900 text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-15" style="background-image:url('/images/general/22.11.24_Sataya__Malahi_DSLR_112_edited_1.jpg'); background-size:cover; background-position:center;"></div>
  <div class="relative max-w-5xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="font-display text-4xl md:text-5xl font-semibold">Our journey, so far.</h2>
    </div>
    <div class="space-y-12">
      @foreach([
        ['2015','First charter','A handful of friends, one rented sailboat, a dream that wouldn\'t leave.'],
        ['2018','Red Sea routes','Permanent base in Egypt; our flagship Sataya & Malahi expeditions begin.'],
        ['2022','Officially licensed','We become the first officially recognized sailing charter company in Egypt.'],
        ['2024','Maldives chapter','First atoll seafaris launched — three continents, one philosophy.'],
      ] as $i => $e)
        <div class="grid md:grid-cols-[160px,1fr] gap-8 items-start" data-aos="fade-up">
          <div class="font-display text-5xl text-sea-300 font-semibold">{{ $e[0] }}</div>
          <div class="border-l-2 border-sea-400/40 pl-8">
            <h3 class="font-display text-2xl mb-2">{{ $e[1] }}</h3>
            <p class="text-white/70 leading-relaxed">{{ $e[2] }}</p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

@endsection
