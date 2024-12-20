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

    // Preview the generated bill
    public function preview(Request $request)
    {
        $data = $request->all();
        $pdf = Pdf::loadView('bill-pdf', compact('data'));

        return view('bill-preview', compact('pdf', 'data'));
    }

    // Download the bill as a PDF
    public function download(Request $request)
    {
        $data = $request->all();
        $pdf = Pdf::loadView('bill-pdf', compact('data'));

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

        // Generate PDF
        $pdf = Pdf::loadView('bill-pdf', ['data' => $validatedData]);

        // Use Mail facade to send the email with the PDF attachment
        Mail::send([], [], function ($message) use ($validatedData, $pdf) {
            $message->to($validatedData['email'])
                ->subject('Your Power Bill')
                ->attachData($pdf->output(), 'power-bill.pdf');
        });

        // Redirect back with a success message
        return redirect()->route('bill.form')->with('success', 'Bill sent successfully!');
    }
}
