<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>@yield('title','Admin') — Aziab Seafaris</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<script>
  tailwind.config = { theme: { extend: { colors: { navy:{50:'#f1f5f9',800:'#0f2138',900:'#0a1726'}, sea:{300:'#7dd3fc',500:'#0ea5e9',600:'#0284c7'}, sand:{50:'#fbf8f3'} }, fontFamily: { sans:['Poppins','ui-sans-serif','system-ui'] } } } }
</script>
</head>
<body class="bg-sand-50 text-navy-900 min-h-screen font-sans">
<header class="bg-navy-900 text-white">
  <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <div class="text-lg font-bold tracking-widest">AZIAB <span class="text-sea-300">ADMIN</span></div>
    </div>
    <div class="flex items-center gap-6 text-sm">
      @php $me = auth()->user(); @endphp
      <a href="{{ route('admin.schedules.index') }}" class="hover:text-sea-300 transition">Schedule</a>
      <a href="{{ route('admin.users.index') }}" class="hover:text-sea-300 transition">Team</a>
      <a href="/" target="_blank" class="text-white/60 hover:text-white">View site ↗</a>
      @if($me && $me->isSuperAdmin())
        <form method="POST" action="{{ route('admin.site.toggle') }}">
          @csrf
          @if(\App\Models\Setting::isSiteClosed())
            <button type="submit" class="bg-emerald-500 hover:bg-emerald-600 text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition">Open website</button>
          @else
            <button type="submit" onclick="return confirm('Close the public website?')" class="bg-rose-500 hover:bg-rose-600 text-white px-3 py-1.5 rounded-lg text-xs font-semibold transition">Close website</button>
          @endif
        </form>
      @endif
      @if($me)
        <span class="text-white/40 text-xs">{{ $me->name }} · {{ $me->isSuperAdmin() ? 'Super Admin' : 'Admin' }}</span>
      @endif
      <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit" class="text-white/60 hover:text-rose-300 transition">Logout</button>
      </form>
    </div>
  </div>
</header>

@if(session('status'))
  <div class="max-w-7xl mx-auto px-6 mt-4">
    <div class="bg-emerald-500/10 border border-emerald-500/30 text-emerald-700 px-4 py-3 rounded-lg text-sm">{{ session('status') }}</div>
  </div>
@endif

@if($errors->any())
  <div class="max-w-7xl mx-auto px-6 mt-4">
    <div class="bg-rose-500/10 border border-rose-500/30 text-rose-700 px-4 py-3 rounded-lg text-sm">
      <ul class="list-disc list-inside">@foreach($errors->all() as $err)<li>{{ $err }}</li>@endforeach</ul>
    </div>
  </div>
@endif

<main class="max-w-7xl mx-auto px-6 py-8">
  @yield('content')
</main>
</body>
</html>
