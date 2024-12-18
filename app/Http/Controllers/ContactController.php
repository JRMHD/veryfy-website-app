<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        try {
            // Validate the form input
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'nullable|string',
                'message' => 'required|string',
            ]);

            // Save the data to the database
            Contact::create($validated);

            // Send email notification using the ContactMessage Mailable
            Mail::to('expertwager@gmail.com')->send(new ContactMessage($validated));

            // Return success response
            return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
        } catch (\Exception $e) {
            // Return error response
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
