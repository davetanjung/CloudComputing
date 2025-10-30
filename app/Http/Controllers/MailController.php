<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function sendEmail(Request $request){

        // 1. Validation - All keys match the HTML form names (name, email, password, password_confirmation, birth_date)
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'birth_date' => 'required|date',
            // These rules ensure the password is at least 8 chars and matches the confirmation field
            'password' => 'required|string|min:8|confirmed', 
            'password_confirmation' => 'required|string|min:8',
        ]);
        
        $recipientEmail = $request->email;
        // Use only the necessary registration data for the Mailable
        $formData = $request->only('name', 'email', 'birth_date');

        try {
            // 2. Attempt to Send Email
            // Note: If you want to email the admin/yourself, change $recipientEmail to a fixed address.
            Mail::to($recipientEmail)->send(new TestMail($formData));
            
            // 3. Log Success
            Log::info('Email sent successfully to: ' . $recipientEmail);
            
            // 4. Return Success Response
            return back()->with('success', 'Email sent successfully');

        } catch (\Exception $e) {
            // 5. Log Failure Details
            Log::error("Email sending failed for {$recipientEmail}: " . $e->getMessage());
            
            // 6. Return Failure Response
            return back()->with('error', 'Email failed to send. Check logs for details.');
        }
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
