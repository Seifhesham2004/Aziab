@extends('layouts.app')
@section('title','Extras & Excursions')
@section('content')

{{-- HERO --}}
<section class="relative h-[60vh] min-h-[440px] overflow-hidden text-white flex items-end">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/excursions/e726061b008e66f92d5373d687a20443.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-7xl mx-auto w-full px-6 pb-16">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">BEYOND THE BOAT</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-[1.05] max-w-4xl" data-aos="fade-up">Extras &amp; Excursions.</h1>
    <p class="mt-6 text-lg md:text-xl text-white/85 max-w-2xl" data-aos="fade-up" data-aos-delay="200">
      Transportation, gear, and land-side adventures to round out your time in Egypt.
    </p>
  </div>
</section>

{{-- TABS NAV --}}
<section class="bg-white border-b border-slate-100 sticky top-0 z-30">
  <div class="max-w-6xl mx-auto px-6 lg:px-12 flex flex-wrap gap-8 text-sm font-semibold py-4 justify-center">
    <a href="#transportation" class="text-slate-600 hover:text-sea-500 transition">Transportation</a>
    <a href="#gear" class="text-slate-600 hover:text-sea-500 transition">Gear Rental</a>
    <a href="#excursions" class="text-slate-600 hover:text-sea-500 transition">Excursions</a>
  </div>
</section>

{{-- TRANSPORTATION --}}
<section id="transportation" class="py-24 px-6 lg:px-12 scroll-mt-24">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-12" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">01 · Egypt</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Transportation</h2>
      <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Private A/C transfers between the airport, your hotel, and the marina — arranged to fit your itinerary.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-6">
      @foreach([
        ['Hurghada Airport ↔ Hurghada Marina','~20 min','Closest transfer for north-base trips.'],
        ['Hurghada Airport ↔ Soma Bay','~1 hour (60 km)','Direct A/C transfer to the Soma Bay itinerary.'],
        ['Marsa Alam Airport ↔ Hamata Port','~2 hours (174 km)','Closest airport to the Hamata / Fury Shoals itinerary.'],
        ['Hurghada Airport ↔ Hamata Port','~5 hours (392 km)','Long-distance transfer for southern itineraries.'],
      ] as $i => $t)
        <div class="bg-sand-50 rounded-3xl p-6 shadow-soft card-hover flex gap-5" data-aos="fade-up" data-aos-delay="{{ $i*100 }}">
          <div class="w-12 h-12 rounded-full bg-sea-500 text-white flex items-center justify-center shrink-0">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
          </div>
          <div>
            <h3 class="font-display text-lg font-semibold text-navy-900 mb-1">{{ $t[0] }}</h3>
            <p class="text-xs uppercase tracking-wider text-sea-500 mb-2">{{ $t[1] }}</p>
            <p class="text-slate-600 text-sm leading-relaxed">{{ $t[2] }}</p>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-10 bg-white border border-slate-100 rounded-2xl p-6 text-center">
      <p class="text-slate-600 text-sm">All transfers are arranged on a private A/C vehicle basis. <a href="{{ route('contact') }}" class="text-sea-500 font-semibold hover:underline">Request a transfer quote →</a></p>
    </div>
  </div>
</section>

{{-- GEAR RENTAL --}}
<section id="gear" class="py-24 px-6 lg:px-12 bg-navy-900 text-white relative overflow-hidden scroll-mt-24">
  <div class="absolute inset-0 opacity-15 bg-cover bg-center" style="background-image:url('/images/general/DSCF9867.jpg')"></div>
  <div class="relative max-w-6xl mx-auto">
    <div class="text-center mb-12" data-aos="fade-up">
      <p class="text-sea-300 uppercase tracking-[0.3em] text-sm mb-3">02 · Egypt</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold">Gear Rental</h2>
      <p class="text-white/70 mt-4 max-w-2xl mx-auto">Per person, per trip. Available onboard — just request when booking.</p>
    </div>

    <div class="bg-white/5 backdrop-blur rounded-3xl overflow-hidden border border-white/10">
      <div class="grid grid-cols-[1fr,auto,auto] gap-4 px-6 md:px-8 py-4 text-xs uppercase tracking-[0.25em] text-sea-300 font-semibold border-b border-white/10">
        <div>Item</div>
        <div class="text-right">4-day trip</div>
        <div class="text-right">6-day trip</div>
      </div>
      @foreach([
        ['Snorkeling fins','€20','€30'],
        ['Freediving fins','€50','€70'],
        ['Mask &amp; snorkel','€10','€15'],
        ['Wetsuit (scuba only)','€50','€70'],
        ['Weights &amp; belts','Free','Free'],
      ] as $i => $g)
        <div class="grid grid-cols-[1fr,auto,auto] gap-4 px-6 md:px-8 py-4 items-center border-b border-white/5 last:border-0 text-white/90" data-aos="fade-up" data-aos-delay="{{ $i*60 }}">
          <div class="font-medium">{!! $g[0] !!}</div>
          <div class="text-right font-display text-lg {{ $g[1]==='Free' ? 'text-emerald-300' : '' }}">{{ $g[1] }}</div>
          <div class="text-right font-display text-lg {{ $g[2]==='Free' ? 'text-emerald-300' : '' }}">{{ $g[2] }}</div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- EXCURSIONS --}}
<section id="excursions" class="py-24 px-6 lg:px-12 scroll-mt-24">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">03 · Marsa Alam</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Excursions — before or after the boat.</h2>
      <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Land-side experiences we organise around your sailing trip. All prices per person.</p>
    </div>

    @php
      $excursions = [
        [
          'title'   => 'Luxor Day Trip',
          'img'     => '090c25eda527cf7e138ea225b63f47a4.jpg',
          'lede'    => "Visit the world's largest open-air museum of Egyptian antiquities. A day tour of Luxor's icons — Karnak Temple, the Valley of the Kings, and the Temple of Hatshepsut — with a knowledgeable English-speaking Egyptologist.",
          'pricing' => [
            ['Group of 2','€260 / person'],
            ['Group of 3','€230 / person'],
            ['Group of 4','€200 / person'],
            ['Group of 4+','€190 / person'],
          ],
          'includes' => [
            'Private A/C vehicle (water, juices, snacks included)',
            'All entrance fees and tickets to the sites',
            'Tasty lunch at a local Luxor restaurant',
            'English-speaking Egyptologist guide',
            'Water bottles throughout the day',
            'All taxes and service charges',
            'Light snack on the way back if dinner is missed at the hotel',
          ],
          'notes'    => "Stops at souvenir shops may be offered (personal shopping not included). Departure from Luxor by 4:00 PM is a must due to road closures.",
        ],
        [
          'title'   => 'Astro Tour',
          'img'     => '1f78f1c65cab906606da9667dd2c01e9.jpg',
          'lede'    => "Stargazing in the Eastern Desert — undisturbed by noise or light. Under the crystal-clear night sky, we'll guide you through the constellations with a special Astro laser, telescope, and binoculars.",
          'pricing' => [
            ['Group of 4','€65 / person'],
            ['Group of 4+','€60 / person'],
          ],
          'includes' => [
            'Transfer from / to the hotel by 4x4',
            'Astro tour with laser &amp; professional telescope',
            'Tea &amp; water',
          ],
          'notes'    => "Pick-up around 9:00 PM (after dinner at the hotel). Tour duration: 2.5–3 hours.",
        ],
        [
          'title'   => 'Turtles &amp; Dugongs Excursion',
          'img'     => '227a07ab0541090bfbeac2bf3fd1a08d.jpg',
          'lede'    => "A speedboat day from Marsa Alam to the Abu Dabab area — with a 95% chance of encountering huge sea turtles and 80% chance of meeting the dugong, alongside a professional guide.",
          'pricing' => [
            ['Group of 4','€65 / person'],
            ['Group of 4+','€60 / person'],
          ],
          'includes' => [
            'Pick-up at 9:00 AM from your hotel to the marina',
            'Speedboat with professional guide (departs 9:30 AM)',
            'Water &amp; snacks onboard',
            'Return to marina by 1:00 PM, then transfer back to the hotel',
          ],
          'notes'    => "Times mentioned are tentative — based on weather conditions.",
        ],
        [
          'title'   => 'Beach Hopping — Sharm El Luli &amp; Qulaan',
          'img'     => '3b9ea7564bf56552bcbe01df7701fd42.jpg',
          'lede'    => "Two of Marsa Alam's most stunning beaches in one day. Sharm El Luli — ranked the 3rd most beautiful beach in the world — followed by Qulaan, where Al Ababda tribal women welcome you with handmade crafts, tea and coffee boiled on coal in a tent on the beach.",
          'pricing' => [
            ['Group of 3','€70 / person'],
            ['Group of 4','€65 / person'],
            ['Group of 4+','€55 / person'],
          ],
          'includes' => [
            'A/C vehicle transfer from / to the hotel',
            'Tea &amp; Bedouin coffee',
            'Marine park tickets and environmental fees',
            'Lunch at Qulaan',
            'Professional guide',
          ],
          'notes'    => "At Qulaan, walk in shallow water to the mangrove tree leading to the open sea, then enjoy lunch in a Bedouin tent — immersed in Ababda culture and traditions.",
        ],
      ];
    @endphp

    <div class="space-y-12">
      @foreach($excursions as $idx => $e)
        <div class="bg-white rounded-3xl overflow-hidden shadow-soft card-hover grid lg:grid-cols-[1.1fr,1fr]" data-aos="fade-up">
          <div class="img-zoom aspect-[4/3] lg:aspect-auto overflow-hidden {{ $idx%2 ? 'lg:order-2' : '' }}">
            <img src="/images/excursions/{{ $e['img'] }}" loading="lazy" class="w-full h-full object-cover" alt="{{ strip_tags($e['title']) }}">
          </div>
          <div class="p-8 lg:p-10">
            <p class="text-xs uppercase tracking-[0.25em] text-sea-500 font-semibold mb-3">Excursion {{ $idx+1 }}</p>
            <h3 class="font-display text-3xl font-semibold text-navy-900 mb-4">{!! $e['title'] !!}</h3>
            <p class="text-slate-600 leading-relaxed mb-6">{{ $e['lede'] }}</p>

            <div class="bg-sand-50 rounded-2xl p-5 mb-6">
              <p class="text-xs uppercase tracking-[0.25em] text-slate-500 mb-3 font-semibold">Pricing · per person</p>
              <div class="space-y-2">
                @foreach($e['pricing'] as $p)
                  <div class="flex justify-between items-baseline border-b border-slate-200 pb-1.5 last:border-0">
                    <span class="text-slate-700 text-sm">{{ $p[0] }}</span>
                    <span class="font-display text-base font-semibold text-navy-900">{{ $p[1] }}</span>
                  </div>
                @endforeach
              </div>
            </div>

            <p class="text-xs uppercase tracking-[0.25em] text-slate-500 mb-2 font-semibold">Inclusions</p>
            <ul class="space-y-1.5 text-slate-700 text-sm mb-6">
              @foreach($e['includes'] as $li)
                <li class="flex gap-2"><span class="text-sea-500 mt-0.5">✓</span><span>{!! $li !!}</span></li>
              @endforeach
            </ul>

            @if(!empty($e['notes']))
              <p class="text-xs text-slate-500 italic border-l-2 border-sea-400 pl-3">{{ $e['notes'] }}</p>
            @endif
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- CTA --}}
<section class="py-20 px-6 lg:px-12">
  <div class="max-w-5xl mx-auto bg-gradient-to-br from-navy-800 to-sea-600 rounded-3xl p-12 md:p-16 text-center text-white shadow-soft" data-aos="zoom-in">
    <h2 class="font-display text-4xl md:text-5xl font-semibold mb-4">Want to add an excursion?</h2>
    <p class="text-lg text-white/85 mb-8">Tell us your trip dates and group size — we'll arrange transfers, gear, and excursions to fit.</p>
    <a href="{{ route('contact') }}" class="inline-block bg-white text-navy-900 hover:bg-sand-100 px-8 py-4 rounded-full font-semibold transition">Get in touch</a>
  </div>
</section>

@endsection
