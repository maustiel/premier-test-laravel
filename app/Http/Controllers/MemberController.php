<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class MemberController extends Controller
{
    private array $members = [
        ['first_name' => 'Alice', 'age' => 29],
        ['first_name' => 'Bob', 'age' => 34],
        ['first_name' => 'Chloé', 'age' => 17],
        ['first_name' => 'Damien', 'age' => 42],
    ];

    public function index(): View
    {
        return view('members', ['members' => $this->members]);
    }

    public function empty(): View
    {
        return view('members', ['members' => []]);
    }
}
