<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke(Request $request): string
    {
        $email = $request->input('email');

        return "Inscription à la newsletter enregistrée pour $email.";
    }
}
