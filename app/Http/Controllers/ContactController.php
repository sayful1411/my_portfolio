<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //pages
    public function index(){
        $socialData = DB::table('socials')->first();
        $contactData = DB::table('contact_me')->first();

        return view('pages.contact', compact('socialData', 'contactData'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'company' => 'nullable|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required|string',
        ]);

        // Read existing data, if any
        DB::table('contact_messages')->insert([
            'name' => $validated['name'],
            'company' => $validated['company'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect back to the contact page with a success message
        return redirect('/contact')->with('success', 'Message sent successfully!');
    }

}
