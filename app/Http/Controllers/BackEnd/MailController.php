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
        Mail::to("rome.jes.1@gmail.com")
            ->send(new ContactMail(
                $request->input("comentario"),
                $request->input("nombres-apellidos"),
                $request->input("telefono")
            ));
    }
}
