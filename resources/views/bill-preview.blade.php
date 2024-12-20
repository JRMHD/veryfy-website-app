@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-white flex flex-col">
        <div class="container mx-auto px-4 py-8 flex-grow">
            <!-- Header Section -->
            <header class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#073F62] mb-4">Preview Power Bill</h1>
                <p class="text-xl text-[#00A550] max-w-2xl mx-auto">
                    Review your bill before downloading or sending via email
                </p>
            </header>

            <!-- PDF Preview Section -->
            <div class="max-w-4xl mx-auto mb-8">
                <div class="bg-gray-100 rounded-lg p-2">
                    <iframe src="data:application/pdf;base64,{{ base64_encode($pdf->output()) }}"
                        class="w-full h-[600px] rounded-lg shadow-lg" style="border: 1px solid #e5e7eb;">
                    </iframe>
                </div>
            </div>

            <!-- Actions Section -->
            <div class="max-w-4xl mx-auto">
                <!-- Email Form -->
                <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                    <h3 class="text-lg font-semibold text-[#073F62] mb-4">Send to Email</h3>
                    <form method="POST" action="{{ route('bill.sendEmail') }}" class="space-y-4">
                        @csrf
                        <div>
                            <div class="relative">
                                <input type="email" name="email"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent pr-12"
                                    placeholder="Enter email address" required>
                                <button type="submit"
                                    class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-[#00A550] text-white px-4 py-2 rounded-lg hover:bg-[#073F62] transition-colors">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#"
                        class="inline-flex items-center justify-center bg-[#00A550] text-white px-6 py-3 rounded-lg hover:bg-[#073F62] transition-colors font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Download PDF
                    </a>
                    <a href="{{ route('bill.form') }}"
                        class="inline-flex items-center justify-center bg-[#073F62]/10 text-[#073F62] px-6 py-3 rounded-lg hover:bg-[#073F62]/20 transition-colors font-semibold">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                        Edit Bill
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
