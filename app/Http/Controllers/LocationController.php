<?php

// app/Http/Controllers/LocationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function ozamiz() {
        return view('frontend.menupartials.menuBranches.ozamizmenu'); // Logic to handle Ozamiz
    }

    public function pagadian() {
        return view('frontend.menupartials.menuBranches.pagadianbrances'); // Logic to handle Pagadian
    }
}

