<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WaterBillController extends Controller
{
    // Show the form to generate a water bill
    public function showForm()
    {
        return view('water-bill-form');
    }

    // Preview the generated water bill
    public function preview(Request $request)
    {
        $data = $request->all();
        $pdf = Pdf::loadView('water-bill-pdf', compact('data'));

        return view('water-bill-preview', compact('pdf', 'data'));
    }

    // Download the water bill as a PDF
    public function download(Request $request)
    {
        $data = $request->all();
        $pdf = Pdf::loadView('water-bill-pdf', compact('data'));

        return $pdf->download('water-bill.pdf');
    }

    // Send the water bill to an email address
    public function sendEmail(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'account_number' => 'required|string',
            'full_names' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zipcode' => 'required|string',
            'phone' => 'required|string',
            'meter_number' => 'required|string',
            'previous_reading' => 'required|numeric',
            'current_reading' => 'required|numeric',
            'consumption' => 'required|numeric',
            'consumption_type' => 'required|string',
            'consumption_period' => 'required|string',
            'total_amount' => 'required|numeric',
            'date_of_issue' => 'required|date',
            'date_due' => 'required|date',
            'email' => 'required|email',
        ]);

        // Generate the PDF
        $pdf = Pdf::loadView('water-bill-pdf', ['data' => $validatedData]);

        // Send the email with the attached PDF
        Mail::send([], [], function ($message) use ($validatedData, $pdf) {
            $message->to($validatedData['email'])
                ->subject('Your Water Bill')
                ->attachData($pdf->output(), 'water-bill.pdf');
        });

        // Redirect after email is sent
        return redirect()->route('water.bill.form')->with('success', 'Bill sent successfully!');
    }
}
