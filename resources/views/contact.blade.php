@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-white flex flex-col">
        <div class="container mx-auto px-4 py-8 flex-grow">
            <header class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#073F62] mb-4">Contact Expert Wager</h1>
                <p class="text-xl text-[#00A550] max-w-2xl mx-auto">
                    Let's Transform Your Challenges into Opportunities
                </p>
            </header>

            <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12">
                {{-- Contact Form --}}
                <div class="bg-white shadow-lg rounded-lg p-8">
                    <h2 class="text-2xl font-bold text-[#073F62] mb-6">Send Us a Message</h2>
                    <form action="/submit-contact" method="POST">
                        @csrf
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#00A550] focus:border-[#00A550]">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email
                                    Address</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#00A550] focus:border-[#00A550]">
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number
                                    (Optional)</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#00A550] focus:border-[#00A550]">
                            </div>
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Your
                                    Message</label>
                                <textarea id="message" name="message" rows="4" required
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-[#00A550] focus:border-[#00A550]"></textarea>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full bg-[#00A550] text-white px-6 py-3 rounded-lg hover:bg-[#073F62] transition-colors">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                {{-- Contact Information --}}
                <div class="bg-[#00A550]/10 rounded-lg p-8 space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-[#073F62] mb-4">Contact Details</h3>
                        <div class="space-y-3 text-gray-700">
                            <p class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-[#00A550]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                expertwager@gmail.com
                            </p>
                            <p class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-[#00A550]" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                0707 401 954
                            </p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-[#073F62] mb-4">Business Hours</h3>
                        <div class="text-gray-700 space-y-2">
                            <p>Monday - Friday: 9:00 AM - 5:00 PM</p>
                            <p>Saturday: 10:00 AM - 2:00 PM</p>
                            <p>Sunday: Closed</p>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-xl font-bold text-[#073F62] mb-4">Our Location</h3>
                        <p class="text-gray-700">
                            Nairobi, Kenya
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @include('footer')
    </div>
@endsection
