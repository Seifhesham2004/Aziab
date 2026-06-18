<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Admin Login — Aziab Seafaris</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<script>
  tailwind.config = { theme: { extend: { colors: { navy:{800:'#0f2138',900:'#0a1726'}, sea:{300:'#7dd3fc',500:'#0ea5e9',600:'#0284c7'} }, fontFamily: { sans:['Poppins','ui-sans-serif','system-ui'] } } } }
</script>
</head>
<body class="min-h-screen flex items-center justify-center bg-navy-900 text-white font-sans px-6"
      style="background-image: radial-gradient(circle at 30% 20%, rgba(14,165,233,0.25), transparent 50%), radial-gradient(circle at 70% 80%, rgba(125,211,252,0.18), transparent 55%);">
  <div class="w-full max-w-md">
    <div class="text-center mb-8">
      <p class="text-sea-300 tracking-[0.4em] text-xs mb-3">AZIAB SEAFARIS</p>
      <h1 class="text-3xl font-semibold">Admin sign in</h1>
    </div>
    <div class="bg-white/5 backdrop-blur border border-white/10 rounded-2xl p-8 shadow-2xl">
      <form method="POST" action="{{ route('admin.login.attempt') }}" class="space-y-5">
        @csrf
        <div>
          <label class="block text-xs uppercase tracking-wider text-white/70 mb-2">Phone</label>
          <input type="tel" name="phone" value="{{ old('phone') }}" required autofocus inputmode="tel"
                 class="w-full bg-white/5 border border-white/15 rounded-lg px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:border-sea-500 focus:ring-2 focus:ring-sea-500/30">
        </div>
        <div>
          <label class="block text-xs uppercase tracking-wider text-white/70 mb-2">Password</label>
          <input type="password" name="password" required
                 class="w-full bg-white/5 border border-white/15 rounded-lg px-4 py-3 text-white placeholder-white/40 focus:outline-none focus:border-sea-500 focus:ring-2 focus:ring-sea-500/30">
        </div>
        <label class="flex items-center gap-2 text-sm text-white/70">
          <input type="checkbox" name="remember" class="rounded bg-white/10 border-white/20 text-sea-500 focus:ring-sea-500/30">
          Remember me
        </label>

        @if($errors->any())
          <div class="text-sm text-rose-300 bg-rose-500/10 border border-rose-500/30 rounded-lg px-4 py-3">
            {{ $errors->first() }}
          </div>
        @endif

        <button type="submit" class="w-full bg-sea-500 hover:bg-sea-600 transition rounded-lg py-3 font-semibold">Sign in</button>
      </form>
    </div>
    <p class="text-center text-white/40 text-xs mt-6"><a href="/" class="hover:text-white">← Back to site</a></p>
  </div>
</body>
</html>
