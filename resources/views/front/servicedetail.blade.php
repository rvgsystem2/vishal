@extends('components.main')
@section('content')

    <header class="bg-blue-600 text-white text-center py-4 text-xl font-semibold">
        RO & CCTV Services
    </header>
    
    <section class="max-w-5xl mx-auto p-6 bg-white shadow-lg mt-6 rounded-lg">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Our Services</h2>
        <div class="grid md:grid-cols-2 gap-6">
            <!-- RO Service -->
            <div class="p-4 border rounded-lg shadow-sm">
                <h3 class="text-xl font-semibold text-blue-600">RO Water Purifier Services</h3>
                <p class="text-gray-600 mt-2">We offer installation, maintenance, and repair services for all types of RO water purifiers to ensure clean and safe drinking water for your home or office.</p>
                <ul class="list-disc pl-5 text-gray-700 mt-2">
                    <li>RO Installation</li>
                    <li>Filter Replacement</li>
                    <li>Annual Maintenance</li>
                    <li>Water Quality Testing</li>
                </ul>
            </div>
            
            <!-- CCTV Service -->
            <div class="p-4 border rounded-lg shadow-sm">
                <h3 class="text-xl font-semibold text-blue-600">CCTV Installation & Monitoring</h3>
                <p class="text-gray-600 mt-2">Protect your home or business with our professional CCTV installation and maintenance services, ensuring 24/7 surveillance and security.</p>
                <ul class="list-disc pl-5 text-gray-700 mt-2">
                    <li>New CCTV Setup</li>
                    <li>Camera Repair & Replacement</li>
                    <li>Remote Monitoring Setup</li>
                    <li>Security Consultation</li>
                </ul>
            </div>
        </div>
    </section>
    

@endsection