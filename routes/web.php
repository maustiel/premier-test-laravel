<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ParkingRateController;
use App\Http\Controllers\WeatherController;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;

// exo 1
Route::get("/hello", function (): string {
    return "hello world";
});

//exo 2
Route::get("/profil/{firstName}", function (string $firstName) {
    return "Bienvenue sur votre profil, $firstName !";
});

//exo 3
Route::get("/calcul/{a}/{b}", function (int $a, int $b) {
    $resultat = $a + $b;
    return "le résultat est $resultat";
})->whereNumber(['a', 'b']);

//exo 4
Route::get(
    "/bienvenue/{lang?}",
    function (string $lang = "fr") {
        $message = match ($lang) {
            "fr" => "bienvenue!",
            "en" => "Welcome!",
            "es" => "¡Bienvenido!",
            default => "langue non supportée",
        };
        return "$message";
    }
);


//exo 5
Route::POST("/formulaire", function () {
    return "Formulaire envoyé avec succès ! ";
});


//exo 6
Route::redirect('/ici', '/hello');

//exo 8
Route::view('/mentions-legales', 'legal');


// Exos Films

Route::get("/films", [MovieController::class, "index"])->name("movies.index");

Route::get("films/{id}", [MovieController::class, "show"])->name("movies.show")->whereNumber("id");

Route::get("films/{id}/seances", [MovieController::class, "showtimes"])->name("movies.show")->whereNumber("id");


// Exos Parking

Route::get('/parking/{hours}', ParkingRateController::class)->whereNumber('hours');


// Exos météo

Route::get('/meteo', [WeatherController::class, 'index'])->name('weather.index');

Route::get('/meteo/{city}/releve', [WeatherController::class, 'reading'])
    ->where('city', 'wavre|namur|liege');
//->whereIn('city', ['wavre','namur','liege']);
// where fonctionne mais sinon whereIn c'est possible

Route::get('/meteo/aujourdhui', [WeatherController::class, 'today']);

// LES VIEEEEEWS

Route::view("/accueil", "home")->name('home');


Route::get("/entreprise", [CompanyController::class, 'index'])->name('company');


Route::get('/membres', [MemberController::class, 'index'])->name('members.index');
Route::get('/membres/vide', [MemberController::class, 'empty']);

Route::view('/services', 'services')->name('services');

Route::get('/produits', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/produits/{id}', [ProductController::class, 'show'])
    ->whereNumber('id')
    ->name('products.show');

//newsletter de neuille

Route::view('/newsletter', 'newsletter')
    ->name('newsletter.create');

Route::post('/newsletter', NewsletterController::class)
    ->name('newsletter.store');
