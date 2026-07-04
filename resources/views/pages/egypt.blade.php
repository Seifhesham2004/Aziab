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
<section id="why" class="py-24 px-6 lg:px-12">
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

{{-- THE FLEET — Two yachts with carousels --}}
<section id="fleet" class="py-24 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Our fleet</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Two yachts. Pick yours.</h2>
      <p class="text-slate-600 mt-3 max-w-2xl mx-auto">All skippered — bareboat charters are not permitted in Egypt.</p>
    </div>

    @php
      $fleet = [
        [
          'name'    => 'Sailboat Beneteau Cyclades 50.5',
          'tag'     => 'Sailboat',
          'kicker'  => 'SY Roaga',
          'desc'    => 'A classic monohull built for blue water. Heels gracefully into the wind, sleeps eight in four cabins (a fifth on request), with two ensuite + one shared bathroom.',
          'images'  => [
            'egypt-roga/65aa4168784e9459d407dde6.jpeg',
            'egypt-roga/beneteau-cyclades-50.5-huge-338621a5711958dc.jpg',
            'egypt-roga/BENETEAU-CYCLADES-50.5-ca-salon.jpg',
            'egypt-roga/BENETEAU-CYCLADES-50.5-ca-bow-cabins-d.jpg',
            'egypt-roga/cabin.jpg',
            'egypt-roga/_MG_9640.jpg',
            'egypt-roga/IMG-1038.jpg',
          ],
          'specs'   => [
            ['Cabins','4 (+1)'],
            ['Guests','6–8 (max 10)'],
            ['Power','2 × 120W solar'],
            ['Watermaker','150 L / hr'],
          ],
        ],
        [
          'name'    => 'Sailing Catamaran Bali 40',
          'tag'     => 'Catamaran',
          'kicker'  => 'Newest in the fleet',
          'desc'    => 'A spacious, modern catamaran designed to bring together comfort, elegance, and unforgettable experiences at sea.',
          'images'  => [
            'egypt-bali/bali-40-nea-36.jpg',
            'egypt-bali/bali-40-nea-38.jpg',
            'egypt-bali/bali-40-nea-50.jpg',
            'egypt-bali/images-23.jpeg',
            'egypt-bali/images-27.jpeg',
            'egypt-bali/images-38.jpeg',
            'egypt-bali/images-41.jpeg',
            'egypt-bali/images-48.jpeg',
          ],
          'specs'   => [
            ['Cabins','4 guest + 2 crew'],
            ['Bathrooms','4 + crew'],
            ['Engines','2 × 35 hp Yanmar'],
            ['Fresh water','700 L'],
          ],
        ],
      ];
    @endphp

    <div class="space-y-12">
      @foreach($fleet as $idx => $b)
        <div class="bg-white rounded-3xl overflow-hidden shadow-soft card-hover" data-aos="fade-up">
          {{-- Carousel --}}
          <div class="carousel relative aspect-[16/9] overflow-hidden" data-carousel>
            @foreach($b['images'] as $i => $img)
              <div class="carousel-slide absolute inset-0 transition-opacity duration-700 {{ $i===0?'opacity-100':'opacity-0' }}">
                <img src="/images/{{ $img }}" loading="lazy" class="w-full h-full object-cover" alt="{{ $b['name'] }}">
              </div>
            @endforeach
            <div class="absolute top-4 left-4 bg-white/95 backdrop-blur rounded-full px-4 py-1.5 text-xs font-semibold text-navy-900 z-10">{{ $b['tag'] }}</div>

            <button class="carousel-prev absolute left-4 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white/85 hover:bg-white text-navy-900 flex items-center justify-center shadow-soft transition" aria-label="Previous">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button class="carousel-next absolute right-4 top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full bg-white/85 hover:bg-white text-navy-900 flex items-center justify-center shadow-soft transition" aria-label="Next">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </button>

            <div class="carousel-dots absolute bottom-4 left-1/2 -translate-x-1/2 z-10 flex gap-2">
              @foreach($b['images'] as $i => $_)
                <button data-dot="{{ $i }}" class="carousel-dot w-2.5 h-2.5 rounded-full bg-white/50 hover:bg-white transition {{ $i===0?'bg-white':'' }}" aria-label="Slide {{ $i+1 }}"></button>
              @endforeach
            </div>
          </div>

          <div class="p-8 lg:p-10">
            <p class="text-sm text-sea-500 uppercase tracking-wider mb-2">{{ $b['kicker'] }}</p>
            <h3 class="font-display text-3xl md:text-4xl font-semibold text-navy-900 mb-4">{{ $b['name'] }}</h3>
            <p class="text-slate-600 leading-relaxed mb-6 max-w-3xl">{{ $b['desc'] }}</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6 text-sm">
              @foreach($b['specs'] as $s)
                <div class="border-l-2 border-sea-400 pl-3">
                  <p class="text-xs uppercase tracking-wider text-slate-500">{{ $s[0] }}</p>
                  <p class="font-display text-lg font-semibold text-navy-900">{{ $s[1] }}</p>
                </div>
              @endforeach
            </div>
            <a href="{{ route('booking') }}" class="inline-flex items-center gap-2 text-sea-500 font-semibold hover:gap-3 transition-all">Book this yacht →</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- WHAT'S INCLUDED --}}
<section class="py-20 px-6 lg:px-12">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10">
    <div data-aos="fade-right">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">All-inclusive</p>
      <h2 class="font-display text-3xl md:text-4xl font-semibold text-navy-900 mb-6">Everything that matters, in the price.</h2>
      <ul class="space-y-3 text-slate-700">
        @foreach([
          'Professional crew — captain, chef and snorkel/freediving guide',
          '3 meals + snack daily, soft drinks, tea, coffee, juices',
          'Accommodation on the boat',
          'Emergency medical supplies',
          'Oxygen tanks',
        ] as $li)
          <li class="flex gap-3"><span class="text-sea-500 mt-1">✓</span><span>{!! $li !!}</span></li>
        @endforeach
      </ul>
    </div>
    <div class="bg-sand-50 rounded-3xl p-8 shadow-soft" data-aos="fade-left">
      <p class="text-xs uppercase tracking-[0.25em] text-slate-500 mb-3">Bring with you</p>
      <ul class="space-y-2 text-slate-700 text-sm mb-6">
        <li>• Personal towels &amp; toiletries</li>
        <li>• Sunblock (reef-safe please)</li>
        <li>• Any alcoholic beverages</li>
        <li>• Your camera</li>
      </ul>
      <div class="border-t border-slate-200 pt-4">
        <p class="text-xs uppercase tracking-[0.25em] text-amber-600 mb-2 font-semibold">Heads up</p>
        <p class="text-sm text-slate-600 leading-relaxed">Our boats run on solar — large electronic devices (laptops, drones with bulky chargers) can't always be charged on board. Phones &amp; cameras are fine.</p>
      </div>
    </div>
  </div>
</section>

{{-- ITINERARIES --}}
<section id="route" class="py-24 px-6 lg:px-12 bg-navy-900 text-white relative overflow-hidden">
  <div class="absolute inset-0 opacity-15" style="background-image:url('/images/general/22.11.25_Reef__Wreck_DSLR_1_edited.jpg');background-size:cover;background-position:center;"></div>
  <div class="relative max-w-6xl mx-auto">
    <div class="text-center mb-16" data-aos="fade-up">
      <p class="text-sea-300 uppercase tracking-[0.3em] text-sm mb-3">Itineraries</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold">Two journeys, one Red Sea.</h2>
      <p class="text-white/70 mt-4 max-w-3xl mx-auto italic">This is more than sailing. It is a journey into silence, nature, and connection — where the ocean becomes your world and time no longer feels important.</p>
    </div>

    {{-- Itinerary 1 --}}
    <div class="mb-16" data-aos="fade-up">
      <p class="text-sea-300 uppercase tracking-[0.3em] text-xs font-semibold mb-2">Itinerary 1</p>
      <h3 class="font-display text-3xl md:text-4xl font-semibold mb-8">Sataya Dolphin House &amp; Fury Shoals</h3>
      <div class="space-y-8">
        @foreach([
          ['Sataya Dolphin House','Just around 3 hours of sailing from port, you enter a massive 6km natural lagoon, protected by one of the largest reef systems in the Red Sea. Inside this calm sanctuary lies one of the highest probabilities on Earth to encounter pods of 100+ wild spinner dolphins in their natural habitat. This is where everything slows down — and something deeper begins.'],
          ['Abu Galawa Reef (Wreck Site)','A rich and vibrant reef system known for its incredible marine biodiversity. At its center lies the famous Tian Hsing wreck, resting between 2–20 meters, making it accessible for snorkelers and freedivers alike. Over time, the wreck has become fully alive — covered in coral and surrounded by schools of fish, with constant surprises passing in the blue.'],
          ['Hamata Islands','Surrounded by shallow turquoise waters and untouched reefs, these islands are ideal for exploration, sunset stops, swimming, snorkeling, and pure relaxation. A place where time feels irrelevant.'],
        ] as $stop)
          <div class="border-l-2 border-sea-400/40 pl-8">
            <h4 class="font-display text-2xl mb-2">{{ $stop[0] }}</h4>
            <p class="text-white/70 leading-relaxed">{{ $stop[1] }}</p>
          </div>
        @endforeach
      </div>
      <p class="text-xs text-white/50 italic mt-6">*Itinerary is weather dependent</p>
    </div>

    {{-- Itinerary 2 --}}
    <div data-aos="fade-up">
      <p class="text-sea-300 uppercase tracking-[0.3em] text-xs font-semibold mb-2">Itinerary 2</p>
      <h3 class="font-display text-3xl md:text-4xl font-semibold mb-8">Soma Bay</h3>
      <p class="text-white/80 leading-relaxed mb-8 max-w-3xl">A luxurious sail into the Red Sea's most vibrant reefs and islands, including:</p>
      <div class="space-y-8">
        @foreach([
          ['Panorama Reef','One of the Red Sea\'s most iconic offshore reefs — dramatic, wild, and endlessly blue. Located off Safaga, it\'s known for combining vibrant coral gardens with steep drop-offs that disappear into deep open water.'],
          ['Tobia Reef','One of the Red Sea\'s hidden gems — calm, colorful, and perfect for relaxed exploration. Located near Safaga, it\'s known for its shallow coral gardens, crystal-clear water, and abundant marine life, making it especially loved for snorkeling, beginner diving, and slow days at sea.'],
          ['Abu Monkar Island','One of those places in the Red Sea that feels almost unreal — a quiet sandbank and island escape where shallow turquoise water stretches into every direction. Often considered part of the northern island system near Giftun, it sits just offshore from Hurghada and is known for its untouched, peaceful atmosphere.'],
        ] as $stop)
          <div class="border-l-2 border-sea-400/40 pl-8">
            <h4 class="font-display text-2xl mb-2">{{ $stop[0] }}</h4>
            <p class="text-white/70 leading-relaxed">{{ $stop[1] }}</p>
          </div>
        @endforeach
      </div>
      <p class="text-white/80 leading-relaxed mt-8 max-w-3xl">Whether you are looking for a kitesurfing safari, a freediving retreat, or nautical miles building, this is the perfect week for you.</p>
      <p class="text-xs text-white/50 italic mt-6">*Itinerary is weather dependent</p>
    </div>
  </div>
</section>

{{-- ACTIVITIES --}}
<section id="activities" class="py-24 px-6 lg:px-12">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Activities</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">A journey shaped around you.</h2>
      <p class="text-slate-600 mt-4 max-w-2xl mx-auto">Choose from a range of activities designed around your interests and pace. Join us for:</p>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-5">
      @foreach([
        ['Freediving adventures','<circle cx="12" cy="12" r="3" stroke-width="2"/><path stroke-linecap="round" stroke-width="2" d="M12 2v3M12 19v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M2 12h3M19 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/>'],
        ['Kitesurfing safaris','<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 20l7-16 9 8-16 8zM11 4l3 5"/>'],
        ['Yoga &amp; meditation','<circle cx="12" cy="5" r="2" stroke-width="2"/><path stroke-linecap="round" stroke-width="2" d="M12 7v6m-5 8l5-8 5 8M7 11h10"/>'],
        ['Hands-on sailing &amp; miles','<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 20h16M6 20L12 4l6 16M12 4v16"/>'],
        ['Snorkeling &amp; leisure','<path stroke-linecap="round" stroke-width="2" d="M3 12c2-3 4-3 6 0s4 3 6 0 4-3 6 0M3 17c2-3 4-3 6 0s4 3 6 0 4-3 6 0"/>'],
      ] as $i => $a)
        <div class="bg-sand-50 rounded-2xl p-6 shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ $i*80 }}">
          <svg class="w-9 h-9 mb-4 text-sea-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $a[1] !!}</svg>
          <p class="font-semibold text-navy-900 leading-snug">{!! $a[0] !!}</p>
        </div>
      @endforeach
    </div>
    <p class="text-center text-slate-600 text-lg leading-relaxed mt-10 max-w-3xl mx-auto italic">
      Whether you seek adventure, connection, learning, or complete relaxation, each journey is tailored to the experience you want to create.
    </p>
  </div>
</section>

{{-- HOW TO ARRIVE --}}
<section class="py-24 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">How to arrive</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Getting to the boat.</h2>
    </div>
    <div class="grid md:grid-cols-2 gap-8">
      @foreach([
        [
          'title'    => 'Itinerary 1 — Hamata Port',
          'location' => 'Hamata Port (south of Marsa Alam)',
          'airports' => [
            ['Marsa Alam Airport','174 km · ~2 hours away'],
            ['Hurghada Airport','392 km · ~5 hours away'],
          ],
        ],
        [
          'title'    => 'Itinerary 2 — Soma Bay',
          'location' => 'Soma Bay',
          'airports' => [
            ['Hurghada Airport','60 km · ~1 hour away'],
          ],
        ],
      ] as $i => $loc)
        <div class="bg-white rounded-3xl p-8 shadow-soft" data-aos="fade-up" data-aos-delay="{{ $i*120 }}">
          <h3 class="font-display text-2xl font-semibold text-navy-900 mb-5">{{ $loc['title'] }}</h3>
          <div class="mb-5">
            <p class="text-xs uppercase tracking-[0.25em] text-slate-500 mb-1">Location</p>
            <p class="text-slate-700">{{ $loc['location'] }}</p>
          </div>
          <div>
            <p class="text-xs uppercase tracking-[0.25em] text-slate-500 mb-2">Nearest airports</p>
            <ul class="space-y-2">
              @foreach($loc['airports'] as $a)
                <li class="flex justify-between gap-4 text-slate-700 border-b border-slate-100 pb-2 last:border-0">
                  <span class="font-medium">{{ $a[0] }}</span>
                  <span class="text-sm text-slate-500">{{ $a[1] }}</span>
                </li>
              @endforeach
            </ul>
          </div>
          <p class="text-xs text-slate-500 italic mt-5">* Internal transportation can be arranged upon request.</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- POSTCARDS (gallery) --}}
<section class="py-24 px-6 lg:px-12">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Postcards</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">From the Red Sea</h2>
    </div>
    <div class="columns-1 sm:columns-2 lg:columns-3 gap-4">
      @foreach([
        'general/8L4A8021.jpg','general/8L4A8413.jpg','general/8L4A8648.jpg',
        'general/22.11.24_Sataya__Malahi_DSLR_112_edited_1.jpg','general/22.11.25_Reef__Wreck_DSLR_15_edited.jpg',
        'general/22.11.26_Aziab_day_one_DSLR_38_edited_phshop.jpg','general/Abo_Galawa_wreck.jpg',
        'general/IMG_4355.jpg','general/IMG_4219.jpg','general/IMG_4342.jpg','general/_MG_9640.jpg','general/DSCF9867.jpg',
      ] as $g)
        <div class="img-zoom rounded-2xl overflow-hidden break-inside-avoid shadow-soft mb-4 inline-block w-full">
          <img src="/images/{{ $g }}" loading="lazy" class="w-full h-auto object-cover block" alt="">
        </div>
      @endforeach
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
