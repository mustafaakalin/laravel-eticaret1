<!-- Extend the base layout -->
@extends('app')

<!-- Main container -->
<div class="container mx-auto p-4 md:p-6 lg:p-8">
    <!-- Header -->
    <h1 class="text-3xl font-bold underline mb-4">
        {{ config('app.name') }}
    </h1>

    <!-- Product grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($products as $product)
        <!-- Product card 1 -->
        <div class="bg-white rounded shadow-md p-4">
            <img src="{{ asset('storage/' . $product->photo) }}" alt="Product 1" class="w-full h-48 object-cover mb-4">
            <h2 class="text-lg font-bold mb-2">{{ $product->name }}</h2>
            <p class="text-gray-600">{{ \Illuminate\Support\Str::limit($product->description, 20, '...') }}</p>
            <p class="text-lg font-bold text-red-600 mb-4">₺ {{ $product->price }}</p>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Satın Al</button>
        </div>
        @endforeach
        
        <!-- Add more product cards as needed -->
    </div>
</div>
