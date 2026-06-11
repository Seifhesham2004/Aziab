@extends('layouts.app')
@section('title','Excursions')
@section('content')

<section class="relative h-[60vh] min-h-[440px] overflow-hidden text-white flex items-end">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/excursions/e726061b008e66f92d5373d687a20443.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-7xl mx-auto w-full px-6 pb-16">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">BEYOND THE BOAT</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-[1.05] max-w-4xl" data-aos="fade-up">Excursions &amp; experiences.</h1>
  </div>
</section>

<section class="py-20 px-6 lg:px-12">
  <div class="max-w-5xl mx-auto text-center mb-16" data-aos="fade-up">
    <p class="text-slate-600 text-lg leading-relaxed">
      A seafari with Aziab is more than sailing. We pair every voyage with on-shore experiences, hand-picked guides and the kind of moments that don't show up in guidebooks.
    </p>
  </div>

  @php
    $excs = [
      ['Reef dives','Guided drops with PADI instructors at the Red Sea\'s richest reefs.','090c25eda527cf7e138ea225b63f47a4.jpg'],
      ['Beach BBQ','Slow-cooked dinners on uninhabited islands, lit by lanterns and stars.','19c69820342dd6bf338a9a9602309b5b.jpg'],
      ['Sunrise yoga','Mat unrolled on the bow as the first light hits the water.','1f78f1c65cab906606da9667dd2c01e9.jpg'],
      ['Local villages','Walk dirt streets, share coffee with shopkeepers, learn the recipes.','227a07ab0541090bfbeac2bf3fd1a08d.jpg'],
      ['Free-dive school','Holding your breath under 10 meters, with a coach beside you.','3b9ea7564bf56552bcbe01df7701fd42.jpg'],
      ['Kite & wing','For the wind-lovers — boards and instructors on board.','436e6f2ec73301476d5bb25f40f63b71.jpg'],
      ['Stargazing','Off-grid skies. Bring your eyes, we bring the wine.','719366647e79860cab2f55178847b15d.jpg'],
      ['Sailing lessons','From knots to night watch — leave knowing how to sail.','7e7e3b2994683289bf82d2aa0a5487a6.jpg'],
      ['Photography days','Joined by a pro to bring home the kind of shots you\'ll print.','8923dbc8eda47b26773e9716079e4e5d.jpg'],
    ];
  @endphp

  <div class="max-w-7xl mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach($excs as $i => $e)
      <div class="group relative h-80 rounded-3xl overflow-hidden shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ ($i%3)*100 }}">
        <img src="/images/excursions/{{ $e[2] }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.2s]" alt="{{ $e[0] }}">
        <div class="absolute inset-0 bg-gradient-to-t from-navy-900/95 via-navy-900/30 to-transparent"></div>
        <div class="absolute inset-x-0 bottom-0 p-6 text-white">
          <h3 class="font-display text-2xl font-semibold mb-1">{{ $e[0] }}</h3>
          <p class="text-sm text-white/80">{{ $e[1] }}</p>
        </div>
      </div>
    @endforeach
  </div>
</section>

<section class="py-16 px-6 lg:px-12 bg-sand-50 text-center">
  <div class="max-w-3xl mx-auto" data-aos="fade-up">
    <h2 class="font-display text-3xl md:text-4xl font-semibold text-navy-900 mb-4">Want a custom add-on?</h2>
    <p class="text-slate-600 mb-6">Birthdays, proposals, private chefs, kid-friendly programs — tell us what you need and we'll build it into your trip.</p>
    <a href="{{ route('contact') }}" class="bg-sea-500 hover:bg-sea-600 text-white px-7 py-3.5 rounded-full font-semibold inline-block transition">Talk to us</a>
  </div>
</section>

@endsection
