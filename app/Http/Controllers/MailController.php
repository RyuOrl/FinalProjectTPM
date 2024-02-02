<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ComposedMail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->all();
        Mail::to('fierynx@gmail.com')
            ->send(new ComposedMail($data));
        return back();
    }
}
