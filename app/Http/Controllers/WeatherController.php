<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class WeatherController extends Controller
{
    private array $readings = [
        'wavre' => 15,
        'namur' => 14,
        'liege' => 13,
    ];

    public function index(Request $request): string
    {
        $city = $request->query('ville', 'wavre');

        return "Météo demandée pour $city";
    }

    public function reading(string $city): array
    {
        return [
            'city' => $city,
            'temperature' => $this->readings[$city],
            'unit' => 'C',
        ];
    }

    public function today(): RedirectResponse
    {
        return redirect()->route('weather.index', ['ville' => 'namur']);
    }
}
