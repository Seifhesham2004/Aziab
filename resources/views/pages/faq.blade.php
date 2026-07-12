@extends('layouts.app')
@section('title','FAQ')
@section('content')

@php
  $groups = [
    'The experience' => [
      ['q'=>'What do we offer?',
       'a'=>"We take our guests on 3 or 6-night sailing expeditions to the most beautiful locations in the Red Sea, and 7-night journeys in Greece."],
      ['q'=>'Is it a rough sailing experience?',
       'a'=>"No. All our mooring locations are carefully selected and sheltered from wind and waves, typically in calm lagoons or near protected islands."],
      ['q'=>'How many guests do the boats accommodate?',
       'a'=>"In Egypt, our sailboats and catamarans accommodate up to 8 guests. In Greece, our sailboats host between 4 and 12 guests, depending on the vessel."],
      ['q'=>'Who will I be sailing with?',
       'a'=>"This experience is designed for sea lovers and adventure seekers. Our guests are typically open-minded travellers looking to disconnect, explore, connect with nature, and enjoy meaningful experiences at sea."],
      ['q'=>'Is it family friendly?',
       'a'=>"Yes, our trips are family friendly. Children especially enjoy the marine life, and our guides are experienced in snorkelling with kids. We also provide onboard games for younger guests."],
    ],
    'Booking' => [
      ['q'=>'Can I book individually or do I need to charter the whole boat?',
       'a'=>"Both options are available. You can join as an individual or charter the full boat. Please check availability or contact us for details."],
      ['q'=>'Can I book a private cabin?',
       'a'=>"Yes. Private cabin bookings are available at 1.35× the standard price. Marina entrance and marine park fees remain unchanged as they are charged per person."],
      ['q'=>'Can I book a bareboat charter?',
       'a'=>"Bareboat sailing is not permitted under Egyptian law. All trips include a certified professional captain."],
      ['q'=>'Payments &amp; cancellations?',
       'a'=>"To confirm your booking, a deposit of 25%–50% is required depending on the timing of your reservation. The remaining balance is due 45 days before departure."],
      ['q'=>'Cancellation policy?',
       'a'=>"Please refer to our <a href=\"/prices#terms\" class=\"text-sea-500 hover:underline font-semibold\">Prices &amp; Terms</a> page for full details. In general, the earlier you cancel, the lower the cancellation fee."],
    ],
    'Onboard' => [
      ['q'=>'Are the boats fully serviced?',
       'a'=>"Yes. This is a hassle-free experience with a captain, chef, and professional guide onboard every trip."],
      ['q'=>'Do you provide bedding?',
       'a'=>"Yes, we provide bed linen, cushions, and blankets."],
      ['q'=>'What should I bring?',
       'a'=>"We recommend a small bag with light clothing, swimwear, two towels, toiletries, sunglasses, sunscreen, a camera (optional), and phone chargers. We are barefoot onboard, so shoes or slippers are not necessary."],
    ],
    'Food' => [
      ['q'=>'What about the food?',
       'a'=>"We serve three daily meals onboard, along with snacks, fresh fruit, juices, soft drinks, tea, and coffee. We can accommodate dietary requirements such as vegan, vegetarian, gluten-free, lactose-free, and allergies if informed in advance."],
      ['q'=>'What is the food like onboard?',
       'a'=>"Breakfast includes items such as eggs, beans, cheese, vegetables, yogurt, oats, honey, Nutella, peanut butter, jam, and bread. Lunch is typically light, featuring salads, pasta, or savoury pies. Dinner includes a main carbohydrate (rice or pasta), a protein option (fish, chicken, or meat), along with salads and appetizers. All meals are freshly prepared onboard by our chef."],
    ],
    'Weather' => [
      ['q'=>'What happens if it\'s too windy?',
       'a'=>"In Egypt, the weather is generally favorable year-round, with light to moderate winds. In rare cases of strong winds, if the authorities close the sea, guests are welcome to stay onboard the boat until conditions improve — or alternatively receive a partial refund for the affected days and arrange accommodation at a nearby hotel."],
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
      Browse by topic — and if your question isn't here, send us an email.
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
