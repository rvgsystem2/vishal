@extends('components.main')
@section('content')
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
@endsection
