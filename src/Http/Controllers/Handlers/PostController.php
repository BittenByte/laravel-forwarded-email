<?php

namespace BittenByte\LaravelForwardedEmail\Http\Controllers\Handlers;

use Illuminate\Http\Request;
use BittenByte\LaravelForwardedEmail\ForwardedEmail;
use BittenByte\LaravelForwardedEmail\Http\Controllers\Controller;

class PostController extends Controller
{
    public function processPostedEmail(Request $request)
    {
        ForwardedEmail::create([
            'recipient' => $request->input('recipient', ''),
            'sender' => $request->input('sender', ''),
            'subject' => $request->input('subject', ''),
            'from' => $request->input('from', ''),
            'other_fields' => json_encode($request->except(['recipient', 'sender', 'subject', 'from'])),
        ]);
    }
}
