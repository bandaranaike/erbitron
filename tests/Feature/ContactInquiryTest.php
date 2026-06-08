<?php

use App\Mail\ContactInquiryReceived;
use Illuminate\Support\Facades\Mail;
use Inertia\Testing\AssertableInertia as Assert;

test('the contact page can be viewed', function () {
    $this->get(route('contact'))
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page->component('Contact'));
});

test('a contact inquiry can be submitted', function () {
    Mail::fake();

    config()->set('contact.recipients', [
        'erbitronsoftware@gmail.com',
        'eranda2091@gmail.com',
    ]);

    $payload = [
        'name' => 'Jane Founder',
        'email' => 'jane@example.com',
        'phone' => '',
        'message' => 'We need a custom SaaS product built.',
    ];

    $this->from(route('contact'))
        ->post(route('contact.store'), $payload)
        ->assertRedirect(route('contact'))
        ->assertSessionHas('success');

    Mail::assertSent(ContactInquiryReceived::class, function (ContactInquiryReceived $mail) use ($payload) {
        return $mail->hasTo('erbitronsoftware@gmail.com')
            && $mail->hasTo('eranda2091@gmail.com')
            && $mail->hasReplyTo($payload['email'])
            && $mail->inquiry['name'] === $payload['name']
            && $mail->inquiry['message'] === $payload['message'];
    });
});

test('an inquiry requires a name and message', function () {
    Mail::fake();

    $this->from(route('contact'))
        ->post(route('contact.store'), [
            'name' => '',
            'email' => 'jane@example.com',
            'phone' => '',
            'message' => '',
        ])
        ->assertRedirect(route('contact'))
        ->assertSessionHasErrors([
            'name' => 'Please enter your name.',
            'message' => 'Please tell us how we can help.',
        ]);

    Mail::assertNothingSent();
});

test('an inquiry requires either an email address or phone number', function () {
    Mail::fake();

    $this->from(route('contact'))
        ->post(route('contact.store'), [
            'name' => 'Jane Founder',
            'email' => '',
            'phone' => '',
            'message' => 'We need a custom SaaS product built.',
        ])
        ->assertRedirect(route('contact'))
        ->assertSessionHasErrors([
            'email' => 'Please provide an email address or phone number.',
            'phone' => 'Please provide a phone number or email address.',
        ]);

    Mail::assertNothingSent();
});

test('email must be valid when provided', function () {
    Mail::fake();

    $this->from(route('contact'))
        ->post(route('contact.store'), [
            'name' => 'Jane Founder',
            'email' => 'not-an-email',
            'phone' => '',
            'message' => 'We need a custom SaaS product built.',
        ])
        ->assertRedirect(route('contact'))
        ->assertSessionHasErrors([
            'email' => 'Please enter a valid email address.',
        ]);

    Mail::assertNothingSent();
});
