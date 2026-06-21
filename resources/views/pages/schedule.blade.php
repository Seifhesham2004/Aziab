@extends('layouts.app')
@section('title','Schedule')
@section('content')

{{-- HERO --}}
<section class="relative h-[55vh] min-h-[400px] overflow-hidden text-white flex items-end">
  <div class="absolute inset-0 ken-burns bg-cover bg-center" style="background-image:url('/images/general/22.11.24_Sataya__Malahi_DSLR_43_edited_1.jpg')"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative z-10 max-w-7xl mx-auto w-full px-6 pb-16">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">SCHEDULE</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-[1.05] max-w-4xl" data-aos="fade-up">Pick your month.</h1>
    <p class="mt-6 text-lg md:text-xl text-white/85 max-w-2xl" data-aos="fade-up" data-aos-delay="200">
      Click a month to see the trips available. Dates can be customised on request, subject to availability.
    </p>
  </div>
</section>

@php
  $regionMeta = [
    'egypt'  => ['label'=>'Red Sea · Egypt','note'=>'Dates can be customised or changed per guests\' requests if we have availability.'],
    'greece' => ['label'=>'Aegean · Greece','note'=>null],
  ];
@endphp

<section class="py-24 px-6 lg:px-12 bg-sand-50">
  <div class="max-w-5xl mx-auto space-y-20">

    @foreach(['egypt','greece'] as $region)
      @if(!empty($grouped[$region]))
        <div data-aos="fade-up">
          <div class="text-center mb-10">
            <p class="text-sea-500 uppercase tracking-[0.3em] text-sm mb-3">{{ $regionMeta[$region]['label'] }}</p>
            @if($regionMeta[$region]['note'])
              <p class="text-slate-500 text-sm italic max-w-xl mx-auto">{{ $regionMeta[$region]['note'] }}</p>
            @endif
          </div>

          @foreach($grouped[$region] as $boat => $months)
            <div class="mb-12">
              <div class="flex items-center gap-3 mb-6">
                <span class="w-10 h-px bg-sea-500"></span>
                <h2 class="font-display text-2xl md:text-3xl font-semibold text-navy-900">{{ $boat }}</h2>
              </div>

              <div class="space-y-3">
                @foreach($months as $monthKey => $entries)
                  @php
                    $monthLabel = \Illuminate\Support\Carbon::createFromFormat('Y-m', $monthKey)->format('F Y');
                  @endphp
                  <div class="accordion bg-white border border-slate-100 rounded-2xl overflow-hidden hover:border-sea-400 hover:shadow-soft transition">
                    <button type="button" class="accordion-trigger w-full flex items-center gap-4 px-6 py-5 text-left">
                      <div class="w-10 h-10 rounded-full bg-sea-500/15 text-sea-500 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                      </div>
                      <h3 class="font-display text-lg md:text-xl font-semibold text-navy-900 flex-1">{{ $monthLabel }}</h3>
                      <span class="text-xs uppercase tracking-wider text-slate-500 hidden sm:inline">{{ count($entries) }} {{ \Illuminate\Support\Str::plural('trip', count($entries)) }}</span>
                      <svg class="accordion-chevron w-5 h-5 text-sea-500 transition-transform duration-300 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div class="accordion-content grid grid-rows-[0fr] transition-[grid-template-rows] duration-500 ease-in-out">
                      <div class="overflow-hidden">
                        <ul class="px-6 pb-6 pt-1 border-t border-slate-100 divide-y divide-slate-100">
                          @foreach($entries as $e)
                            @php
                              $isFull = $e->availability && stripos($e->availability,'fully') !== false;
                              $hasAvail = filled($e->availability);
                            @endphp
                            <li class="py-3 flex flex-wrap items-center justify-between gap-3">
                              <div>
                                <p class="font-display text-lg font-semibold {{ $isFull ? 'text-slate-400 line-through' : 'text-navy-900' }}">{{ $e->dateRangeLabel() }}</p>
                                @if($e->route)
                                  <p class="text-xs uppercase tracking-wider text-sea-500 mt-1">{{ $e->route }}</p>
                                @endif
                                @if($e->notes)
                                  <p class="text-xs text-slate-500 mt-1">{{ $e->notes }}</p>
                                @endif
                              </div>
                              <div class="flex items-center gap-3">
                                @if($hasAvail)
                                  <span class="inline-flex items-center gap-1.5 text-[11px] uppercase tracking-wider font-semibold px-2.5 py-1 rounded-full {{ $isFull ? 'bg-rose-100 text-rose-700' : 'bg-amber-100 text-amber-700' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $isFull ? 'bg-rose-500' : 'bg-amber-500' }}"></span>
                                    {{ $e->availability }}
                                  </span>
                                @endif
                                @if(!$isFull)
                                  <a href="{{ route('booking') }}" class="text-xs uppercase tracking-wider text-sea-500 font-semibold hover:gap-2 inline-flex items-center gap-1 transition-all">Request →</a>
                                @endif
                              </div>
                            </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
      @endif
    @endforeach

    @if(empty($grouped))
      <div class="text-center text-slate-500 py-16">No upcoming dates yet. Please contact us for availability.</div>
    @endif
  </div>
</section>

{{-- HOW TO BOOK --}}
<section class="py-20 px-6 lg:px-12 bg-navy-900 text-white">
  <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
    <p class="text-sea-300 uppercase tracking-[0.3em] text-sm mb-3">How to book</p>
    <h2 class="font-display text-4xl md:text-5xl font-semibold mb-8">Send us a note.</h2>
    <p class="text-white/80 text-lg leading-relaxed mb-8">
      Email <a href="mailto:info@aziab-seafaris.com" class="text-sea-300 hover:underline">info@aziab-seafaris.com</a> or DM us on Instagram <a href="https://instagram.com/aziabseafaris" class="text-sea-300 hover:underline">@aziabseafaris</a>. Please mention:
    </p>
    <ul class="text-white/80 text-left max-w-md mx-auto space-y-2 mb-8">
      <li class="flex gap-3"><span class="text-sea-300">•</span><span>How many spots, or whether you want a private charter</span></li>
      <li class="flex gap-3"><span class="text-sea-300">•</span><span>Your preferred dates</span></li>
      <li class="flex gap-3"><span class="text-sea-300">•</span><span>Any inquiries you have</span></li>
    </ul>
    <p class="text-white/70">We'll reply with a detailed PDF, trip details, availability, and answers to your questions.</p>
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
