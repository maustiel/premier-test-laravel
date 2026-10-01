<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ParkingRateController extends Controller
{
    public function __invoke(int $hours): string
    {
        $price = min($hours * 1.5, 12);

        return "$hours heure(s) de parking : " . number_format($price, 2, ',', ' ') . ' EUR';
    }
}








































