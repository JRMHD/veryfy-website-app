@extends('layouts.app')
@section('content')
    <div class="min-h-screen bg-white flex flex-col">
        <div class="container mx-auto px-4 py-8 flex-grow">
            <!-- Header Section -->
            <header class="text-center mb-12">
                <h1 class="text-4xl font-bold text-[#073F62] mb-4">Generate Water Bill</h1>
                <p class="text-xl text-[#00A550] max-w-2xl mx-auto">
                    Get Your Customized Water Bill Copy in Less Than 2 Minutes!
                </p>
            </header>

            <!-- Disclaimer Section -->
            <div class="max-w-4xl mx-auto mb-8 bg-[#073F62]/5 p-6 rounded-lg">
                <h2 class="text-[#073F62] font-semibold mb-2">Important Notice</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Expert Wager is a service site for creating high-quality documents that will be used strictly for
                    verifying identity to sites that require utility bills for approval, such as Payoneer, PayPal, Deriv,
                    and others. You can create bills, affidavits of residence, and bank statements of different counties in
                    just 2 minutes. The copies generated from this site should not be used for malicious activities like
                    theft or conning other people. It is highly forbidden.
                </p>
            </div>

            <!-- Form Section -->
            <form method="POST" action="{{ route('water.bill.preview') }}" class="max-w-4xl mx-auto">
                @csrf
                <div class="bg-white shadow-md rounded-lg p-6">
                    <!-- Account Details Section -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-[#073F62] mb-6">Account Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="account_number">Account
                                    Number</label>
                                <input type="text" name="account_number"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="full_names">Full Names</label>
                                <input type="text" name="full_names"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div class="md:col-span-2">
                                <label class="block text-gray-700 font-medium mb-2" for="address">Address</label>
                                <input type="text" name="address"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="city">City</label>
                                <input type="text" name="city"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="state">State/Province</label>
                                <input type="text" name="state"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="zipcode">Zip Code</label>
                                <input type="text" name="zipcode"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="phone">Phone Number</label>
                                <input type="text" name="phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                        </div>
                    </div>

                    <!-- Meter Details Section -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-[#073F62] mb-6">Water Consumption Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="meter_number">Meter Number</label>
                                <input type="text" name="meter_number"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="previous_reading">Previous
                                    Reading</label>
                                <input type="number" name="previous_reading"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="current_reading">Current
                                    Reading</label>
                                <input type="number" name="current_reading"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="consumption">Consumption</label>
                                <input type="number" name="consumption"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="consumption_type">Consumption
                                    Type</label>
                                <input type="text" name="consumption_type"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="consumption_period">Consumption
                                    Period</label>
                                <input type="text" name="consumption_period"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                        </div>
                    </div>

                    <!-- Billing Details Section -->
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-[#073F62] mb-6">Billing Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="total_amount">Total Amount</label>
                                <input type="number" name="total_amount"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="date_of_issue">Date of
                                    Issue</label>
                                <input type="date" name="date_of_issue"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                            <div>
                                <label class="block text-gray-700 font-medium mb-2" for="date_due">Date Due</label>
                                <input type="date" name="date_due"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#00A550] focus:border-transparent"
                                    required>
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit"
                            class="bg-[#00A550] text-white px-8 py-3 rounded-lg hover:bg-[#073F62] transition-colors font-semibold">
                            Preview Water Bill
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('footer')
@endsection
