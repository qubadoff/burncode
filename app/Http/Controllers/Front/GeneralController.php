<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\SendMessageRequest;
use App\Mail\ContactMessageReceived;
use App\Models\ContactMessages;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class GeneralController extends Controller
{

    public function comingSoon(): View
    {
        return \view('comingSoon');
    }
    public function contactSend(SendMessageRequest $request): string
    {
        ContactMessages::query()->create($request->validated());

        Mail::to('info@burncode.org')->send(new ContactMessageReceived($request->name, $request->surname, $request->email, $request->phone, $request->body));

        return back()->with('success', 'Your message has been received. One of our team members will get in touch with you shortly. Thank you!');
    }
}
