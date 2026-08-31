@extends('layouts.app')
@section('title','Contact')
@section('content')

<section class="relative pt-48 pb-28 md:pt-56 md:pb-36 px-6 lg:px-12 bg-navy-900 text-white overflow-hidden">
  <div class="absolute inset-0 opacity-30" style="background-image:url('/images/general/_MG_9565.jpg');background-size:cover;background-position:center 80%;"></div>
  <div class="absolute inset-0 hero-overlay"></div>
  <div class="relative max-w-4xl mx-auto text-center">
    <p class="text-sea-300 tracking-[0.5em] text-sm mb-6" data-aos="fade-down">GET IN TOUCH</p>
    <h1 class="font-display text-5xl md:text-7xl font-semibold leading-tight" data-aos="fade-up">Let's talk seafaris.</h1>
  </div>
</section>

<section class="py-20 px-6 lg:px-12">
  <div class="max-w-6xl mx-auto grid lg:grid-cols-2 gap-12">
    <div data-aos="fade-right">
      <h2 class="font-display text-3xl font-semibold text-navy-900 mb-6">Reach the crew.</h2>
      <p class="text-slate-600 leading-relaxed mb-8">We respond within 24 hours, usually faster. Send us an email for bookings, private charters, group offers or just a chat about the sea.</p>

      <h3 class="text-navy-900 font-semibold mb-4 text-xs uppercase tracking-[0.25em]">Get in touch</h3>
      <p class="text-slate-700 text-sm">info@aziab-seafaris.com</p>
      <p class="text-slate-700 text-sm mt-1">+20 100 104 0043</p>
      <div class="flex gap-3 mt-4">
        <a href="#" class="w-9 h-9 rounded-full bg-navy-900/5 hover:bg-sea-500 hover:text-white flex items-center justify-center transition text-navy-800"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9v-7H8v-3h2.4V9.5c0-2.4 1.4-3.7 3.6-3.7 1 0 2.1.2 2.1.2v2.3h-1.2c-1.2 0-1.5.7-1.5 1.5V12h2.6l-.4 3h-2.2v7A10 10 0 0022 12z"/></svg></a>
        <a href="https://instagram.com/aziabseafaris" class="w-9 h-9 rounded-full bg-navy-900/5 hover:bg-sea-500 hover:text-white flex items-center justify-center transition text-navy-800"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2 0 1.9.2 2.3.4.6.2 1 .5 1.5 1s.8.9 1 1.5c.2.4.3 1.1.4 2.3 0 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.9-.4 2.3-.2.6-.5 1-1 1.5s-.9.8-1.5 1c-.4.2-1.1.3-2.3.4-1.2 0-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.9-.2-2.3-.4a4 4 0 01-1.5-1 4 4 0 01-1-1.5c-.2-.4-.3-1.1-.4-2.3 0-1.2-.1-1.6-.1-4.8s0-3.6.1-4.8c0-1.2.2-1.9.4-2.3.2-.6.5-1 1-1.5s.9-.8 1.5-1c.4-.2 1.1-.3 2.3-.4 1.2 0 1.6-.1 4.8-.1zm0 2c-3.1 0-3.5 0-4.7.1-1 0-1.6.2-2 .3-.5.2-.8.4-1.2.8-.4.4-.6.7-.8 1.2-.1.4-.3 1-.3 2-.1 1.2-.1 1.6-.1 4.7s0 3.5.1 4.7c0 1 .2 1.6.3 2 .2.5.4.8.8 1.2.4.4.7.6 1.2.8.4.1 1 .3 2 .3 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c1 0 1.6-.2 2-.3.5-.2.8-.4 1.2-.8.4-.4.6-.7.8-1.2.1-.4.3-1 .3-2 .1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c0-1-.2-1.6-.3-2a3 3 0 00-.8-1.2 3 3 0 00-1.2-.8c-.4-.1-1-.3-2-.3-1.2-.1-1.6-.1-4.7-.1zm0 3.4a4.4 4.4 0 110 8.8 4.4 4.4 0 010-8.8zm0 7.2a2.8 2.8 0 100-5.6 2.8 2.8 0 000 5.6zm5.6-7.4a1 1 0 11-2 0 1 1 0 012 0z"/></svg></a>
      </div>
    </div>

    <form data-aos="fade-left" method="POST" action="{{ route('contact.send') }}" class="bg-sand-50 rounded-3xl p-8 md:p-10 space-y-4 shadow-soft">
      @csrf
      @if (session('sent'))
        <div class="rounded-xl bg-sea-500/10 border border-sea-500/30 text-sea-700 px-4 py-3 text-sm">{{ session('sent') }}</div>
      @endif
      @if ($errors->any())
        <div class="rounded-xl bg-red-50 border border-red-200 text-red-700 px-4 py-3 text-sm">Please check the form and try again.</div>
      @endif
      <div>
        <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Your name</label>
        <input name="name" value="{{ old('name') }}" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" required>
      </div>
      <div>
        <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" required>
      </div>
      <div>
        <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Subject</label>
        <select name="subject" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3">
          <option>General enquiry</option><option>Booking</option><option>Private charter</option><option>Press / partnership</option>
        </select>
      </div>
      <div>
        <label class="block text-xs uppercase tracking-wider text-slate-500 mb-1">Message</label>
        <textarea name="message" rows="5" class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3" required>{{ old('message') }}</textarea>
      </div>
      <button class="w-full bg-sea-500 hover:bg-sea-600 text-white font-semibold py-4 rounded-full shadow-soft transition">Send message</button>
    </form>
  </div>
</section>

@endsection
