@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-white flex flex-col">
        <div class="container mx-auto px-4 py-8 flex-grow">
            <!-- Header Section -->
            <header class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#073F62] mb-4">Preview Water Bill</h1>
                <p class="text-xl text-[#00A550] max-w-2xl mx-auto">
                    Review your water bill before downloading or sending
                </p>
            </header>

            <!-- PDF Preview -->
            <div class="max-w-4xl mx-auto mb-8">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <iframe src="data:application/pdf;base64,{{ base64_encode($pdf->output()) }}"
                        class="w-full h-[600px] border border-gray-200 rounded-lg mb-8"></iframe>

                    <!-- Email Form -->
                    <form method="POST" action="{{ route('water.bill.sendEmail') }}" class="mb-6">
                        @csrf
                        <div class="flex flex-col md:flex-row gap-4">
                            <input type="email" name="email"
                                class="flex-grow px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                placeholder="Enter email to send the bill" required>
                            <button type="submit"
                                class="bg-[#00A550] text-white px-6 py-2 rounded-lg hover:bg-[#073F62] transition-colors font-semibold">
                                Send to Email
                            </button>
                        </div>
                    </form>

                    <!-- Action Buttons -->
                    <div class="flex flex-col md:flex-row gap-4 justify-center">
                        <a href="#"
                            class="bg-[#073F62] text-white px-8 py-3 rounded-lg hover:bg-[#00A550] transition-colors font-semibold text-center">
                            Download Bill
                        </a>
                        <a href="{{ route('water.bill.form') }}"
                            class="bg-gray-100 text-gray-700 px-8 py-3 rounded-lg hover:bg-gray-200 transition-colors font-semibold text-center">
                            Edit Details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
@endsection
