@extends('layouts.app')
@section('title','About Us')
@section('content')

{{-- HERO --}}
<section class="relative h-[70vh] min-h-[480px] overflow-hidden text-white flex items-center">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/general/22.11.26_Aziab_day_one_DSLR_38_edited_phshop.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-5xl mx-auto px-6 text-center">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">ABOUT AZIAB</p>
    <h1 class="font-display text-4xl md:text-6xl font-semibold leading-tight" data-aos="fade-up">Creating experiences that feel real, personal, and unforgettable.</h1>
    <p class="mt-6 text-lg md:text-xl text-white/80 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">Built by passion, for passionate people.</p>
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
      <img src="/images/general/8L4A8021.jpg" class="w-full h-[560px] object-cover" alt="">
    </div>
    <div class="lg:col-span-3" data-aos="fade-left">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Who we are</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900 mb-6 leading-tight">Built by passion for passionate people.</h2>
      <p class="text-slate-600 text-lg leading-relaxed">
        We believe the sea offers a kind of freedom unlike anywhere else. Through intimate sailing experiences across the sea, we give our guests the opportunity to slow down, reconnect, and create memories that stay long after the journey ends.
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
        ['Slow travel','Each journey is built around a carefully curated itinerary, with personalized touches that reflect your interests and the day\'s conditions.'],
        ['Extraordinary locations','Where you can encounter 100+ dolphins, and visit some of the most vibrant reefs around the world.'],
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
          'role' => 'Founder',
          'img'  => 'Omar_Sherif.jpg',
          'bio'  => 'Omar is a professional sailor and certified Dive Master who transformed a lifelong passion for the ocean into a distinctive sailing experience brand. After years of sailing on large liveaboards with more than 25 guests, he envisioned a different kind of experience in Egypt — one designed for smaller groups, where guests can disconnect from the distractions of everyday life and reconnect with themselves, nature, and one another. On every trip operated by Aziab Seafaris, he ensures that guests don\'t just see the beauty of the Red Sea — they actually feel it, live it, and become part of it.',
        ],
        [
          'name' => 'Yousra Gamea',
          'role' => 'Operations Manager',
          'img'  => 'Yousra_Gamea.jpg',
          'bio'  => 'Yousra is the powerhouse behind the day-to-day operations of Aziab Seafaris — managing bookings, guest relations, trip coordination, finances, and making sure every experience runs smoothly from the first inquiry to the final sunset onboard.',
        ],
        [
          'name' => 'Hesham Saqr',
          'role' => 'Logistics Manager',
          'img'  => 'Hesham_Saqr.jpg',
          'pos'  => '85% center',
          'bio'  => 'Hesham is the logistics mastermind behind Aziab Seafaris — the person making sure every trip is fully prepared, fully stocked, and fully ready before setting sail. From trip preparations and provisioning to technical coordination and onboard logistics, Hesham handles the countless behind-the-scenes details that keep every experience running smoothly and stress-free.',
        ],
        [
          'name' => 'Sara Elleithy',
          'role' => 'Technical Manager · Guide · Dive Master',
          'img'  => 'Sara_Ellaithy.jpg',
          'bio'  => 'Sara is the heart, soul, and positive energy behind Aziab Seafaris. As the Technical Manager of the boat, professional guide, certified Dive Master, and AIDA 4 freediver, she brings together technical expertise, ocean knowledge, and an unforgettable spirit that instantly makes people feel at home onboard. And yes — she is also known as Egypt\'s first mermaid.',
        ],
        [
          'name' => 'Mahmoud Hassan',
          'role' => 'Sailor · Dive Master · Freediver',
          'img'  => 'Mahmoud_Hassan.JPG',
          'bio'  => 'Mahmoud is one of the guiding souls behind Aziab Seafaris — a sailor, certified Dive Master, AIDA 4 freediver, and the kind of person whose calm energy instantly makes you feel relaxed onboard. Known for always smiling, staying positive, and bringing a peaceful, genuine vibe to every trip, Mahmoud has a beautiful connection with both people and the sea. Whether he is guiding guests underwater, helping onboard, or simply sharing stories under the stars, his presence adds something special to every experience. For many guests, Mahmoud is not just part of the crew — he becomes one of the highlights of the entire experience.',
        ],
      ];
    @endphp

    <div class="grid sm:grid-cols-2 lg:grid-cols-6 gap-8">
      @foreach($team as $i => $m)
        <div class="bg-white rounded-3xl overflow-hidden shadow-soft card-hover lg:col-span-2 {{ $i===3 ? 'lg:col-start-2' : '' }}" data-aos="fade-up" data-aos-delay="{{ $i*80 }}">
          <div class="img-zoom aspect-[4/5] overflow-hidden">
            <img src="/images/team/{{ $m['img'] }}" class="w-full h-full object-cover" style="object-position: {{ $m['pos'] ?? 'center top' }};" alt="{{ $m['name'] }}">
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
        ['2020','First charter','We started our first charters in the Red Sea under the patronage of the Ministry of Tourism (temporary license).'],
        ['2021','Laws & Regulations','Played a leading role in helping shape Egypt\'s sailing regulations in collaboration with the Ministry of Tourism, supporting the development and growth of this emerging sector.'],
        ['2022','Officially licensed','We become the first officially recognized sailing charter company in Egypt.'],
        ['2024','Introducing Greece','Bringing sailing charters to the Cyclades and Ionian Islands — a fresh experience for modern sailors.'],
        ['2026','Adding a sailing catamaran to our fleet','Introducing the newest member of our fleet: a sailing catamaran designed to bring together comfort, elegance, and unforgettable experiences at sea.'],
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
