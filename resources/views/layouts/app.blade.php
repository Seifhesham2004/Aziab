<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>@yield('title', 'Aziab Seafaris') — Sailing Expeditions</title>
<meta name="description" content="Aziab Seafaris — sailing expeditions across Egypt and Greece. Family, friends, exclusive trips on premium yachts.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Poppins','ui-sans-serif','system-ui'],
          serif: ['Poppins','ui-sans-serif','system-ui'],
        },
        colors: {
          navy:   { 50:'#f1f5f9', 600:'#1e3a5f', 700:'#16314f', 800:'#0f2138', 900:'#0a1726' },
          sea:    { 300:'#7dd3fc', 400:'#38bdf8', 500:'#0ea5e9', 600:'#0284c7' },
          sand:   { 50:'#fbf8f3', 100:'#f5efe3', 200:'#ead9bd' },
        },
        boxShadow: { soft: '0 10px 40px -10px rgba(15,33,56,.25)' }
      }
    }
  }
</script>

<style>
  html { scroll-behavior: smooth; }
  body { font-family: 'Poppins', sans-serif; color:#0f2138; background:#fff; -webkit-font-smoothing: antialiased; font-weight: 400; }
  .font-display { font-family: 'Poppins', sans-serif; font-weight: 600; letter-spacing:-0.02em; }
  h1.font-display { font-weight: 700; }
  .hero-overlay { background: linear-gradient(180deg, rgba(10,23,38,.25) 0%, rgba(10,23,38,.55) 60%, rgba(10,23,38,.7) 100%); }
  .nav-link { position:relative; }
  .nav-link::after { content:''; position:absolute; left:0; bottom:-6px; width:0; height:2px; background:#0ea5e9; transition: width .3s ease; }
  .nav-link:hover::after, .nav-link.active::after { width:100%; }
  .ken-burns { animation: kb 20s ease-in-out infinite alternate; }
  @keyframes kb { 0%{ transform: scale(1.05) translate(0,0);} 100%{ transform: scale(1.15) translate(-1%, -1%);} }
  .glass { backdrop-filter: blur(12px); background: rgba(255,255,255,.08); border:1px solid rgba(255,255,255,.18); }
  .marquee { display:flex; gap:3rem; animation: marquee 40s linear infinite; }
  @keyframes marquee { from{transform:translateX(0);} to{transform:translateX(-50%);} }
  .wave { position:absolute; left:0; right:0; bottom:-1px; line-height:0; }
  .gradient-text { background: linear-gradient(90deg,#0ea5e9,#1e3a5f); -webkit-background-clip:text; background-clip:text; color:transparent; }
  .card-hover { transition: transform .5s ease, box-shadow .5s ease; }
  .card-hover:hover { transform: translateY(-8px); box-shadow: 0 30px 60px -20px rgba(15,33,56,.35); }
  .img-zoom { overflow:hidden; }
  .img-zoom img { transition: transform .8s ease; }
  .img-zoom:hover img { transform: scale(1.08); }
  /* Header */
  .site-header { transition: background .3s ease, box-shadow .3s ease, padding .3s ease; }
  .site-header.scrolled { background: rgba(255,255,255,.95); box-shadow: 0 4px 20px -10px rgba(0,0,0,.2); }
  .site-header.scrolled a.nav-link { color:#0f2138; }
  .site-header.scrolled .brand { color:#0f2138; }
  .site-header.scrolled #menuBtn { color:#0f2138; }
  .site-header.scrolled .logo-default { opacity: 0; }
  .site-header.scrolled .logo-scrolled { opacity: 1; }
</style>
</head>
<body class="antialiased">

<header class="site-header fixed top-0 inset-x-0 z-50 px-6 lg:px-12 py-4">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <a href="{{ route('home') }}" class="brand flex items-center" aria-label="Aziab Seafaris">
      <img src="/images/brand/logo-white.png" class="logo-default h-12 md:h-14 w-auto transition-opacity duration-300" alt="Aziab Seafaris">
      <img src="/images/brand/logo-transparent.png" class="logo-scrolled h-12 md:h-14 w-auto absolute opacity-0 transition-opacity duration-300" alt="">
    </a>
    <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-white">
      @php $r = request()->route()->getName(); @endphp
      <a href="{{ route('home') }}" class="nav-link {{ $r==='home'?'active':'' }}">Home</a>
      <a href="{{ route('about') }}" class="nav-link {{ $r==='about'?'active':'' }}">About</a>
      <a href="{{ route('egypt') }}" class="nav-link {{ $r==='egypt'?'active':'' }}">Egypt</a>
      <a href="{{ route('greece') }}" class="nav-link {{ $r==='greece'?'active':'' }}">Greece</a>
      <a href="{{ route('excursions') }}" class="nav-link {{ $r==='excursions'?'active':'' }}">Extras &amp; Excursions</a>
      <a href="{{ route('prices') }}" class="nav-link {{ $r==='prices'?'active':'' }}">Prices</a>
      <a href="{{ route('schedule') }}" class="nav-link {{ $r==='schedule'?'active':'' }}">Schedule</a>
      <a href="{{ route('faq') }}" class="nav-link {{ $r==='faq'?'active':'' }}">FAQ</a>
      <a href="{{ route('contact') }}" class="nav-link {{ $r==='contact'?'active':'' }}">Contact</a>
    </nav>
    <a href="{{ route('booking') }}" class="hidden md:inline-flex items-center gap-2 bg-sea-500 hover:bg-sea-600 text-white px-5 py-2.5 rounded-full text-sm font-semibold shadow-soft transition">
      Book Now
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
    </a>
    <button id="menuBtn" class="lg:hidden text-white" aria-label="Menu">
      <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
  <div id="mobileMenu" class="lg:hidden hidden mt-4 bg-white rounded-xl shadow-soft p-4 space-y-2 text-navy-800">
    @foreach([['home','Home'],['about','About'],['egypt','Egypt'],['greece','Greece'],['excursions','Extras & Excursions'],['prices','Prices'],['schedule','Schedule'],['booking','Booking'],['faq','FAQ'],['contact','Contact']] as $l)
      <a href="{{ route($l[0]) }}" class="block py-2 border-b border-slate-100 last:border-0 hover:text-sea-500">{{ $l[1] }}</a>
    @endforeach
  </div>
</header>

<main>
  @yield('content')
</main>

<footer class="bg-navy-900 text-slate-300 pt-20 pb-8 px-6 lg:px-12 mt-20 relative overflow-hidden">
  <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image: radial-gradient(circle at 20% 30%, #0ea5e9 0, transparent 50%), radial-gradient(circle at 80% 70%, #38bdf8 0, transparent 50%);"></div>
  <div class="max-w-7xl mx-auto relative grid md:grid-cols-4 gap-10">
    <div>
      <div class="text-2xl font-display font-bold text-white tracking-widest mb-4">AZIAB <span class="text-sea-400">SEAFARIS</span></div>
      <p class="text-sm leading-relaxed text-slate-400">Sailing expeditions across two continents — connect with family, friends and the sea on exclusive private and shared journeys.</p>
    </div>
    <div>
      <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Explore</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ route('egypt') }}" class="hover:text-sea-400">Egypt</a></li>
        <li><a href="{{ route('greece') }}" class="hover:text-sea-400">Greece</a></li>
        <li><a href="{{ route('excursions') }}" class="hover:text-sea-400">Extras &amp; Excursions</a></li>
        <li><a href="{{ route('about') }}" class="hover:text-sea-400">About Us</a></li>
      </ul>
    </div>
    <div>
      <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Plan</h4>
      <ul class="space-y-2 text-sm">
        <li><a href="{{ route('prices') }}" class="hover:text-sea-400">Prices &amp; schedule</a></li>
        <li><a href="{{ route('booking') }}" class="hover:text-sea-400">Booking</a></li>
        <li><a href="{{ route('faq') }}" class="hover:text-sea-400">FAQ</a></li>
        <li><a href="{{ route('contact') }}" class="hover:text-sea-400">Contact</a></li>
      </ul>
    </div>
    <div>
      <h4 class="text-white font-semibold mb-4 text-sm uppercase tracking-wider">Get in touch</h4>
      <p class="text-sm">hello@aziab-seafaris.com</p>
      <p class="text-sm mt-1">+20 100 000 0000</p>
      <div class="flex gap-3 mt-4">
        <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-sea-500 flex items-center justify-center transition"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12a10 10 0 10-11.6 9.9v-7H8v-3h2.4V9.5c0-2.4 1.4-3.7 3.6-3.7 1 0 2.1.2 2.1.2v2.3h-1.2c-1.2 0-1.5.7-1.5 1.5V12h2.6l-.4 3h-2.2v7A10 10 0 0022 12z"/></svg></a>
        <a href="#" class="w-9 h-9 rounded-full bg-white/10 hover:bg-sea-500 flex items-center justify-center transition"><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2 0 1.9.2 2.3.4.6.2 1 .5 1.5 1s.8.9 1 1.5c.2.4.3 1.1.4 2.3 0 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.2 1.9-.4 2.3-.2.6-.5 1-1 1.5s-.9.8-1.5 1c-.4.2-1.1.3-2.3.4-1.2 0-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.9-.2-2.3-.4a4 4 0 01-1.5-1 4 4 0 01-1-1.5c-.2-.4-.3-1.1-.4-2.3 0-1.2-.1-1.6-.1-4.8s0-3.6.1-4.8c0-1.2.2-1.9.4-2.3.2-.6.5-1 1-1.5s.9-.8 1.5-1c.4-.2 1.1-.3 2.3-.4 1.2 0 1.6-.1 4.8-.1zm0 2c-3.1 0-3.5 0-4.7.1-1 0-1.6.2-2 .3-.5.2-.8.4-1.2.8-.4.4-.6.7-.8 1.2-.1.4-.3 1-.3 2-.1 1.2-.1 1.6-.1 4.7s0 3.5.1 4.7c0 1 .2 1.6.3 2 .2.5.4.8.8 1.2.4.4.7.6 1.2.8.4.1 1 .3 2 .3 1.2.1 1.6.1 4.7.1s3.5 0 4.7-.1c1 0 1.6-.2 2-.3.5-.2.8-.4 1.2-.8.4-.4.6-.7.8-1.2.1-.4.3-1 .3-2 .1-1.2.1-1.6.1-4.7s0-3.5-.1-4.7c0-1-.2-1.6-.3-2a3 3 0 00-.8-1.2 3 3 0 00-1.2-.8c-.4-.1-1-.3-2-.3-1.2-.1-1.6-.1-4.7-.1zm0 3.4a4.4 4.4 0 110 8.8 4.4 4.4 0 010-8.8zm0 7.2a2.8 2.8 0 100-5.6 2.8 2.8 0 000 5.6zm5.6-7.4a1 1 0 11-2 0 1 1 0 012 0z"/></svg></a>
      </div>
    </div>
  </div>
  <div class="max-w-7xl mx-auto relative border-t border-white/10 mt-12 pt-6 text-xs text-slate-500 flex flex-col md:flex-row justify-between gap-2">
    <p>© {{ date('Y') }} Aziab Seafaris. All rights reserved.</p>
    <p>Sailing expeditions over 2 continents.</p>
  </div>
</footer>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({ duration: 900, once: true, easing: 'ease-out-cubic', offset: 60 });
  // Header scroll state
  const h = document.querySelector('.site-header');
  const onScroll = () => h.classList.toggle('scrolled', window.scrollY > 30);
  document.addEventListener('scroll', onScroll); onScroll();
  // Mobile menu
  document.getElementById('menuBtn')?.addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
  });
</script>
@stack('scripts')
</body>
</html>
