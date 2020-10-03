<?php

namespace App\Http\Controllers\BackEnd;

use App\CustomClass\ContactData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __invoke(Request $request)
    {
        $contactData = new ContactData(
            $request->input("nombres-apellidos"),
            $request->input("asunto"),
            $request->input("email"),
            $request->input("telefono"),
            $request->input("comentario")
        );

        Mail::to("fllanos@fscorredoresasesores.com")->send(new ContactMail($contactData));
    }
}
