@extends('components.main')

@section('content')
    <!-- Carousel Container -->
    <div class="relative w-full h-[90vh] ">
        <div class="carousel-wrapper relative w-full h-full flex overflow-hidden">
            <div class="carousel flex w-full h-full transition-transform duration-700 ease-in-out">
                <!-- Slides -->
                <div class="slide w-full h-full shrink-0 flex justify-center items-center relative">
                    <img src="https://5.imimg.com/data5/OY/FI/LA/SELLER-28111010/cctv-camera-secuirty-service.jpg"
                        class="absolute w-full h-full object-cover" alt="Slide 1">
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="relative z-10 text-center text-white">
                        <h5 class="text-sm uppercase tracking-widest">Best Security Services</h5>
                        <h1 class="text-5xl md:text-6xl font-bold mt-2">Safe & Secure Home For Your Family</h1>
                        <div class="mt-6 flex gap-4 justify-center">
                            <a href="#"
                                class="bg-sky-500 hover:bg-sky-700 text-white px-6 py-3 rounded-lg transition-all duration-300">Get
                                Quote</a>
                            <a href="#"
                                class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg transition-all duration-300">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="slide w-full h-full shrink-0 flex justify-center items-center relative">
                    <img src="https://media.istockphoto.com/id/1192103258/photo/close-up-of-surveillance-camera-installation-male-hand-holds-cctv-camera.jpg?s=612x612&w=0&k=20&c=zOBgLFkcX9Wddbo1gHEOg2HCKiWc05PyqJ9xBjM3MOE="
                        class="absolute w-full h-full object-cover" alt="Slide 2">
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="relative z-10 text-center text-white">
                        <h5 class="text-sm uppercase tracking-widest">Advanced Protection</h5>
                        <h1 class="text-5xl md:text-6xl font-bold mt-2">Your Safety is Our Priority</h1>
                        <div class="mt-6 flex gap-4 justify-center">
                            <a href="#"
                                class="bg-sky-500 hover:bg-sky-700 text-white px-6 py-3 rounded-lg transition-all duration-300">Get
                                Quote</a>
                            <a href="#"
                                class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg transition-all duration-300">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
                <div class="slide w-full h-full shrink-0 flex justify-center items-center relative">
                    <img src="https://5.imimg.com/data5/UV/EP/FX/ANDROID-84917629/product-jpeg.jpg"
                        class="absolute w-full h-full object-cover" alt="Slide 3">
                    <div class="absolute inset-0 bg-black/50"></div>
                    <div class="relative z-10 text-center text-white">
                        <h5 class="text-sm uppercase tracking-widest">Smart Monitoring</h5>
                        <h1 class="text-5xl md:text-6xl font-bold mt-2">Stay Safe with Smart Solutions</h1>
                        <div class="mt-6 flex gap-4 justify-center">
                            <a href="#"
                                class="bg-sky-500 hover:bg-sky-700 text-white px-6 py-3 rounded-lg transition-all duration-300">Get
                                Quote</a>
                            <a href="#"
                                class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-3 rounded-lg transition-all duration-300">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        <button
            class="prev-btn absolute top-1/2 left-4 transform -translate-y-1/2 bg-white/40 text-white p-3 rounded-full hover:bg-white/70 transition-all duration-300">
            ❮
        </button>
        <button
            class="next-btn absolute top-1/2 right-4 transform -translate-y-1/2 bg-white/40 text-white p-3 rounded-full hover:bg-white/70 transition-all duration-300">
            ❯
        </button>
    </div>


    {{-- About us --}}

    <section class="max-w-6xl mx-auto px-4 py-8 lg:flex lg:items-center lg:gap-12">
        <!-- Image Section -->
        <div class="lg:w-1/2">
            <img src="https://5.imimg.com/data5/SELLER/Default/2021/7/MB/UO/UQ/101395556/hd-cctv-cameras-500x500.jpg"
                alt="CCTV Camera" class="rounded-lg shadow-lg">
        </div>

        <!-- Content Section -->
        <div class="lg:w-1/2 mt-8 lg:mt-0 bg-white/30 backdrop-blur-md rounded-2xl p-8 shadow-lg">
            <h3 class="text-lg text-blue-600 font-semibold uppercase tracking-wider">About Us</h3>
            <h2 class="text-4xl font-bold text-gray-900 mt-2">We Provide Quality CCTV <br> Systems & Services</h2>
            <p class="italic text-gray-700 mt-3">
                "Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore."
            </p>
            <p class="text-gray-700 mt-4">
                We specialize in modern surveillance solutions. From installation to maintenance, we ensure top-tier
                security and peace of mind for our customers.
            </p>

            <!-- Highlights -->
            <div class="mt-6 flex flex-wrap gap-4">
                <div class="flex items-center bg-white/30 backdrop-blur-md p-4 rounded-lg shadow-md w-56">
                    <div class="bg-blue-500 text-white p-3 rounded-full">
                        ⭐
                    </div>
                    <div class="ml-3">
                        <p class="text-lg font-semibold">15 Years Experience</p>
                    </div>
                </div>

                <div class="flex items-center bg-white/30 backdrop-blur-md p-4 rounded-lg shadow-md w-56">
                    <div class="bg-red-500 text-white p-3 rounded-full">
                        🏆
                    </div>
                    <div class="ml-3">
                        <p class="text-lg font-semibold">Award Winning Service</p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="mt-8">
                <a href="#"
                    class="px-6 py-3 bg-sky-600 text-white font-semibold rounded-lg shadow-md hover:bg-sky-700">
                    Get a Free Quote
                </a>
            </div>
        </div>
    </section>

    {{-- R_O --}}

    <section class="relative w-full bg-sky-100 py-16 px-6 md:px-12 lg:px-20 flex items-center">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
            <!-- Left Content -->
            <div class="space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold text-blue-900 leading-tight">
                    Pure & Fresh Water, Anytime
                </h1>
                <p class="text-lg text-gray-700">Experience the best water purification technology for your home and family.
                </p>
                <div class="flex space-x-4">
                    <a href="#"
                        class="bg-sky-600 text-white p-2 md:px-6 md:py-3 rounded-lg md:text-lg font-medium hover:bg-sky-700">Get
                        Started</a>
                    <a href="#"
                        class="border border-sky-600 text-sky-600 p-2 md:px-6 md:py-3 rounded-lg md:text-lg font-medium hover:bg-sky-600 hover:text-white">Learn
                        More</a>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative flex justify-center">
                <img src="data:image/jpeg;base64,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"
                    alt="Water Purifier" class="w-full max-w-sm drop-shadow-lg">
            </div>
        </div>
    </section>

    {{-- registration form  --}}

    <div class=" flex justify-center items-center min-h-auto">

        <div class="text-center">
            <h1 class="text-3xl font-extrabold text-sky-700 mb-6">Register Your RO Service Request</h1>
            <button onclick="openModal()"
                class="md:px-6 px-2 py-3 bg-gradient-to-r from-sky-500 to-sky-800 text-white  shadow-md hover:scale-105 transition">
                Register for RO Service
            </button>
        </div>

        <!-- Modal -->
        <div id="modal"
            class="hidden fixed inset-0 flex justify-center items-center z-50 bg-black bg-opacity-60 backdrop-blur-sm">
            <div
                class="relative bg-white/90 p-6 rounded-2xl shadow-2xl max-w-lg w-full h-[500px] overflow-y-auto transition-transform transform scale-95">

                <!-- Close Button -->
                <button onclick="closeModal()" class="absolute top-4 right-4 text-sky-600 hover:text-red-500 text-3xl">
                    <i class="ri-close-circle-fill"></i>
                </button>

                <h2 class="md:text-2xl text-lg font-bold mb-4 text-center text-sky-700">Register for RO Service</h2>

                <!-- Form -->
                <form class="space-y-4">
                    <div>
                        <label class="block font-semibold text-gray-700">Select Your Service Type</label>
                        <select class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300">
                            <option>-None-</option>
                            <option>Installation</option>
                            <option>Repair</option>
                            <option>Maintenance</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">What Service Required</label>
                        <input type="text"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                            placeholder="Describe the service required">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Appoint Date</label>
                        <input type="date"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block font-semibold text-gray-700">First Name</label>
                            <input type="text"
                                class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                                placeholder="John">
                        </div>
                        <div>
                            <label class="block font-semibold text-gray-700">Last Name</label>
                            <input type="text"
                                class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                                placeholder="Doe">
                        </div>
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Email</label>
                        <input type="email"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                            placeholder="your@email.com">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Mobile</label>
                        <input type="tel"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                            placeholder="Your Mobile Number">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Your Address</label>
                        <textarea class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300" rows="2"
                            placeholder="Enter your complete address"></textarea>
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Your City Name</label>
                        <input type="text"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                            placeholder="City Name">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">State Name</label>
                        <input type="text"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                            placeholder="e.g., Maharashtra, Uttar Pradesh">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Pin Code</label>
                        <input type="text"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                            placeholder="Enter Pin Code">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Purchased Product Name</label>
                        <input type="text"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300"
                            placeholder="Product Name">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Product Purchased From</label>
                        <select class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300">
                            <option>-None-</option>
                            <option>Amazon</option>
                            <option>Flipkart</option>
                            <option>Offline Store</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Date of Purchase</label>
                        <input type="date"
                            class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300">
                    </div>

                    <div>
                        <label class="block font-semibold text-gray-700">Explain Your Problem</label>
                        <textarea class="w-full p-3 border rounded-xl bg-white shadow-sm focus:ring-2 focus:ring-sky-300" rows="3"
                            placeholder="Describe your issue..."></textarea>
                    </div>

                    <button
                        class="w-full bg-gradient-to-r from-green-500 to-emerald-600 text-white py-3 rounded-full shadow-lg hover:scale-105 transition">
                        Submit Request
                    </button>
                </form>

            </div>
        </div>

        <script>
            function openModal() {
                const modal = document.getElementById('modal');
                modal.classList.remove('hidden');
                modal.classList.add('flex', 'animate-fadeIn');
            }

            function closeModal() {
                const modal = document.getElementById('modal');
                modal.classList.add('hidden');
                modal.classList.remove('animate-fadeIn');
            }
        </script>

    </div>





    {{-- products  CCTV --}}
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8 pt-12">Best Selling CCTV Cam</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Product Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-4 transition hover:scale-45">
                <div class="relative">
                    <img src="{{ asset('asset/img/product1.jpg') }}" alt="Aqua Grand Plus"
                        class="w-full h-80 rounded-lg">
                    <span class="absolute top-2 left-2 bg-sky-600 text-white text-xs px-3 py-1 rounded-full">SALE</span>
                </div>
                <div class="text-center mt-4">
                    <h3 class="text-lg font-bold">Aqua Grand Plus</h3>
                    <p class="text-gray-500 line-through text-sm">₹14,500.00</p>
                    <p class="text-red-600 font-semibold text-xl">₹3,990.00</p>
                    <button class="mt-3 bg-sky-600 text-white py-2 px-4 rounded-lg hover:bg-sky-700 transition">CALL
                        NOW!</button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-4 transition hover:scale-45">
                <div class="relative">
                    <img src="{{ asset('asset/img/product1.jpg') }}" alt="Aquafresh Dolphin RO"
                        class="w-full h-80 rounded-lg">
                    <span class="absolute top-2 left-2 bg-sky-600 text-white text-xs px-3 py-1 rounded-full">SALE</span>
                </div>
                <div class="text-center mt-4">
                    <h3 class="text-lg font-bold">Aquafresh Dolphin RO</h3>
                    <p class="text-gray-500 line-through text-sm">₹12,500.00</p>
                    <p class="text-red-600 font-semibold text-xl">₹4,390.00</p>
                    <button class="mt-3 bg-sky-600 text-white py-2 px-4 rounded-lg hover:bg-sky-700 transition">CALL
                        NOW!</button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-4 transition hover:scale-45">
                <div class="relative">
                    <img src="{{ asset('asset/img/product1.jpg') }}" alt="Aquafresh Nexus Swift"
                        class="w-full h-80 rounded-lg">
                    <span class="absolute top-2 left-2 bg-sky-600 text-white text-xs px-3 py-1 rounded-full">SALE</span>
                </div>
                <div class="text-center mt-4">
                    <h3 class="text-lg font-bold">Aquafresh Nexus Swift 15 Ltr RO</h3>
                    <p class="text-gray-500 line-through text-sm">₹12,500.00</p>
                    <p class="text-red-600 font-semibold text-xl">₹3,990.00</p>
                    <button class="mt-3 bg-sky-600 text-white py-2 px-4 rounded-lg hover:bg-sky-700 transition">CALL
                        NOW!</button>
                </div>
            </div>

        </div>
    </div>

    {{-- products --}}
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-center mb-8 pt-12">Best Selling RO Water Purifiers</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Product Card 1 -->
            <div class="bg-white rounded-lg shadow-lg p-4 transition hover:scale-105">
                <div class="relative">
                    <img src="{{ asset('asset/img/product2.jpg') }}" alt="Aqua Grand Plus"
                        class="w-full h-80 rounded-lg">
                    <span class="absolute top-2 left-2 bg-sky-600 text-white text-xs px-3 py-1 rounded-full">SALE</span>
                </div>
                <div class="text-center mt-4">
                    <h3 class="text-lg font-bold">Aqua Grand Plus</h3>
                    <p class="text-gray-500 line-through text-sm">₹14,500.00</p>
                    <p class="text-red-600 font-semibold text-xl">₹3,990.00</p>
                    <button class="mt-3 bg-sky-600 text-white py-2 px-4 rounded-lg hover:bg-sky-700 transition">CALL
                        NOW!</button>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white rounded-lg shadow-lg p-4 transition hover:scale-105">
                <div class="relative">
                    <img src="{{ asset('asset/img/product2.jpg') }}" alt="Aquafresh Dolphin RO"
                        class="w-full h-80 rounded-lg">
                    <span class="absolute top-2 left-2 bg-sky-600 text-white text-xs px-3 py-1 rounded-full">SALE</span>
                </div>
                <div class="text-center mt-4">
                    <h3 class="text-lg font-bold">Aquafresh Dolphin RO</h3>
                    <p class="text-gray-500 line-through text-sm">₹12,500.00</p>
                    <p class="text-red-600 font-semibold text-xl">₹4,390.00</p>
                    <button class="mt-3 bg-sky-600 text-white py-2 px-4 rounded-lg hover:bg-sky-700 transition">CALL
                        NOW!</button>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white rounded-lg shadow-lg p-4 transition hover:scale-105">
                <div class="relative">
                    <img src="{{ asset('asset/img/product2.jpg') }}" alt="Aquafresh Nexus Swift"
                        class="w-full h-80 rounded-lg">
                    <span class="absolute top-2 left-2 bg-sky-600 text-white text-xs px-3 py-1 rounded-full">SALE</span>
                </div>
                <div class="text-center mt-4">
                    <h3 class="text-lg font-bold">Aquafresh Nexus Swift 15 Ltr RO</h3>
                    <p class="text-gray-500 line-through text-sm">₹12,500.00</p>
                    <p class="text-red-600 font-semibold text-xl">₹3,990.00</p>
                    <button class="mt-3 bg-sky-600 text-white py-2 px-4 rounded-lg hover:bg-sky-700 transition">CALL
                        NOW!</button>
                </div>
            </div>

        </div>
    </div>

    {{-- testimonial --}}

    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>

    <div class="bg-gradient-to-br from-blue-50 to-sky-100 min-h-100 py-24 flex justify-center items-center p-6">

        <div class="max-w-5xl w-full text-center">
            <h2 class="text-3xl font-bold text-sky-700 mb-6">What Our Customers Say</h2>

            <!-- Reviews Container -->
            <div class="relative w-full overflow-hidden">
                <div class="flex gap-6 overflow-x-auto snap-x snap-mandatory pb-4 scrollbar-hide" id="testimonial-slider"
                    onmouseover="pauseAutoScroll()" onmouseleave="resumeAutoScroll()">

                    <!-- Repeat cards for smooth infinite scrolling -->
                    <div class="flex space-x-6">

                        <!-- Review Card 1 -->
                        <div class="bg-white p-6 rounded-xl shadow-lg w-[320px] flex-shrink-0 snap-start">
                            <div class="flex items-center gap-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
                                    class="w-12 h-12 rounded-full border-2 border-sky-500">
                                <div>
                                    <h3 class="font-semibold text-gray-800">John Doe</h3>
                                    <p class="text-sm text-gray-500">Verified Customer</p>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600">"The service was outstanding! Quick response and professional
                                work. Highly recommend!"</p>
                            <div class="flex mt-3 text-yellow-400">
                                ★★★★★
                            </div>
                        </div>

                        <!-- Review Card 2 -->
                        <div class="bg-white p-6 rounded-xl shadow-lg w-[320px] flex-shrink-0 snap-start">
                            <div class="flex items-center gap-3">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="User"
                                    class="w-12 h-12 rounded-full border-2 border-sky-500">
                                <div>
                                    <h3 class="font-semibold text-gray-800">Emily Carter</h3>
                                    <p class="text-sm text-gray-500">Happy Client</p>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600">"Amazing customer support and very affordable pricing. Will use
                                again for sure!"</p>
                            <div class="flex mt-3 text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                        {{-- review 4 --}}
                        <div class="bg-white p-6 rounded-xl shadow-lg w-[320px] flex-shrink-0 snap-start">
                            <div class="flex items-center gap-3">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
                                    class="w-12 h-12 rounded-full border-2 border-sky-500">
                                <div>
                                    <h3 class="font-semibold text-gray-800">John Doe</h3>
                                    <p class="text-sm text-gray-500">Verified Customer</p>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600">"The service was outstanding! Quick response and professional
                                work. Highly recommend!"</p>
                            <div class="flex mt-3 text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                        <!-- Review Card 3 -->
                        <div class="bg-white p-6 rounded-xl shadow-lg w-[320px] flex-shrink-0 snap-start">
                            <div class="flex items-center gap-3">
                                <img src="https://randomuser.me/api/portraits/men/55.jpg" alt="User"
                                    class="w-12 h-12 rounded-full border-2 border-sky-500">
                                <div>
                                    <h3 class="font-semibold text-gray-800">Michael Lee</h3>
                                    <p class="text-sm text-gray-500">Frequent Customer</p>
                                </div>
                            </div>
                            <p class="mt-3 text-gray-600">"Super easy process and great quality service. Couldn’t be
                                happier!"</p>
                            <div class="flex mt-3 text-yellow-400">
                                ★★★★★
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const slider = document.getElementById('testimonial-slider');
                let autoScroll;
        
                function startAutoScroll() {
                    autoScroll = setInterval(() => {
                        if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 1) {
                            // Jump back to start without smooth effect to create seamless loop
                            slider.scrollTo({ left: 0, behavior: 'instant' });
                        } else {
                            // Move forward smoothly
                            slider.scrollBy({ left: 330, behavior: 'smooth' });
                        }
                    }, 3000); // Change slide every 3 seconds
                }
        
                function pauseAutoScroll() {
                    clearInterval(autoScroll);
                }
        
                function resumeAutoScroll() {
                    startAutoScroll();
                }
        
                startAutoScroll();
            });
        </script>
        
    </div>
{{-- contact --}}
<section class="bg-sky-50 py-12 px-6">
    <div class="max-w-6xl mx-auto bg-white shadow-2xl rounded-2xl p-8 border-t-8 border-sky-600 flex flex-col md:flex-row gap-8">
        <div class="w-full md:w-1/2">
            <h2 class="text-3xl font-bold text-sky-700 mb-4 text-center">Get In Touch</h2>
            <p class="text-gray-600 text-center mb-6">For any inquiries about RO purifiers or security cameras, feel free to reach out.</p>
            
            <div class="space-y-4">
                <div class="bg-sky-100 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-900 font-semibold">📍 Address:</p>
                    <p class="text-gray-700">Our Office
                        123 Street, New York, USA</p>
                </div>
                <div class="bg-sky-100 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-900 font-semibold">📞 Phone:</p>
                    <p class="text-gray-700">+91 2345647658</p>
                </div>
                <div class="bg-sky-100 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-900 font-semibold">📧 Email:</p>
                    <p class="text-gray-700">info@example.org</p>
                </div>
                <div class="bg-sky-100 p-4 rounded-lg shadow-sm">
                    <p class="text-gray-900 font-semibold">🌐 Website:</p>
                    <a href="https://www.europaolympiad.org" class="text-sky-600 font-medium hover:underline">www.ro&cctv</a>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2">
            <h3 class="text-3xl font-bold text-sky-700 mt-2 mb-4 text-center">For Any Inquiry</h3>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label class="block text-gray-700 font-semibold">Full Name</label>
                    <input type="text" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your full name" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Email</label>
                    <input type="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your email" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Phone Number</label>
                    <input type="tel" name="phone" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your phone number" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Subject</label>
                    <select name="subject" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" required>
                        <option value="">Select a subject</option>
                        <option value="ro">RO Purifier Inquiry</option>
                        <option value="camera">Security Camera Inquiry</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold">Message</label>
                    <textarea name="message" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your message" required></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-sky-700 text-white p-3 rounded-lg font-semibold hover:bg-sky-800">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const carousel = document.querySelector(".carousel");
            const slides = document.querySelectorAll(".slide");
            const prevBtn = document.querySelector(".prev-btn");
            const nextBtn = document.querySelector(".next-btn");
            let currentIndex = 0;
            let slideWidth = slides[0].clientWidth;
            let intervalId;

            function updateSlideWidth() {
                slideWidth = slides[0].clientWidth;
            }

            function moveToSlide(index) {
                if (index >= slides.length) {
                    carousel.style.transition = "none"; // Remove transition effect
                    carousel.style.transform = `translateX(0px)`; // Instantly reset to first slide
                    currentIndex = 0;
                    setTimeout(() => {
                        carousel.style.transition = "transform 0.7s ease-in-out";
                    }, 50);
                } else {
                    carousel.style.transition = "transform 0.7s ease-in-out";
                    carousel.style.transform = `translateX(-${index * slideWidth}px)`;
                    currentIndex = index;
                }
            }

            function nextSlide() {
                moveToSlide(currentIndex + 1);
            }

            function prevSlide() {
                moveToSlide(currentIndex - 1);
            }

            function autoSlide() {
                nextSlide();
            }

            function startAutoSlide() {
                intervalId = setInterval(autoSlide, 3000);
            }

            function stopAutoSlide() {
                clearInterval(intervalId);
            }

            nextBtn.addEventListener("click", () => {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            prevBtn.addEventListener("click", () => {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            window.addEventListener("resize", updateSlideWidth);
            document.querySelector(".carousel-wrapper").addEventListener("mouseenter", stopAutoSlide);
            document.querySelector(".carousel-wrapper").addEventListener("mouseleave", startAutoSlide);

            startAutoSlide();
        });
    </script>
@endsection
