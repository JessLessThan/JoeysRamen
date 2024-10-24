<?php

// app/Http/Controllers/LocationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function ozamiz() {
        // Render the main view and pass the additional view as part of it
        return view('frontend.menupartials.menuBranches.ozamizmenu')
            ->with('additionalView', view('frontend.menupartials.ozamizmenusidebar'));

            
    }
    

    public function pagadian() {
        return view('frontend.menupartials.menuBranches.pagadianbrances')
        ->with('additionalView', view('frontend.menupartials.menuBranches.pagadian')); // Logic to handle Pagadian
    }


    //ozamiz Category
    public function ramen() {
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.ramen')
        ->with('additionalView', view('frontend.menupartials.ozamizmenusidebar')); // Logic to handle Pagadian
    }

    public function susshi() {
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.susshi')
        ->with('additionalView', view('frontend.menupartials.ozamizmenusidebar')); // Logic to handle Pagadian
    }

    public function sasshimi() {
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.sasshimi')
        ->with('additionalView', view('frontend.menupartials.ozamizmenusidebar')); // Logic to handle Pagadian
    }

    public function desserts() {
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.desserts')
        ->with('additionalView', view('frontend.menupartials.ozamizmenusidebar')); // Logic to handle Pagadian
    }

    public function drinks() {
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.drinks')
        ->with('additionalView', view('frontend.menupartials.ozamizmenusidebar')); // Logic to handle Pagadian
    }

    //pagadian category

    public function pagadianramen() {
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.ramen')
        ->with('additionalView', view('frontend.menupartials.pagadianmenusidebar')); // Logic to handle Pagadian
    }

    public function pagadiansusshi() {
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.susshi')
        ->with('additionalView', view('frontend.menupartials.pagadianmenusidebar')); // Logic to handle Pagadian
    }

    public function pagadiansasshimi() {
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.sasshimi')
        ->with('additionalView', view('frontend.menupartials.pagadianmenusidebar')); // Logic to handle Pagadian
    }

    public function pagadiandesserts() {
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.desserts')
        ->with('additionalView', view('frontend.menupartials.pagadianmenusidebar')); // Logic to handle Pagadian
    }

    public function pagadiandrinks() {
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.drinks')
        ->with('additionalView', view('frontend.menupartials.pagadianmenusidebar')); // Logic to handle Pagadian
    }


    

   
}

