<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formContactRequest;
use App\formContact;

class formController extends Controller
{
    public function submit(formContactRequest $formReq) {
        $contact = new formContact();
        $contact->name = $formReq->input('name');
        $contact->email = $formReq->input('email');
        $contact->theme = $formReq->input('theme');
        $contact->message = $formReq->input('message');

        $contact->save();
        return redirect()->route('contact')
        ->with('success', 'Обращение успешно отправлено!');
    }
}
