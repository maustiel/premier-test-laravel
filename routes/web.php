<?php

use Illuminate\Support\Facades\Route;

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



