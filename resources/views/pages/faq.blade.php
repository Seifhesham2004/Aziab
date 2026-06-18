@extends('layouts.app')
@section('title','FAQ')
@section('content')

@php
  $groups = [
    'Planning' => [
      ['q'=>'Do I need sailing experience?',
       'a'=>"Not at all. Every Aziab trip is led by a licensed skipper and crew. You can help hoist the sails, take the wheel for a tack, or simply lie back with a book and a cold drink. Whatever pace suits you."],
      ['q'=>'What happens if the weather turns?',
       'a'=>"Safety first, always. Our skippers may adjust the route to find calmer anchorages or stay in port for the day. We never sail through unsafe conditions — and the boat is just as much fun moored in a quiet bay."],
      ['q'=>'How fit do I need to be?',
       'a'=>"Reasonably mobile is enough. You'll need to climb a small boarding ladder, walk on a moving deck, and get in and out of the water. Nothing more demanding than that."],
    ],
    'Money matters' => [
      ['q'=>"What's included in the price?",
       'a'=>"The yacht, skipper and crew, fuel for normal sailing, marina &amp; marine-park fees, breakfast and most lunches on board, linen, towels and snorkeling gear on request. Not included: flights, transfers, dinners ashore, alcohol, and optional add-ons like diving or kite."],
      ['q'=>'Cancellation policy?',
       'a'=>"See the full cancellation tiers on our <a href=\"/prices#terms\" class=\"text-sea-500 hover:underline font-semibold\">Prices &amp; Terms</a> page. In short — the earlier you cancel, the less you forfeit."],
    ],
    'On board' => [
      ['q'=>'Can I book just one cabin?',
       'a'=>"Yes. Many of our expeditions are sold cabin-by-cabin. You'll join a small group of like-minded travellers and the crew will make sure the chemistry works. Solo travellers can also book a shared cabin at a reduced rate."],
      ['q'=>'Is it family-friendly?',
       'a'=>"Absolutely. Our catamarans are wide, stable and ideal for kids. We can arrange family-only sailings, kid-friendly snorkeling routes, and on-board games. Tell us their ages and we'll plan around them."],
    ],
    'Wellbeing' => [
      ['q'=>'What about food allergies and dietary needs?',
       'a'=>"Tell us in advance and our cook will tailor the menu — vegan, gluten-free, halal, kosher, low-FODMAP, no problem. We provision locally and adapt the menu day-by-day."],
    ],
  ];
@endphp

{{-- HERO --}}
<section class="relative h-[55vh] min-h-[400px] overflow-hidden text-white flex items-end">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/general/DSCF9867.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-7xl mx-auto w-full px-6 pb-16">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">FAQ</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-[1.05] max-w-4xl" data-aos="fade-up">Everything you wanted to ask.</h1>
    <p class="mt-6 text-lg md:text-xl text-white/85 max-w-2xl" data-aos="fade-up" data-aos-delay="200">
      Browse by topic — and if your question isn't here, drop us a line.
    </p>
  </div>
</section>

{{-- MAIN --}}
<section class="py-24 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-4xl mx-auto space-y-14">
    @foreach($groups as $group => $items)
      <div data-aos="fade-up">
        <div class="flex items-center gap-3 mb-6">
          <span class="w-10 h-px bg-sea-500"></span>
          <h2 class="font-display text-2xl md:text-3xl font-semibold text-navy-900">{{ $group }}</h2>
        </div>
        <div class="space-y-3">
          @foreach($items as $f)
            <div class="accordion bg-white border border-slate-100 rounded-2xl overflow-hidden hover:border-sea-400 hover:shadow-soft transition">
              <button type="button" class="accordion-trigger w-full flex items-center gap-4 px-6 py-5 text-left">
                <span class="font-display text-sea-500 text-2xl font-bold leading-none shrink-0">Q.</span>
                <h3 class="font-display text-base md:text-lg font-semibold text-navy-900 flex-1">{!! $f['q'] !!}</h3>
                <svg class="accordion-chevron w-5 h-5 text-sea-500 transition-transform duration-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
              </button>
              <div class="accordion-content grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-in-out">
                <div class="overflow-hidden">
                  <div class="px-6 pb-6 pt-1 pl-[3.75rem] flex gap-4 text-slate-700 leading-relaxed border-t border-slate-100">
                    <span class="font-display text-amber-600 text-2xl font-bold leading-none shrink-0 pt-3">A.</span>
                    <p class="pt-3">{!! $f['a'] !!}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>
</section>

{{-- CTA --}}
<section class="py-20 px-6 lg:px-12">
  <div class="max-w-5xl mx-auto bg-gradient-to-br from-navy-800 to-sea-600 rounded-3xl p-12 md:p-16 text-center text-white shadow-soft" data-aos="zoom-in">
    <h2 class="font-display text-3xl md:text-4xl font-semibold mb-4">Still wondering about something?</h2>
    <p class="text-lg text-white/85 mb-8">We answer every enquiry personally — usually within a day.</p>
    <a href="{{ route('contact') }}" class="inline-block bg-white text-navy-900 hover:bg-sand-100 px-8 py-4 rounded-full font-semibold transition">Get in touch</a>
  </div>
</section>

@push('scripts')
<script>
  document.querySelectorAll('.accordion').forEach(acc => {
    const trigger = acc.querySelector('.accordion-trigger');
    const content = acc.querySelector('.accordion-content');
    const chevron = acc.querySelector('.accordion-chevron');
    trigger.addEventListener('click', () => {
      const open = acc.classList.toggle('is-open');
      content.style.gridTemplateRows = open ? '1fr' : '0fr';
      chevron.style.transform = open ? 'rotate(180deg)' : '';
    });
  });
</script>
@endpush
@endsection
