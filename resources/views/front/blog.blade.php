@extends('components.main')
@section('content')
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0px 8px 32px rgba(0, 0, 0, 0.1);
        }
    </style>

<div class="min-h-screen flex flex-col items-center text-gray-800">

    <header class="w-full text-3xl bg-sky-700 font-bold text-center py-6 bg-opacity-70 bg-cover bg-center shadow-lg" style="background-image: url('https://via.placeholder.com/1600x400');">
        Blog 
        
    </header>
    
    <div class="max-w-full px-12 mx-auto p-6">
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Blog Post -->
            <div class="md:col-span-2 relative">
                <div class="glass p-6 mb-2">
                    <img src="{{asset('asset/img/product2.jpg')}}" alt="RO Purifier" class="rounded-lg shadow-lg h-96 w-full">
                    <h2 class="text-2xl font-bold mt-4 text-gray-700">Why RO Purifiers are Essential for Clean Drinking Water</h2>
                    <p class="mt-2 text-gray-600">
                        Water contamination is a growing concern. **RO Purifiers** ensure your drinking water is free from harmful chemicals and bacteria.  
                        **Key Benefits:**
                        - Removes **impurities & toxins**  
                        - Enhances **taste & odor**  
                        - Protects from **waterborne diseases**  
                    </p>
                    <a href="#" class="inline-block mt-4 px-5 py-2 bg-gray-300 text-blue-900 font-semibold rounded-lg hover:bg-gray-400 transition">Read More</a>
                </div>
                <div class="glass p-6 pt-4">
                    <img src="{{asset('asset/img/product1.jpg')}}" alt="CCTV Camera" class="rounded-lg shadow-lg h-96 w-full">
                    <h2 class="text-2xl font-bold mt-4 text-gray-700">How CCTV Cameras Keep Your Home & Business Safe</h2>
                    <p class="mt-2 text-gray-600">
                        With rising security threats, **CCTV Cameras** provide peace of mind by monitoring your property 24/7.  
                        **Key Benefits:**
                        - **Deters crime & theft**  
                        - Provides **remote access monitoring**  
                        - Enhances **workplace safety**  
                    </p>
                    <a href="#" class="inline-block mt-4 px-5 py-2 bg-gray-300 text-blue-900 font-semibold rounded-lg hover:bg-gray-400 transition">Read More</a>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div>
                <div class="mb-4">
                    <input type="text" placeholder="Keyword" class="w-full p-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
                </div>
                <h2 class="text-xl font-bold mb-3">Categories</h2>
                <ul class="space-y-2">
                    <li class="bg-sky-200 p-2 rounded-lg hover:bg-sky-300 transition">
                        <a href="#" class="text-gray-700">&rarr; Web Design</a>
                    </li>
                    <li class="bg-sky-200 p-2 rounded-lg hover:bg-sky-300 transition">
                        <a href="#" class="text-gray-700">&rarr; Web Development</a>
                    </li>
                    <li class="bg-sky-200 p-2 rounded-lg hover:bg-sky-300 transition">
                        <a href="#" class="text-gray-700">&rarr; Keyword Research</a>
                    </li>
                </ul>
                
                <!-- Recent Posts -->
                <h2 class="text-xl font-bold mt-6 mb-3">Recent Post</h2>
                <div class="space-y-2">
                    <div class="flex bg-sky-200 p-2 rounded-lg">
sk              <img src="{{asset('asset/img/product2.jpg')}}" alt="Recent Post" class="rounded-full h-8 w-8">
                        <p class="ml-2 text-gray-700">Lorem ipsum dolor sit amet adipis elit</p>
                    </div>
                    <div class="flex bg-sky-200 p-2 rounded-lg">
sk              <img src="{{asset('asset/img/product2.jpg')}}" alt="Recent Post" class="rounded-full h-8 w-8">
                        <p class="ml-2 text-gray-700">Lorem ipsum dolor sit amet adipis elit</p>
                    </div>
                    <div class="flex bg-sky-200 p-2 rounded-lg">
sk              <img src="{{asset('asset/img/product2.jpg')}}" alt="Recent Post" class="rounded-full h-8 w-8">
                        <p class="ml-2 text-gray-700">Lorem ipsum dolor sit amet adipis elit</p>
                    </div>
                    <div class="flex bg-sky-200 p-2 rounded-lg">
sk              <img src="{{asset('asset/img/product2.jpg')}}" alt="Recent Post" class="rounded-full h-8 w-8">
                        <p class="ml-2 text-gray-700">Lorem ipsum dolor sit amet adipis elit</p>
                    </div>
                    <div class="flex bg-sky-200 p-2 rounded-lg">
sk              <img src="{{asset('asset/img/product2.jpg')}}" alt="Recent Post" class="rounded-full h-8 w-8">
                        <p class="ml-2 text-gray-700">Lorem ipsum dolor sit amet adipis elit</p>
                    </div>
                    <div class="flex bg-sky-200 p-2 rounded-lg">
sk              <img src="{{asset('asset/img/product2.jpg')}}" alt="Recent Post" class="rounded-full h-8 w-8">
                        <p class="ml-2 text-gray-700">Lorem ipsum dolor sit amet adipis elit</p>
                    </div>

                </div>

                
                <!-- Featured Image -->
                <img src="https://via.placeholder.com/800x400" alt="Featured Post" class="rounded-lg w-full mt-6">
                
                <!-- Tag Cloud -->
                <h2 class="text-xl font-bold mt-6 mb-3">Tag Cloud</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-sky-300 px-3 py-1 rounded-lg">Design</span>
                    <span class="bg-sky-300 px-3 py-1 rounded-lg">Development</span>
                    <span class="bg-sky-300 px-3 py-1 rounded-lg">Marketing</span>
                    <span class="bg-sky-300 px-3 py-1 rounded-lg">SEO</span>
                    <span class="bg-sky-300 px-3 py-1 rounded-lg">Writing</span>
                    <span class="bg-sky-300 px-3 py-1 rounded-lg">Consulting</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
