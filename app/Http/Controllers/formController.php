<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function submit (Request $req){
        $valid = $req->validate([
            'name' => 'required|max:15',
            'email' => 'required|email',
            'theme' => 'required|max:50',
            'message' => 'required|max:500',
        ]);
    }
}
