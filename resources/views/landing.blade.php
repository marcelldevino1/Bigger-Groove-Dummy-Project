@extends('layouts.app')
@section('title','Home')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden">
  <div class="container mx-auto px-6 py-24 md:py-32 grid md:grid-cols-2 gap-12 items-center">
    <div class="space-y-6">
      <h1 class="text-4xl md:text-5xl font-extrabold leading-snug text-gray-900 fade-soft">
        A new way to share your photos — <span class="text-brandYellow">simple</span>, <span class="text-brandYellow">friendly</span>.
      </h1>

      <p class="text-lg text-gray-700 max-w-xl fade-soft" style="transition-delay:120ms">
        Bigger Grove helps seniors rediscover joy in sharing memories with easy tools,
        helpful community features, and a gentle, victory-minded experience.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 mt-4 fade-soft" style="transition-delay:200ms">
        <a href="/contact" class="inline-block px-6 py-3 rounded-lg bg-brandYellow text-gray-900 font-medium shadow hover:scale-[1.02] transition">Contact Support</a>
        <a href="#newsletter" class="inline-block px-6 py-3 rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-50 transition">Subscribe</a>
      </div>

      {{-- small stats --}}
      <div class="flex flex-wrap gap-6 mt-8 text-gray-700">
        <div class="flex flex-col">
          <span class="text-xl font-bold">3k+</span>
          <span class="text-sm">Projects</span>
        </div>
        <div class="flex flex-col">
          <span class="text-xl font-bold">200+</span>
          <span class="text-sm">Experts</span>
        </div>
        <div class="flex flex-col">
          <span class="text-xl font-bold">350+</span>
          <span class="text-sm">Happy customers</span>
        </div>
      </div>
    </div>

    {{-- visual --}}
    <div class="relative">
      <div class="rounded-2xl overflow-hidden shadow-xl fade-soft" style="transition-delay:160ms">
        {{-- use uploaded image as hero background --}}
        <img src="https://images.unsplash.com/photo-1610374792793-f016b77ca51a?q=80&w=1074&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="hero" class="w-full h-[420px] object-cover">
      </div>

      {{-- decorative card --}}
      <div class="absolute -bottom-8 left-6 md:left-12 bg-white rounded-xl shadow-lg px-6 py-4 w-72">
        <p class="text-sm text-gray-600">Made for seniors • Friendly UI</p>
        <p class="font-semibold text-gray-900 mt-2">Discover creative photo-sharing</p>
      </div>
    </div>
  </div>
</section>


{{-- FEATURES --}}
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-6 max-w-6xl">
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-6 shadow-sm fade-soft">
        <h3 class="font-semibold text-lg mb-2">Easy to use</h3>
        <p class="text-gray-600">Large fonts, clear actions, one-tap sharing.</p>
      </div>

      <div class="bg-white rounded-2xl p-6 shadow-sm fade-soft" style="transition-delay:80ms">
        <h3 class="font-semibold text-lg mb-2">Crowdsourced enhancements</h3>
        <p class="text-gray-600">Community-powered features that improve photo value.</p>
      </div>

      <div class="bg-white rounded-2xl p-6 shadow-sm fade-soft" style="transition-delay:160ms">
        <h3 class="font-semibold text-lg mb-2">Gentle experience</h3>
        <p class="text-gray-600">A warm, victory-minded interface for confident sharing.</p>
      </div>
    </div>
  </div>
</section>


{{-- SHOP PREVIEW --}}
<section class="py-20">
  <div class="container mx-auto px-6 max-w-6xl">
    <div class="flex items-center justify-between mb-8">
      <h3 class="text-2xl font-bold">Shop highlights</h3>
      <a href="/shop" class="text-brandYellow font-semibold">View all →</a>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      {{-- card 1 --}}
      <div class="bg-white rounded-2xl overflow-hidden shadow-sm">
        <img src="https://images.unsplash.com/photo-1545239351-1141bd82e8a6?w=800" class="w-full h-40 object-cover" alt="">
        <div class="p-6">
          <h4 class="font-semibold">Photo Print Pack</h4>
          <p class="text-gray-600 mt-2">High-quality prints to keep memories alive.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="font-bold">Rp 120.000</span>
            <a href="/shop" class="text-brandYellow font-semibold">Order →</a>
          </div>
        </div>
      </div>

      {{-- card 2 --}}
      <div class="bg-white rounded-2xl overflow-hidden shadow-sm">
        <img src="https://images.unsplash.com/photo-1576502200916-3808e07386a5?w=800" class="w-full h-40 object-cover" alt="">
        <div class="p-6">
          <h4 class="font-semibold">Memory Book</h4>
          <p class="text-gray-600 mt-2">Collect and display your best moments.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="font-bold">Rp 180.000</span>
            <a href="/shop" class="text-brandYellow font-semibold">Order →</a>
          </div>
        </div>
      </div>

      {{-- card 3 --}}
      <div class="bg-white rounded-2xl overflow-hidden shadow-sm">
        <img src="https://images.unsplash.com/photo-1473187983305-f615310e7daa?w=800" class="w-full h-40 object-cover" alt="">
        <div class="p-6">
          <h4 class="font-semibold">Senior Camera Strap</h4>
          <p class="text-gray-600 mt-2">Comfortable and easy-grip strap.</p>
          <div class="mt-4 flex items-center justify-between">
            <span class="font-bold">Rp 85.000</span>
            <a href="/shop" class="text-brandYellow font-semibold">Order →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- CONTACT CTA --}}
<section class="py-20 bg-brandYellow/10">
  <div class="container mx-auto px-6 text-center max-w-3xl">
    <h3 class="text-2xl font-bold text-gray-900 mb-3">Need Assistance?</h3>
    <p class="text-gray-700 mb-6">Our team is ready to help with support, feedback, or orders.</p>
    <a href="/contact" class="px-6 py-3 bg-brandYellow text-gray-900 rounded-lg font-semibold shadow hover:scale-[1.02] transition">Contact Us</a>
  </div>
</section>

{{-- NEWSLETTER --}}
<section id="newsletter" class="py-24">
  <div class="container mx-auto px-6 max-w-2xl text-center">
    <h3 class="text-2xl font-bold mb-3">Join Our Newsletter</h3>
    <p class="text-gray-700 mb-6">Tips, updates, and exclusive offers for our community.</p>

    <form action="/subscribe" method="POST" class="flex flex-col md:flex-row gap-4 justify-center">
      @csrf
      <input name="email" type="email" required placeholder="Enter your email" class="px-4 py-3 rounded-lg border border-gray-200 w-full md:w-auto min-w-[300px]" />
      <button class="px-6 py-3 bg-brandYellow text-gray-900 rounded-lg font-semibold">Subscribe</button>
    </form>
  </div>
</section>

@endsection
