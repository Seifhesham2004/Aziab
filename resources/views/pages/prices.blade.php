@extends('layouts.app')
@section('title','Prices')
@section('content')

{{-- HERO --}}
<section class="relative h-[55vh] min-h-[400px] overflow-hidden text-white flex items-end">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/general/22.11.26_Aziab_day_one_DSLR_38_edited_phshop.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-7xl mx-auto w-full px-6 pb-16">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">PRICES</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-[1.05] max-w-4xl" data-aos="fade-up">Two ways to sail.</h1>
    <p class="mt-6 text-lg md:text-xl text-white/85 max-w-2xl" data-aos="fade-up" data-aos-delay="200">
      Join a shared expedition by the cabin, or charter the whole yacht for your group.
    </p>
  </div>
</section>

{{-- TAB NAV --}}
<section class="bg-white border-b border-slate-100 sticky top-0 z-30">
  <div class="max-w-6xl mx-auto px-6 lg:px-12 flex flex-wrap gap-8 text-sm font-semibold py-4 justify-center">
    <a href="#egypt" class="text-slate-600 hover:text-sea-500 transition">Egypt — Red Sea</a>
    <a href="#greece" class="text-slate-600 hover:text-sea-500 transition">Greece</a>
    <a href="#included" class="text-slate-600 hover:text-sea-500 transition">What's included</a>
    <a href="#terms" class="text-slate-600 hover:text-sea-500 transition">Terms &amp; conditions</a>
  </div>
</section>

{{-- EGYPT PRICES --}}
<section id="egypt" class="py-24 px-6 lg:px-12 scroll-mt-24">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Red Sea · Egypt</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Egypt prices.</h2>
      <p class="text-slate-600 mt-4 max-w-2xl mx-auto">All prices in Euro. Marina entrance and marine park tickets are paid per person upon arrival.</p>
    </div>

    @php
      $boats = [
        [
          'name'    => 'Sailboat Beneteau Cyclades 50.5',
          'cap'     => 'Maximum capacity 8 guests',
          'img'     => 'egypt-roga/65aa4168784e9459d407dde6.jpeg',
          'rows'    => [
            ['6 days · Private charter', '€5,200', '+€300 / person on arrival'],
            ['4 days · Private charter', '€3,150', '+€200 / person on arrival'],
            ['6 days · Per person',      '€700',   '+€300 / person on arrival'],
            ['4 days · Per person',      '€450',   '+€200 / person on arrival'],
          ],
        ],
        [
          'name'    => 'Catamaran Bali 40',
          'cap'     => 'Maximum capacity 8 guests',
          'img'     => 'egypt-bali/bali-40-nea-36.jpg',
          'rows'    => [
            ['6 days · Private charter', '€6,800', '+€300 / person on arrival'],
            ['4 days · Private charter', '€4,500', '+€200 / person on arrival'],
            ['6 days · Per person',      '€900',   '+€300 / person on arrival'],
            ['4 days · Per person',      '€600',   '+€200 / person on arrival'],
          ],
        ],
      ];
    @endphp

    <div class="grid lg:grid-cols-2 gap-8">
      @foreach($boats as $idx => $b)
        <div class="bg-white rounded-3xl overflow-hidden shadow-soft card-hover" data-aos="fade-up" data-aos-delay="{{ $idx*120 }}">
          <div class="img-zoom aspect-[16/9] overflow-hidden">
            <img src="/images/{{ $b['img'] }}" loading="lazy" class="w-full h-full object-cover" alt="{{ $b['name'] }}">
          </div>
          <div class="p-8">
            <h3 class="font-display text-2xl md:text-3xl font-semibold text-navy-900 mb-1">{{ $b['name'] }}</h3>
            <p class="text-xs uppercase tracking-[0.25em] text-sea-500 font-semibold mb-6">{{ $b['cap'] }}</p>
            <div class="divide-y divide-slate-100">
              @foreach($b['rows'] as $r)
                <div class="py-4 flex flex-wrap items-baseline justify-between gap-2">
                  <div>
                    <p class="font-semibold text-navy-900">{{ $r[0] }}</p>
                    <p class="text-xs text-slate-500 mt-0.5">{{ $r[2] }}</p>
                  </div>
                  <p class="font-display text-2xl font-semibold text-sea-500">{{ $r[1] }}</p>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      @endforeach
    </div>

    {{-- Notes --}}
    <div class="mt-10 grid md:grid-cols-2 gap-5">
      <div class="bg-sand-50 rounded-2xl p-6 border-l-4 border-sea-400">
        <p class="text-sm text-slate-700 leading-relaxed"><strong>Egyptian nationals:</strong> please contact us directly via email — special subsidised rates are available in accordance with Egyptian laws and regulations.</p>
      </div>
      <div class="bg-sand-50 rounded-2xl p-6 border-l-4 border-sea-400">
        <p class="text-sm text-slate-700 leading-relaxed"><strong>Specialised trips:</strong> prices increase for selective trips with freediving / yoga instructors onboard or a specific workshop.</p>
      </div>
    </div>
  </div>
</section>

{{-- GREECE PRICES --}}
<section id="greece" class="py-24 px-6 lg:px-12 bg-sand-50 scroll-mt-24">
  <div class="max-w-6xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">Aegean · Greece</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Greece prices.</h2>
      <p class="text-slate-600 mt-4 max-w-2xl mx-auto">8 days / 7 nights · available from 4 to 12 guests.</p>
    </div>

    <div class="grid lg:grid-cols-[1.2fr,1fr] gap-8">
      <div class="bg-white rounded-3xl overflow-hidden shadow-soft" data-aos="fade-up">
        <div class="img-zoom aspect-[16/9] overflow-hidden">
          <img src="/images/greece/Greece_5.jpg" loading="lazy" class="w-full h-full object-cover" alt="Sailing in Greece">
        </div>
        <div class="p-8">
          <p class="text-xs uppercase tracking-[0.25em] text-sea-500 font-semibold mb-2">8 days · Private charter</p>
          <h3 class="font-display text-3xl font-semibold text-navy-900 mb-3">€6,000 — €9,000</h3>
          <p class="text-slate-600 leading-relaxed">Range depends on the chosen sailboat or catamaran. Available from 4 to 12 guests.</p>
        </div>
      </div>

      <div class="bg-white rounded-3xl overflow-hidden shadow-soft flex flex-col justify-center" data-aos="fade-up" data-aos-delay="120">
        <div class="p-8">
          <p class="text-xs uppercase tracking-[0.25em] text-sea-500 font-semibold mb-2">8 days · Per person</p>
          <h3 class="font-display text-3xl font-semibold text-navy-900 mb-3">€1,550</h3>
          <p class="text-slate-600 leading-relaxed">Cabin-share rate on a shared expedition.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- WHAT'S INCLUDED --}}
<section id="included" class="py-24 px-6 lg:px-12 scroll-mt-24">
  <div class="max-w-7xl mx-auto">
    <div class="text-center mb-14" data-aos="fade-up">
      <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">What's in the price</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold text-navy-900">Included &amp; not included.</h2>
    </div>

    @php
      $incExc = [
        [
          'flag'  => 'Egypt',
          'inc'   => [
            'Accommodation on the boat',
            'Professional captain',
            'Professional guide',
            'Chef',
            'All-inclusive menu (alcoholic drinks not included)',
            'Fuel',
            'Water',
            'Emergency first aid, sea-sickness pills and oxygen tank',
            'Final cleaning fees',
            'Bed sheets',
          ],
          'bring' => [
            'Your own towels and toiletries',
            'Sunblock',
            'Your camera',
          ],
          'exc'   => [
            'Flights',
            'Internal transfers (can be arranged for an extra fee)',
            'Snorkeling or freediving gear (can be arranged for an extra fee)',
            'Crew gratuity (recommended if you had a good time)',
            'Travel insurance (recommended)',
            'Anything not explicitly listed as included',
          ],
        ],
        [
          'flag'  => 'Greece',
          'inc'   => [
            'Accommodation on the boat — 8 days / 7 nights',
            'Fuel',
            'Water',
            'Marina fees',
            'Professional skipper',
            'Basic food package (suitable for breakfast and light meals e.g. salads / pasta)',
            'Access to secluded beaches and swimming stops only reachable by boat',
            'Final cleaning fees',
            'Bed sheets',
          ],
          'bring' => null,
          'exc'   => [
            'Flights',
            'Lunch &amp; dinners in restaurants',
            'Extra activities on land (optional)',
            'Personal expenses and shopping',
            'Airport transfers',
            'Travel insurance',
            'Crew gratuity (recommended if you had a good time)',
            'Anything not explicitly listed as included',
          ],
        ],
      ];
    @endphp

    <div class="grid lg:grid-cols-2 gap-8">
      @foreach($incExc as $i => $blk)
        <div class="bg-sand-50 rounded-3xl p-8 shadow-soft" data-aos="fade-up" data-aos-delay="{{ $i*120 }}">
          <h3 class="font-display text-2xl font-semibold text-navy-900 mb-6">{{ $blk['flag'] }}</h3>

          <p class="text-xs uppercase tracking-[0.25em] text-emerald-600 font-semibold mb-3">Included</p>
          <ul class="space-y-2 text-slate-700 text-sm mb-6">
            @foreach($blk['inc'] as $li)
              <li class="flex gap-2"><span class="text-emerald-500 mt-0.5">✓</span><span>{!! $li !!}</span></li>
            @endforeach
          </ul>

          @if($blk['bring'])
            <p class="text-xs uppercase tracking-[0.25em] text-sea-500 font-semibold mb-3">You should bring</p>
            <ul class="space-y-2 text-slate-700 text-sm mb-6">
              @foreach($blk['bring'] as $li)
                <li class="flex gap-2"><span class="text-sea-500 mt-0.5">•</span><span>{!! $li !!}</span></li>
              @endforeach
            </ul>
          @endif

          <p class="text-xs uppercase tracking-[0.25em] text-rose-600 font-semibold mb-3">Not included</p>
          <ul class="space-y-2 text-slate-700 text-sm">
            @foreach($blk['exc'] as $li)
              <li class="flex gap-2"><span class="text-rose-500 mt-0.5">✕</span><span>{!! $li !!}</span></li>
            @endforeach
          </ul>
        </div>
      @endforeach
    </div>
  </div>
</section>

{{-- TERMS & CONDITIONS --}}
<section id="terms" class="py-24 px-6 lg:px-12 bg-navy-900 text-white scroll-mt-24">
  <div class="max-w-5xl mx-auto">
    <div class="text-center mb-12" data-aos="fade-up">
      <p class="text-sea-300 uppercase tracking-[0.3em] text-sm mb-3">The fine print</p>
      <h2 class="font-display text-4xl md:text-5xl font-semibold">Terms &amp; conditions.</h2>
      <p class="text-white/60 text-sm mt-4">Tap any section to expand.</p>
    </div>

    {{-- Country toggle --}}
    <div class="flex justify-center mb-10" data-aos="fade-up">
      <div class="inline-flex bg-white/5 backdrop-blur border border-white/10 rounded-full p-1">
        <button data-tab="egypt"  class="terms-tab px-6 py-2 rounded-full text-sm font-semibold transition bg-sea-500 text-white">Egypt</button>
        <button data-tab="greece" class="terms-tab px-6 py-2 rounded-full text-sm font-semibold transition text-white/70 hover:text-white">Greece</button>
      </div>
    </div>

    {{-- EGYPT TERMS --}}
    <div id="terms-egypt" class="terms-panel space-y-3" data-aos="fade-up">
      @php
        $egyptTerms = [
          [
            'title' => 'Amendments &amp; cancellations',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>',
            'body'  => '<p>Amendments or cancellations of confirmed bookings should be emailed directly at the earliest opportunity to <a href="mailto:info@aziab-seafaris.com" class="text-sea-300 hover:underline">info@aziab-seafaris.com</a>. When this has been processed, you will receive a response within 24 hours; if not received, please resend your email.</p><p class="mt-3">Cancellation of any equipment sourced by Aziab Seafaris from a third party (e.g. wetsuit, buoys, weights, mask) must be received no later than 48 hours prior to your arrival. Failure to do so will incur a charge of 100% of the total rental cost.</p>',
          ],
          [
            'title' => 'Trip cancellation tiers',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
            'body'  => '<ul class="space-y-1.5"><li class="flex justify-between gap-4 border-b border-white/10 pb-1.5"><span>Until 90 days before start</span><span class="font-semibold text-sea-300">15%</span></li><li class="flex justify-between gap-4 border-b border-white/10 pb-1.5"><span>89 – 35 days before start</span><span class="font-semibold text-sea-300">25%</span></li><li class="flex justify-between gap-4 border-b border-white/10 pb-1.5"><span>34 – 22 days before start</span><span class="font-semibold text-sea-300">50%</span></li><li class="flex justify-between gap-4 border-b border-white/10 pb-1.5"><span>21 – 15 days before start</span><span class="font-semibold text-sea-300">70%</span></li><li class="flex justify-between gap-4 border-b border-white/10 pb-1.5"><span>14 days before start</span><span class="font-semibold text-sea-300">90%</span></li><li class="flex justify-between gap-4"><span>7 days before start, or non-appearance</span><span class="font-semibold text-rose-300">100%</span></li></ul>',
          ],
          [
            'title' => 'Force majeure',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01M5 19h14a2 2 0 001.84-2.75L13.74 4a2 2 0 00-3.48 0L3.16 16.25A2 2 0 005 19z"/>',
            'body'  => '<p>In very rare cases of force majeure — which happen in less than 2% of our trips — such as navy exercises, extreme weather, sudden changes in governmental laws, or a problem on the boats that could jeopardise the safety of guests, Aziab Seafaris is obliged to:</p><ol class="mt-3 space-y-1.5 list-decimal list-inside"><li>Make a full refund of the money, <em>or</em></li><li>Offer guests a 10% discount on their total receipts if they choose to stay at one of Red Sea Diving Safari locations (depending on availability), <em>or</em></li><li>Offer guests a 10% discount on any further trip.</li></ol>',
          ],
          [
            'title' => 'Itineraries &amp; sites',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0L6.343 16.657a8 8 0 1111.314 0zM15 11a3 3 0 11-6 0 3 3 0 016 0z"/>',
            'body'  => '<p>All itineraries and sites are subject to various unpredictable changes including weather conditions and changes in local government approval. Whilst Aziab Seafaris makes every effort, we cannot guarantee visiting specific sites. In adverse weather, the captain has the final decision to ensure guest, staff and boat safety. If sites are not reached due to weather or unforeseeable changes, Aziab Seafaris will not offer a refund or compensation.</p>',
          ],
          [
            'title' => 'Behaviour onboard',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>',
            'body'  => '<p>Anti-social or aggressive behaviour will not be tolerated, and individuals who cause a disturbance to other guests may be removed from the trip.</p>',
          ],
          [
            'title' => 'Your consent',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
            'body'  => '<p>Your consent to accept our Terms and Conditions is required to proceed with your booking.</p><p class="mt-3"><em>Why we need it:</em> you are contracting with us outside of the country where you reside; we are an Egyptian company with management and assets held in countries where we comply with local laws, regulations and practices that may differ from those where you live.</p><p class="mt-3"><em>How we use it:</em> when you consent, we provide our services subject to these Terms and Conditions. By proceeding with your booking, you consent to these terms.</p><p class="mt-3">You have the right to refuse. If you refuse, you should not proceed with your booking. Should you proceed but later withdraw your consent, the agreement ends and cancellation charges apply as per these Terms and Conditions.</p>',
          ],
          [
            'title' => 'Regulatory changes',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>',
            'body'  => '<p>We reserve the right to change terms and conditions resulting from any regulations or new rules coming from the government.</p>',
          ],
        ];
      @endphp

      @foreach($egyptTerms as $i => $t)
        <details class="group bg-white/5 backdrop-blur border border-white/10 rounded-2xl overflow-hidden hover:border-sea-400/40 transition">
          <summary class="flex items-center gap-4 px-6 py-5 cursor-pointer list-none">
            <div class="w-10 h-10 rounded-full bg-sea-500/20 text-sea-300 flex items-center justify-center shrink-0">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $t['icon'] !!}</svg>
            </div>
            <h3 class="font-display text-lg md:text-xl font-semibold flex-1">{!! $t['title'] !!}</h3>
            <svg class="w-5 h-5 text-sea-300 transition-transform group-open:rotate-180 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </summary>
          <div class="px-6 pb-6 pt-1 pl-20 text-white/80 text-sm leading-relaxed border-t border-white/5">
            {!! $t['body'] !!}
          </div>
        </details>
      @endforeach
    </div>

    {{-- GREECE TERMS --}}
    <div id="terms-greece" class="terms-panel space-y-3 hidden" data-aos="fade-up">
      @php
        $greeceTerms = [
          [
            'title' => 'Same Egypt terms apply',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
            'body'  => '<p>The same terms and conditions apply to our Greece sailing trips, with the difference of the cancellation policy below.</p>',
          ],
          [
            'title' => 'Cancellation policy',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>',
            'body'  => '<p>Any amount paid as a deposit or full amount becomes automatically non-refundable.</p>',
          ],
          [
            'title' => 'If Aziab cancels the trip',
            'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>',
            'body'  => '<p>If for any reason Aziab Seafaris cancels the trip — due to minimum-capacity requirement, political situation, severe weather, or any other force majeure — we will fully refund any payment made by the guests within 7 working days.</p>',
          ],
        ];
      @endphp

      @foreach($greeceTerms as $i => $t)
        <details class="group bg-white/5 backdrop-blur border border-white/10 rounded-2xl overflow-hidden hover:border-sea-400/40 transition">
          <summary class="flex items-center gap-4 px-6 py-5 cursor-pointer list-none">
            <div class="w-10 h-10 rounded-full bg-sea-500/20 text-sea-300 flex items-center justify-center shrink-0">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">{!! $t['icon'] !!}</svg>
            </div>
            <h3 class="font-display text-lg md:text-xl font-semibold flex-1">{!! $t['title'] !!}</h3>
            <svg class="w-5 h-5 text-sea-300 transition-transform group-open:rotate-180 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
          </summary>
          <div class="px-6 pb-6 pt-1 pl-20 text-white/80 text-sm leading-relaxed border-t border-white/5">
            {!! $t['body'] !!}
          </div>
        </details>
      @endforeach
    </div>
  </div>
</section>

@push('scripts')
<script>
  const tabs = document.querySelectorAll('.terms-tab');
  tabs.forEach(t => t.addEventListener('click', () => {
    const which = t.dataset.tab;
    tabs.forEach(x => {
      const active = x.dataset.tab === which;
      x.classList.toggle('bg-sea-500', active);
      x.classList.toggle('text-white', active);
      x.classList.toggle('text-white/70', !active);
    });
    document.querySelectorAll('.terms-panel').forEach(p => p.classList.add('hidden'));
    document.getElementById('terms-' + which).classList.remove('hidden');
  }));
</script>
@endpush

{{-- CTA --}}
<section class="py-20 px-6 lg:px-12">
  <div class="max-w-5xl mx-auto bg-gradient-to-br from-navy-800 to-sea-600 rounded-3xl p-12 md:p-16 text-center text-white shadow-soft" data-aos="zoom-in">
    <h2 class="font-display text-4xl md:text-5xl font-semibold mb-4">Ready to book?</h2>
    <p class="text-lg text-white/85 mb-8">Tell us your dates and group size — we'll send full availability and a tailored quote.</p>
    <div class="flex flex-wrap gap-4 justify-center">
      <a href="{{ route('booking') }}" class="bg-white text-navy-900 hover:bg-sand-100 px-8 py-4 rounded-full font-semibold transition">Book a spot</a>
      <a href="{{ route('contact') }}" class="border border-white/40 hover:bg-white/10 px-8 py-4 rounded-full font-semibold transition">Get in touch</a>
    </div>
  </div>
</section>

@endsection
