<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(): string {
        return "Trois films à l'affiche cette semaine";
    }

    public function show(int $id): string
    {
        return "Fiche du film $id";
    }

    public function showtimes(int $id): string
    {
        return "Séances du film $id : 14 h, 17 h et 20 h 30";
    }
}
