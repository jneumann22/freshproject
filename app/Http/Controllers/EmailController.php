<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {

        Mail::to('jneu2k@gmail.com')->send(new TestEmail);

        return response()->json(['message' => 'Request completed']);
    }

}
