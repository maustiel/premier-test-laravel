<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private array $products = [
        1 => ['name' => 'PC portable', 'price' => 1200, 'on_sale' => true],
        2 => ['name' => 'Souris sans fil', 'price' => 80, 'on_sale' => false],
        3 => ['name' => 'Clavier mÃ©canique', 'price' => 150, 'on_sale' => true],
        4 => ['name' => 'Casque audio', 'price' => 100, 'on_sale' => false],
    ];

    public function index()
    {
        return view('products.index', [
            'products' => $this->products
        ]);
    }

    public function show(int $id)
    {
        if (!isset($this->products[$id])) {
            abort(404);
        }

        return view('products.show', [
            'product' => $this->products[$id]
        ]);
    }
}
