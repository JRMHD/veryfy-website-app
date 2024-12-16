@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-white flex flex-col">
        <div class="container mx-auto px-4 py-8 flex-grow">
            <header class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#073F62] mb-4">About Expert Wager</h1>
                <p class="text-xl text-[#00A550] max-w-2xl mx-auto">
                    Transforming Challenges into Opportunities
                </p>
            </header>
            <section class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-8 mb-12">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-3xl font-bold text-[#073F62] mb-4">Who is Expert Wager?</h2>
                        <div class="space-y-4 text-gray-700">
                            <p>Expert Wager is a post-graduate from the University of Nairobi with a remarkable journey of
                                perseverance and entrepreneurship. The path to success began with a challenging year of job
                                hunting, trekking on foot in search of opportunities.</p>

                            <p>Starting as an article and content writer, a passion for reading was ignited. This initial
                                experience expanded into diverse skills including graphic design and website development.
                                Working across platforms like Fiverr, Upwork, and various Kenyan entities, Expert Wager
                                developed a versatile professional profile.</p>

                            <p>A curiosity about trading led to a deep dive into binary options trading, which became a
                                transformative professional focus. The core philosophy is simple yet powerful: overcome
                                fear, take action, and create a better tomorrow.</p>
                        </div>
                    </div>
                    <div>
                        <img src="\images\Verify logo 1.png" alt="Expert Wager Founder"
                            class="w-full rounded-lg shadow-md object-cover">
                    </div>
                </div>
            </section>

            <section class="mb-12">
                <h2 class="text-3xl font-bold text-[#073F62] text-center mb-8">Professional Journey Highlights</h2>
                <div class="max-w-4xl mx-auto grid md:grid-cols-3 gap-6">
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-[#073F62] font-semibold mb-2">Content Writing</h3>
                        <p class="text-sm text-gray-600">Extensive experience in professional article and content creation
                        </p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-[#073F62] font-semibold mb-2">Web Development</h3>
                        <p class="text-sm text-gray-600">Creating innovative digital solutions across multiple platforms</p>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-6 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-4 text-[#00A550]" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <h3 class="text-[#073F62] font-semibold mb-2">Trading Expertise</h3>
                        <p class="text-sm text-gray-600">Specializing in binary options trading and financial strategies</p>
                    </div>
                </div>
            </section>

            <section class="text-center bg-[#00A550]/10 py-12 rounded-lg">
                <h2 class="text-3xl font-bold text-[#073F62] mb-4">Our Mission</h2>
                <p class="max-w-2xl mx-auto text-gray-700 mb-6">
                    "You are about to win. Drop off the fear and take action. Start now for a better tomorrow!"
                </p>
                <a href="/contact"
                    class="inline-block bg-[#00A550] text-white px-6 py-3 rounded-lg hover:bg-[#073F62] transition-colors">
                    Get Mentorship
                </a>
            </section>
        </div>

        @include('footer')
    </div>
@endsection
