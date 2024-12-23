<?php

namespace App\Http\Controllers;

use App\Mail\BillMail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class BillController extends Controller
{
    // Show the form to generate a bill
    public function showForm()
    {
        return view('bill-form');
    }

    // Preview the generated bill with watermark
    public function preview(Request $request)
    {
        $data = $request->all();

        // Store the data in the session
        session(['bill_data' => $data]);

        // Add watermark text for preview
        $watermark = 'VERIFYWAGER.CO.KE';

        // Generate the PDF with watermark
        $pdf = Pdf::loadView('bill-pdf', compact('data', 'watermark'));

        // Pass the generated PDF to the view for preview
        return view('bill-preview', compact('pdf', 'data'));
    }

    // Download the bill as a PDF (with or without watermark)
    public function download(Request $request, $withWatermark = false)
    {
        // Retrieve the data from the session
        $data = session('bill_data');

        if (!$data) {
            return response()->json(['error' => 'Form data is missing in the session.'], 400);
        }

        // Check if 'account_number' exists in the data
        if (!isset($data['account_number'])) {
            return response()->json(['error' => 'Account number is missing in the session data.'], 400);
        }

        // Generate the PDF with or without watermark
        if ($withWatermark) {
            $watermark = 'VERIFYWAGER.CO.KE';
            $pdf = Pdf::loadView('bill-pdf', compact('data', 'watermark'));
        } else {
            $pdf = Pdf::loadView('bill-pdf', compact('data'));
        }

        return $pdf->download('power-bill.pdf');
    }

    // Send the bill to an email address
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
            'consumption_type' => 'required|string',
            'consumption_period' => 'required|string',
            'total_amount' => 'required|numeric',
            'date_of_issue' => 'required|date',
            'date_due' => 'required|date',
            'email' => 'required|email',
        ]);

        // Store the validated data in the session
        session(['bill_data' => $validatedData]);

        // Generate the PDF without watermark for email
        $pdf = Pdf::loadView('bill-pdf', ['data' => $validatedData]);

        // Send the email with the attached PDF
        Mail::send([], [], function ($message) use ($validatedData, $pdf) {
            $message->to($validatedData['email'])
                ->subject('Your Power Bill')
                ->attachData($pdf->output(), 'power-bill.pdf');
        });

        // Redirect back with success message
        return redirect()->route('bill.form')->with('success', 'Bill sent successfully!');
    }
}
