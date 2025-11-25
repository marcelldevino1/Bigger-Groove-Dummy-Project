@extends('layouts.app')
@section('title','Shop')

@section('content')
<section class="py-20">
  <div class="container mx-auto px-6 max-w-6xl">
    <div class="flex items-center justify-between mb-8">
      <h2 class="text-3xl font-bold">Shop</h2>
      <p class="text-gray-600">Essentials to enhance sharing experience</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      @if(isset($products) && $products->count())
        @foreach($products as $p)
          <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <img src="{{ $p->image }}" class="w-full h-48 object-cover" alt="{{ $p->name }}">
            <div class="p-5">
              <h3 class="font-semibold text-lg">{{ $p->name }}</h3>
              <p class="text-gray-600 mt-2">{{ Str::limit($p->description, 80) }}</p>
              <div class="mt-4 flex items-center justify-between">
                <span class="font-bold">Rp {{ number_format($p->price,0,',','.') }}</span>
                <a href="https://wa.me/628xxxxxxx?text=Saya%20ingin%20membeli%20{{ urlencode($p->name) }}" class="text-brandYellow font-semibold">Order</a>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <div class="col-span-3 text-center py-12 bg-white rounded-2xl shadow-sm">
          <p class="text-gray-600">No products yet. Seed some sample products first.</p>
        </div>
      @endif
    </div>
  </div>
</section>
@endsection
