@extends('layouts.app')
@section('title','Contact')

@section('content')
<section class="py-20">
  <div class="container mx-auto px-6 max-w-2xl">
    <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
    <p class="text-gray-700 mb-8">Fill the form and our team will respond shortly.</p>

    @if(session('success'))
      <div class="bg-green-100 border border-green-200 text-green-800 px-4 py-3 rounded-lg mb-6">
        {{ session('success') }}
      </div>
    @endif

    <form action="/contact" method="POST" class="bg-white p-8 rounded-2xl shadow-sm space-y-4">
      @csrf
      <div>
        <label class="text-sm font-medium text-gray-700">Name</label>
        <input name="name" required class="mt-2 w-full px-4 py-3 rounded-lg border border-gray-200" />
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Email</label>
        <input name="email" type="email" required class="mt-2 w-full px-4 py-3 rounded-lg border border-gray-200" />
      </div>

      <div>
        <label class="text-sm font-medium text-gray-700">Message</label>
        <textarea name="message" rows="6" required class="mt-2 w-full px-4 py-3 rounded-lg border border-gray-200"></textarea>
      </div>

      <button class="w-full py-3 bg-brandYellow text-gray-900 rounded-lg font-semibold">Send Message</button>
    </form>
  </div>
</section>
@endsection
