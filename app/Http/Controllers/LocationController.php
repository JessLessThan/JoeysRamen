<?php

// app/Http/Controllers/LocationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function ozamiz() {
        return view('frontend.branches.menu.ozamiz'); // Logic to handle Ozamiz
    }

    public function pagadian() {
        return view('frontend.branches.menu.pagadian'); // Logic to handle Pagadian
    }
}

