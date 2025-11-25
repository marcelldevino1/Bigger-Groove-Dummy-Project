<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>@yield('title') - Bigger Grove</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-gray-800 bg-white">

{{-- NAV --}}
<header class="sticky top-0 z-40 bg-white/60 backdrop-blur-sm border-b">
  <div class="container mx-auto px-6 py-4 flex items-center justify-between">
    <a href="/" class="flex items-center gap-3">
      <!-- Logo BG: lingkaran penuh, lebih halus -->
      <div class="w-10 h-10 rounded-full bg-brandYellow flex items-center justify-center shadow-sm">
        <span class="font-bold text-gray-900 text-sm tracking-tight">BG</span>
      </div>
      <span class="font-semibold text-lg text-gray-900">Bigger Grove</span>
    </a>

      <nav class="hidden md:flex gap-8 text-gray-700">
        <a href="/" class="hover:text-brandYellow transition">Home</a>
        <a href="/shop" class="hover:text-brandYellow transition">Shop</a>
        <a href="/contact" class="hover:text-brandYellow transition">Contact</a>
        <a href="/privacy-policy" class="hover:text-brandYellow transition">Privacy</a>
      </nav>

      <div class="md:flex items-center gap-4 hidden">
        <a href="#newsletter" class="px-4 py-2 rounded-lg bg-brandYellow text-gray-900 font-medium shadow hover:scale-[1.02] transition">Subscribe</a>
      </div>

      {{-- mobile menu trigger (simple) --}}
      <div class="md:hidden">
        <button id="mobileBtn" class="p-2 rounded-md border">
          ☰
        </button>
      </div>
    </div>
  </header>
  {{-- MOBILE MENU --}}
<div id="mobileMenu"
     class="fixed inset-0 w-full h-full 
            bg-white/80 backdrop-blur-xl 
            z-50 opacity-0 pointer-events-none
            translate-y-[-20px]
            transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)]">

  <div class="p-6 flex justify-between items-center border-b">
    <span class="font-semibold text-lg">Menu</span>
    <button id="mobileClose" class="text-2xl">&times;</button>
  </div>

  <nav class="flex flex-col px-6 py-6 text-lg gap-6">
    <a href="/" class="hover:text-brandYellow transition">Home</a>
    <a href="/shop" class="hover:text-brandYellow transition">Shop</a>
    <a href="/contact" class="hover:text-brandYellow transition">Contact</a>
    <a href="/privacy-policy" class="hover:text-brandYellow transition">Privacy</a>

    <a href="#newsletter"
       class="mt-4 w-full text-center px-4 py-3 rounded-lg bg-brandYellow text-gray-900 font-medium shadow">
       Subscribe
    </a>
  </nav>
</div>



  <main>
    @yield('content')
  </main>

  <footer class="bg-gray-900 text-gray-300 mt-24">
    <div class="container mx-auto px-6 py-12 flex flex-col md:flex-row justify-between items-center gap-4">
      <div>
        <p class="font-semibold text-white">Bigger Grove</p>
        <p class="text-sm">Helping seniors share memories with care.</p>
      </div>

      <div class="text-sm">
        <p>© {{ date('Y') }} Bigger Grove. All rights reserved.</p>
      </div>
    </div>
  </footer>

  {{-- small script for fade-soft reveal --}}
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const els = document.querySelectorAll('.fade-soft');
      const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting) e.target.classList.add('show');
        });
      }, {threshold: 0.15});
      els.forEach(el => io.observe(el));
    });

      const mobileBtn = document.getElementById('mobileBtn');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileClose = document.getElementById('mobileClose');

  mobileBtn.addEventListener('click', () => {
    mobileMenu.style.transform = "translateY(0)";
  });

  mobileClose.addEventListener('click', () => {
    mobileMenu.style.transform = "translateY(-100%)";
  });
  </script>
</body>
</html>
