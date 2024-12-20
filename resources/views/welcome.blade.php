@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-white flex flex-col">
        <div class="container mx-auto px-4 py-8 flex-grow">
            <header class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#073F62] mb-4">Expert Wager</h1>
                <p class="text-xl text-[#00A550] max-w-2xl mx-auto">
                    Get Your Customized Utility Bill Copy in Less Than 2 Minutes!
                </p>
                <!-- New TikTok Guide Button -->
                <div class="mt-4">
                    <a href="#" id="tiktok-guide-btn"
                        class="inline-flex items-center bg-[#00A550] text-white px-4 py-2 rounded-lg hover:bg-[#073F62] transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M16.6 5.82h.02m0 0c-.73-1.14-1.4-2.4-1.4-3.82h-2.62c0 1.66-1.3 3-2.98 3V8.2c1.66 0 3-1.34 3-3h2.62c.24 1.64.97 3.09 1.86 4 1.01 1.01 2.37 1.68 3.9 1.68v-3a2.14 2.14 0 0 1-2.36-2.06zm-12.04.72A8.82 8.82 0 0 0 7.73 2H5.11c0 1.66-1.3 3-2.98 3v2.62c1.66 0 3-1.34 3-3h2.62a6.14 6.14 0 0 0 1.86 4c1.01 1.01 2.37 1.68 3.9 1.68v-3a2.14 2.14 0 0 1-2.36-2.06H4.56zm0 6.14c0 1.14.58 2.16 1.46 2.76a4.14 4.14 0 0 0 4.42.26c.8-.46 1.32-1.32 1.32-2.2V9.46c.6.34 1.3.54 2.04.54h.02c1.66 0 3-1.34 3-3H5.11c0 1.66-1.3 3-2.98 3v2.62c1.66 0 3-1.34 3-3h2.62c.22 1.24 1.04 2.26 2.2 2.68.32.12.66.18 1.02.18h.02c1.26 0 2.36-.8 2.8-1.92.16-.4.24-.84.24-1.28v-.02c0-.44-.08-.86-.24-1.26a2.92 2.92 0 0 0-2.8-1.92h-.02a2.8 2.8 0 0 0-2.04.86V8.88c0-1.66-1.34-3-3-3s-3 1.34-3 3v4.08z" />
                        </svg>
                        Need a step-by-step video on how to get a customized utility bill? Click the link and watch the
                        TikTok video.
                    </a>
                </div>
            </header>

            <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                <div class="group">
                    <a href="/bill-form"
                        class="block bg-[#00A550]/10 hover:bg-[#00A550]/20 transition-colors rounded-lg p-6 text-center">
                        <img src="\images\kplc logo.png" alt="Kenya Power Logo"
                            class="h-16 w-16 mx-auto mb-4 object-contain">
                        <h3 class="text-[#073F62] font-semibold">Kenya Power Bill</h3>
                        <p class="text-sm text-gray-600 mt-2">Quick and easy utility bill verification</p>
                    </a>
                </div>
                <div class="group">
                    <a href="/water-bill-form"
                        class="block bg-[#073F62]/10 hover:bg-[#073F62]/20 transition-colors rounded-lg p-6 text-center">
                        <img src="\images\nairobi water logo.png" alt="Nairobi Water Logo"
                            class="h-16 w-16 mx-auto mb-4 object-contain">
                        <h3 class="text-[#073F62] font-semibold">Nairobi Water Bill</h3>
                        <p class="text-sm text-gray-600 mt-2">Instant water utility document generation</p>
                    </a>
                </div>
                <div class="group">
                    <a href="/"
                        class="block bg-[#00A550]/10 hover:bg-[#00A550]/20 transition-colors rounded-lg p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4 text-[#073F62]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-[#073F62] font-semibold">Affidavit Confirmation</h3>
                        <p class="text-sm text-gray-600 mt-2">Secure document verification services</p>
                    </a>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-3xl font-bold text-[#073F62] text-center mb-8">Why Choose Expert Wager?</h2>
                <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-6">
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-[#073F62] font-semibold mb-2">Fast Processing</h3>
                        <p class="text-sm text-gray-600">Get your documents verified in less than 2 minutes</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                        <h3 class="text-[#073F62] font-semibold mb-2">Verified Accuracy</h3>
                        <p class="text-sm text-gray-600">Highly accurate and reliable document services</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        <h3 class="text-[#073F62] font-semibold mb-2">Secure Process</h3>
                        <p class="text-sm text-gray-600">Your data privacy is our top priority</p>
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-3xl font-bold text-[#073F62] text-center mb-8">Client Testimonials</h2>
                <div class="testimonial-slider relative overflow-hidden">
                    <div class="flex space-x-6 animate-slide">
                        <div class="testimonial-card flex-shrink-0 w-80 bg-white shadow-lg rounded-lg p-6 text-center">
                            <img src="\images\headwrap2.png" alt="Client Photo"
                                class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                            <p class="text-gray-600 italic mb-4">"Expert Wager made getting my utility bill so simple and
                                fast!"</p>
                            <p class="font-semibold text-[#073F62]">Wanjiku Njoroge.</p>
                        </div>
                        <div class="testimonial-card flex-shrink-0 w-80 bg-white shadow-lg rounded-lg p-6 text-center">
                            <img src="\images\acheinf.jpg" alt="Client Photo"
                                class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                            <p class="text-gray-600 italic mb-4">"Incredible service that saved me time and stress!"</p>
                            <p class="font-semibold text-[#00A550]">Achieng' Onyango.</p>
                        </div>
                        <div class="testimonial-card flex-shrink-0 w-80 bg-white shadow-lg rounded-lg p-6 text-center">
                            <img src="\images\wekesa.jpg" alt="Client Photo"
                                class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                            <p class="text-gray-600 italic mb-4">"Quick, reliable, and professional document services!"</p>
                            <p class="font-semibold text-[#073F62]">Naliaka Wekesa.</p>
                        </div>
                        <div class="testimonial-card flex-shrink-0 w-80 bg-white shadow-lg rounded-lg p-6 text-center">
                            <img src="\images\man1.jpg" alt="Client Photo"
                                class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                            <p class="text-gray-600 italic mb-4">"Restored my account within hours. Truly exceptional!"</p>
                            <p class="font-semibold text-[#00A550]">Mwangi Kamau.</p>
                        </div>
                        <div class="testimonial-card flex-shrink-0 w-80 bg-white shadow-lg rounded-lg p-6 text-center">
                            <img src="\images\man2.jpg" alt="Client Photo"
                                class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                            <p class="text-gray-600 italic mb-4">"Affordable and efficient. Highly recommended!"</p>
                            <p class="font-semibold text-[#073F62]">Odhiambo Ochieng'.</p>
                        </div>
                        <div class="testimonial-card flex-shrink-0 w-80 bg-white shadow-lg rounded-lg p-6 text-center">
                            <img src="\images\man3.jpg" alt="Client Photo"
                                class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                            <p class="text-gray-600 italic mb-4">"The easiest way to get my utility documents!"</p>
                            <p class="font-semibold text-[#00A550]">Kimutai Kiprop.</p>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center">
                <a href="/contact"
                    class="inline-block bg-[#00A550] text-white px-6 py-3 rounded-lg hover:bg-[#073F62] transition-colors">
                    Get Started Now
                </a>
            </div>
        </div>
        <!-- Telegram Channel Auto-Popup Modal -->
        <div id="telegram-modal"
            class="fixed inset-0 bg-black bg-opacity-50 z-[100] hidden items-center justify-center p-4">
            <div class="relative w-full max-w-md bg-white rounded-2xl shadow-2xl overflow-hidden transform transition-all duration-300 scale-95 opacity-0"
                id="telegram-modal-content">
                <div class="absolute top-4 right-4 z-10">
                    <button id="close-telegram-modal" class="text-gray-400 hover:text-gray-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <div class="p-8 text-center">
                    <div class="bg-[#0088CC]/10 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-[#0088CC]" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.74-1.75-1.14-2.75-1.86-4.47-2.98-1.58-1.04-.56-1.62.34-2.56.24-.25 4.37-4 4.54-4.35.05-.09.1-.43-.14-.61s-.51-.15-.74-.09c-.31.09-5.05 3.2-5.05 3.2s-1.58-.49-1.84-.49c-.26 0-.54.09-.54.37 0 .27.29.38.34.42l5 2.24c.76.34 1.14.75 1.14 1.26 0 .42-.33.83-1 1.22-.24.16-.37.26-.37.38 0 .12.18.17.24.19.98.28 1.88.59 2.54.91.98.49 1.66.91 1.66 1.41 0 .28-.23.54-.69.8l4.15-3.16z" />
                        </svg>
                    </div>

                    <h2 class="text-3xl font-bold text-[#073F62] mb-4">Join Our Telegram</h2>
                    <p class="text-gray-600 mb-6 text-lg">
                        Get instant updates, expert tips, and exclusive offers for utility bill services!
                    </p>

                    <div class="flex space-x-4 justify-center">
                        <a href="https://t.me/binaryexpertwager" target="_blank"
                            class="inline-block bg-[#0088CC] text-white px-6 py-3 rounded-lg hover:bg-[#073F62] transition-colors">
                            Join Channel
                        </a>
                        <button id="later-telegram-modal"
                            class="inline-block bg-gray-200 text-gray-700 px-6 py-3 rounded-lg hover:bg-gray-300 transition-colors">
                            Maybe Later
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const telegramModal = document.getElementById('telegram-modal');
            const telegramModalContent = document.getElementById('telegram-modal-content');
            const closeTelegramModal = document.getElementById('close-telegram-modal');
            const laterTelegramModal = document.getElementById('later-telegram-modal');

            // Show modal immediately on page load
            function showModal() {
                telegramModal.classList.remove('hidden');
                telegramModal.classList.add('flex');

                // Trigger reflow for animation
                void telegramModalContent.offsetWidth;

                telegramModalContent.classList.remove('scale-95', 'opacity-0');
                telegramModalContent.classList.add('scale-100', 'opacity-100');
            }

            // Close modal function
            function closeModal() {
                telegramModalContent.classList.add('scale-95', 'opacity-0');
                telegramModalContent.classList.remove('scale-100', 'opacity-100');

                setTimeout(() => {
                    telegramModal.classList.add('hidden');
                    telegramModal.classList.remove('flex');
                }, 300);
            }

            // Show modal with a slight delay
            setTimeout(showModal, 1000);

            // Close button event
            closeTelegramModal.addEventListener('click', closeModal);

            // Maybe Later button event
            laterTelegramModal.addEventListener('click', closeModal);

            // Close modal if clicked outside
            telegramModal.addEventListener('click', function(e) {
                if (e.target === telegramModal) {
                    closeModal();
                }
            });
        });
    </script>
    @include('footer')
    </div>

    <style>
        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .animate-slide {
            animation: slide 20s linear infinite;
        }

        .testimonial-slider:hover .animate-slide {
            animation-play-state: paused;
        }
    </style>
@endsection
