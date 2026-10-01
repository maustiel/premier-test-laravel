<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ParkingRateController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsletterController;

// exo 1
Route::get("/hello", function(): string {
    return "hello world";
});

//exo 2
Route::get("/profil/{firstName}" , function(string $firstName ) {
    return "Bienvenue sur votre profil, $firstName !";
});

//exo 3
Route::get("/calcul/{a}/{b}" , function (int $a , int $b) {
$resultat = $a + $b;
return "le résultat est $resultat";
})->whereNumber(['a', 'b']);

//exo 4
Route::get("/bienvenue/{lang?}" ,
function(string $lang = "fr") {
    $message = match($lang) {
        "fr" => "bienvenue!",
        "en" => "Welcome!",
        "es" => "¡Bienvenido!",
        default => "langue non supportée",
         };
return "$message";
});


//exo 5
Route::POST("/formulaire" , function (){
    return "Formulaire envoyé avec succès ! ";
});



//movieController
Route::get("/films", [MovieController::class, "index"])->name("movies.index");

Route::get("/films/{id}", [MovieController::class, "show"])->whereNumber("id")->name("movies.show");

Route::get("/films/{id}/seances", [MovieController::class, "showtimes"])->whereNumber("id")->name("movies.showtimes");



//ParkingRateController
Route::get('/parking/{hours}', ParkingRateController::class)->whereNumber('hours');



//WeatherController
Route::get('/meteo', [WeatherController::class, 'index'])
    ->name('weather.index');

Route::get('/meteo/{city}/releve', [WeatherController::class, 'reading'])
    ->whereIn('city', ['wavre', 'namur', 'liege']);

Route::get('/meteo/aujourdhui', [WeatherController::class, 'today']);

//views accueil
Route::view("/accueil" , "home");

//company
route::get('/entreprise', [CompanyController::class, "index"])->name('company');


//MemberController
Route::get('/membres', [MemberController::class, 'index'])
    ->name('members.index');

Route::get('/membres/vide', [MemberController::class, 'empty']);


//services
Route::view('/services', 'services');


//productcontroller
Route::get('/produits', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/produits/{id}', [ProductController::class, 'show'])
    ->whereNumber('id')
    ->name('products.show');


//newslettercontroller
Route::view('/newsletter', 'newsletter')
    ->name('newsletter.create');

Route::post('/newsletter', NewsletterController::class)
    ->name('newsletter.store');