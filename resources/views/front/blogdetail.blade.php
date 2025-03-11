@extends('components.main')
@section('content')
    <header class="w-full text-3xl bg-sky-700 font-bold text-center py-6 bg-opacity-70 bg-cover bg-center shadow-lg" style="background-image: url('https://via.placeholder.com/1600x400');">
        Blog Details
    </header>
    
    <div class="max-w-7xl mx-auto p-8 grid md:grid-cols-3 gap-8">
        <!-- Main Content -->
        <div class="md:col-span-2 bg-white shadow-lg rounded-lg p-6">
            <img src="{{asset('asset/img/product1.jpg')}}" alt="Blog Image" class="rounded-lg w-full h-80 object-cover">
            <h1 class="text-3xl font-bold mt-4 text-gray-900">Diam dolor est labore duo ipsum clita sed et lorem tempor duo</h1>
            <p class="text-gray-700 mt-4 leading-relaxed">Sed vidignissim labore et eos. Et ermod ipsum at dolor sit magna lorem. Namumy vero sit kasd sea justo elitr et, amet sit amet ut dolor lorem et diam dolor eos.</p>
            
            <h2 class="text-2xl font-bold mt-6 text-gray-800">3 Comments</h2>
            <div class="mt-4 space-y-4">
                @for ($i = 0; $i < 3; $i++)
                    <div class="flex gap-4 bg-gray-100 p-4 rounded-lg">
                        <img src="{{asset('asset/img/product2.jpg')}}" class="rounded-full h-12 w-12 object-cover" alt="User">
                        <div>
                            <p class="font-semibold text-gray-900">John Doe <span class="text-gray-500 text-sm">@5th Mar 2024</span></p>
                            <p class="text-gray-700">Diam dolor est labore duo sit et. Et erat ipsum lorem et sit sed.</p>
                        </div>
                    </div>
                @endfor
            </div>
            
            <h2 class="text-2xl font-bold mt-6 text-gray-800">Leave a Comment</h2>
            <form class="bg-gray-50 p-6 rounded-lg mt-4 space-y-4 shadow">
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" placeholder="Your Name" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-300">
                    <input type="email" placeholder="Your Email" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-300">
                </div>
                <input type="text" placeholder="Website" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-300">
                <textarea placeholder="Comment" class="w-full p-3 border rounded-lg h-28 focus:ring-2 focus:ring-blue-300"></textarea>
                <button class="bg-blue-600 text-white py-3 px-6 rounded-lg w-full hover:bg-blue-700 transition">Submit Comment</button>
            </form>
        </div>
        
        <!-- Sidebar -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <input type="text" placeholder="Search..." class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-300 mb-6">
            
            <h2 class="text-xl font-bold mb-4 text-gray-800">Categories</h2>
            <ul class="space-y-3">
                <li><a href="#" class="block bg-blue-100 p-3 rounded-lg text-blue-600 hover:bg-blue-200 transition">Web Design</a></li>
                <li><a href="#" class="block bg-blue-100 p-3 rounded-lg text-blue-600 hover:bg-blue-200 transition">Web Development</a></li>
                <li><a href="#" class="block bg-blue-100 p-3 rounded-lg text-blue-600 hover:bg-blue-200 transition">Keyword Research</a></li>
                <li><a href="#" class="block bg-blue-100 p-3 rounded-lg text-blue-600 hover:bg-blue-200 transition">Email Marketing</a></li>
            </ul>
            
            <h2 class="text-xl font-bold mt-6 mb-4 text-gray-800">Recent Posts</h2>
            <div class="space-y-3">
                @for ($i = 0; $i < 2; $i++)
                    <div class="flex gap-4 bg-gray-100 p-3 rounded-lg">
                        <img src="https://via.placeholder.com/60" alt="Recent Post" class="rounded">
                        <p class="text-blue-600">Lorem ipsum dolor sit amet adipis elit</p>
                    </div>
                @endfor
            </div>
            
            <h2 class="text-xl font-bold mt-6 mb-4 text-gray-800">Tag Cloud</h2>
            <div class="flex flex-wrap gap-2">
                @foreach (["Design", "Development", "Marketing", "SEO"] as $tag)
                    <span class="bg-blue-200 px-3 py-1 rounded-lg text-gray-800">{{ $tag }}</span>
                @endforeach
            </div>
            
            <h2 class="text-xl font-bold mt-6 mb-4 text-gray-800">Subscribe</h2>
            <textarea class="w-full p-3 border rounded-lg h-24 focus:ring-2 focus:ring-blue-300"></textarea>
            <button class="bg-blue-600 text-white py-3 px-6 rounded-lg w-full mt-3 hover:bg-blue-700 transition">Subscribe</button>
        </div>
    </div>
@endsection
