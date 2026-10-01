<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        $info = [
            'Nom' => 'Octet',
            'Année de création' => 2012,
            'Mission' => 'Réparer plutôt que remplacer',
        ];

        return view('company', ['infos' => $info]);
    }
}
