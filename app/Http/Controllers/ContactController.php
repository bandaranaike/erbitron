<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactInquiryRequest;
use App\Mail\ContactInquiryReceived;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use Inertia\Response;

class ContactController extends Controller
{
    public function show(): Response
    {
        return Inertia::render('Contact');
    }

    public function store(ContactInquiryRequest $request): RedirectResponse
    {
        Mail::to(config('contact.recipients'))
            ->send(new ContactInquiryReceived($request->safe()->only([
                'name',
                'email',
                'phone',
                'message',
            ])));

        return back()->with('success', 'Thanks for reaching out. We will review your message and get back to you soon.');
    }
}
