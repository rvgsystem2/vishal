@extends('components.main')
@section('content')
 
  
    <!-- Hero Section -->
    <section class="bg-sky-100 py-20 text-center">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-4xl font-bold text-sky-800">Professional RO Purifier Installation & Maintenance</h1>
            <p class="mt-4 text-gray-700">Secure your home and business with our advanced surveillance solutions.</p>
            
        </div>
    </section>
    
    {{-- fdyftu --}}
    
        <section class="max-w-6xl mx-auto px-4 py-12 text-center">
            {{-- <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                Register Aquafresh RO Service or RO Installation Request
            </h2>
            <a href="#" class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md inline-block">
                REGISTER YOUR SERVICE COMPLAINT
            </a>
     --}}
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <!-- Service Box -->
                <div class="bg-white p-6 rounded-lg shadow-lg text-left flex items-start">
                    <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-r from-sky-500 to-gray-500 text-white flex items-center justify-center rounded-full">
                        <i class="ri-time-line text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Tatkal Service</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Tatkal Service within 3 hours at your doorstep. We understand the problem when no water is available due to a purifier breakdown.
                        </p>
                    </div>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-lg text-left flex items-start">
                    <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-r from-sky-500 to-gray-500 text-white flex items-center justify-center rounded-full">
                        <i class="ri-calendar-check-line text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Book Service Online</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Now you can book your <span class="text-sky-500">Aquafresh RO Service</span> via WhatsApp at <strong>8800133166</strong> anytime 24×7.
                        </p>
                    </div>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-lg text-left flex items-start">
                    <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-r from-sky-500 to-gray-500 text-white flex items-center justify-center rounded-full">
                        <i class="ri-heart-line text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">We Love & Care</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            We prioritize our customers, ensuring their needs are met with utmost care and dedication.
                        </p>
                    </div>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-lg text-left flex items-start">
                    <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-r from-sky-500 to-gray-500 text-white flex items-center justify-center rounded-full">
                        <i class="ri-gift-line text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Best Service Packages</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            Our service plans start at Rs.1199. Custom plans tailored to meet routine service needs.
                        </p>
                    </div>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-lg text-left flex items-start">
                    <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-r from-sky-500 to-gray-500 text-white flex items-center justify-center rounded-full">
                        <i class="ri-bar-chart-line text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">92% Positive Feedback</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            With fast service and quality products, customer satisfaction remains our top priority.
                        </p>
                    </div>
                </div>
    
                <div class="bg-white p-6 rounded-lg shadow-lg text-left flex items-start">
                    <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-r from-sky-500 to-gray-500 text-white flex items-center justify-center rounded-full">
                        <i class="ri-video-line text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <h3 class="text-xl font-semibold text-gray-900">Video Tutorials</h3>
                        <p class="text-gray-600 text-sm mt-2">
                            <span class="text-sky-500">Aquafresh</span> offers YouTube video tutorials for small fixes to solve issues quickly.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    
 
    
    
    <!-- Services Section -->
    <section class="max-w-6xl mx-auto py-12 px-6">
        <h2 class="text-3xl font-bold text-center text-sky-700 mb-8">Our Services</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product2.jpg')}}" alt="Installation" class="mx-auto h-1/2 w-1/2 rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Installation</h3>
                <p class="text-gray-700 mt-2">Get professional installation for all types of RO systems with expert technicians.</p>
            </div>
            
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product1.jpg')}}" alt="Maintenance" class="mx-auto h-1/2 w-1/2  rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Maintenance</h3>
                <p class="text-gray-700 mt-2">Regular servicing to keep your RO system running smoothly and efficiently.</p>
            </div>

             <!-- Service Item -->
             <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product2.jpg')}}" alt="Installation" class="mx-auto h-1/2 w-1/2 rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Installation</h3>
                <p class="text-gray-700 mt-2">Get professional installation for all types of RO systems with expert technicians.</p>
            </div>
            
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product1.jpg')}}" alt="Maintenance" class="mx-auto h-1/2 w-1/2  rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Maintenance</h3>
                <p class="text-gray-700 mt-2">Regular servicing to keep your RO system running smoothly and efficiently.</p>
            </div>

             <!-- Service Item -->
             <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product2.jpg')}}" alt="Installation" class="mx-auto h-1/2 w-1/2 rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Installation</h3>
                <p class="text-gray-700 mt-2">Get professional installation for all types of RO systems with expert technicians.</p>
            </div>
            
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product1.jpg')}}" alt="Maintenance" class="mx-auto h-1/2 w-1/2  rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Maintenance</h3>
                <p class="text-gray-700 mt-2">Regular servicing to keep your RO system running smoothly and efficiently.</p>
            </div>

             <!-- Service Item -->
             <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product2.jpg')}}" alt="Installation" class="mx-auto h-1/2 w-1/2 rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Installation</h3>
                <p class="text-gray-700 mt-2">Get professional installation for all types of RO systems with expert technicians.</p>
            </div>
            
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product1.jpg')}}" alt="Maintenance" class="mx-auto h-1/2 w-1/2  rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Maintenance</h3>
                <p class="text-gray-700 mt-2">Regular servicing to keep your RO system running smoothly and efficiently.</p>
            </div>

             <!-- Service Item -->
             <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product2.jpg')}}" alt="Installation" class="mx-auto h-1/2 w-1/2 rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Installation</h3>
                <p class="text-gray-700 mt-2">Get professional installation for all types of RO systems with expert technicians.</p>
            </div>
            
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product1.jpg')}}" alt="Maintenance" class="mx-auto h-1/2 w-1/2  rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Maintenance</h3>
                <p class="text-gray-700 mt-2">Regular servicing to keep your RO system running smoothly and efficiently.</p>
            </div>

             <!-- Service Item -->
             <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product2.jpg')}}" alt="Installation" class="mx-auto h-1/2 w-1/2 rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Installation</h3>
                <p class="text-gray-700 mt-2">Get professional installation for all types of RO systems with expert technicians.</p>
            </div>
            
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product1.jpg')}}" alt="Maintenance" class="mx-auto h-1/2 w-1/2  rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Maintenance</h3>
                <p class="text-gray-700 mt-2">Regular servicing to keep your RO system running smoothly and efficiently.</p>
            </div>

            
              <!-- Service Item -->
              <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product2.jpg')}}" alt="Installation" class="mx-auto h-1/2 w-1/2 rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Installation</h3>
                <p class="text-gray-700 mt-2">Get professional installation for all types of RO systems with expert technicians.</p>
            </div>
            
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product1.jpg')}}" alt="Maintenance" class="mx-auto h-1/2 w-1/2  rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">RO Maintenance</h3>
                <p class="text-gray-700 mt-2">Regular servicing to keep your RO system running smoothly and efficiently.</p>
            </div>

            
            <!-- Service Item -->
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <img src="{{asset('asset/img/product1.jpg')}}" alt="Filter Replacement" class="mx-auto h-1/2 w-1/2  rounded-lg">
                <h3 class="text-xl font-semibold text-sky-600 mt-4">Filter Replacement</h3>
                <p class="text-gray-700 mt-2">We provide genuine RO filters and parts for replacement and upgrades.</p>
            </div>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="bg-sky-600 text-white py-12">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold">Need Assistance?</h2>
            <p class="mt-2">Contact our experts for any RO service requirements.</p>
            <a href="contact.html" class="mt-4 inline-block bg-white text-sky-600 px-6 py-3 font-semibold rounded-lg shadow-lg hover:bg-gray-200">Get in Touch</a>
        </div>
    </section>
    
 


@endsection