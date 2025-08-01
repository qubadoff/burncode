<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\SendMessageRequest;
use App\Models\ContactMessages;

class ContactController extends Controller
{
    public function sendMessage(SendMessageRequest $request): string
    {

        ContactMessages::query()->create($request->all());

        return response()->json([
            'message' => 'Message sent successfully'
        ]);
    }
}
