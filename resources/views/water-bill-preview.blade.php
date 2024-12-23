@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-white flex flex-col">
        <div class="container mx-auto px-4 py-8 flex-grow">
            <!-- Header Section -->
            <header class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#073F62] mb-4">Preview Water Bill</h1>
                <p class="text-xl text-[#00A550] max-w-2xl mx-auto">
                    Review your water bill before downloading or sending.
                </p>
            </header>

            <!-- PDF Preview -->
            <div class="max-w-4xl mx-auto mb-8">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <!-- Embed the PDF preview with watermark -->
                    <iframe src="data:application/pdf;base64,{{ base64_encode($pdf->output()) }}"
                        class="w-full h-[600px] border border-gray-200 rounded-lg mb-8"></iframe>

                    <!-- Action Buttons -->
                    <div class="flex flex-col md:flex-row gap-4 justify-center">
                        <!-- Download Clean PDF Button -->
                        <form method="GET" action="{{ route('water.bill.download', ['withWatermark' => false]) }}">
                            @csrf
                            <button type="submit"
                                class="bg-[#073F62] text-white px-8 py-3 rounded-lg hover:bg-[#00A550] transition-colors font-semibold">
                                Download Clean PDF
                            </button>
                        </form>

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
