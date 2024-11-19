<?php

// app/Http/Controllers/LocationController.php

namespace App\Http\Controllers;

use App\Models\pagadianProducts;
use App\Models\Products;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function ozamiz() {
        return view('frontend.menupartials.menuBranches.ozamizmenu')
            ->with('additionalView', view('frontend.menupartials.ozamizmenusidebar'));
    }

    public function pagadian() {
        return view('frontend.menupartials.menuBranches.pagadianbrances')
            ->with('additionalView', view('frontend.menupartials.menuBranches.pagadian'));
    }

    // Ozamiz Category
    public function ramen() {
        $ramenProducts = Products::where('description', 'Ramen')->get();
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.ramen', [
            'ramenProducts' => $ramenProducts,
            'additionalView' => view('frontend.menupartials.ozamizmenusidebar')
        ]);
    }

    public function showRamenProduct($id) {
        // Try to find the product by name in Products model first
        $product = Products::where('name', $id)->first();
    
        // If the product is not found in Products, try to find it in pagadianProducts
        if (!$product) {
            $product = pagadianProducts::where('name', $id)->firstOrFail();
        }
    
        // Get drinks associated with the product from both Products and pagadianProducts
        $drinksFromProducts = Products::where('description', 'Drinks')->get();
        $drinksFromPagadian = pagadianProducts::where('category', 'Drinks')->get();
    
        // Merge both drink collections into one
        $drinkProducts = $drinksFromProducts->merge($drinksFromPagadian);
    
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.confirmorder.productinfo', [
            'product' => $product,
            'drinkProducts' => $drinkProducts
        ]);
    }
    
    public function showPagadianRamenProduct($name) {
        // Find the product by name
        $pagadianproduct = pagadianProducts::where('name', $name)->firstOrFail();
        
        // Get drinks associated with the product
        $drinkProducts = pagadianProducts::where('category', 'Drinks')->get();
        
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.confirmorder.productinfo', [
            'product' => $pagadianproduct,
            'drinkProducts' => $drinkProducts
        ]);

        
        
    }
    

    public function susshi() {
        $sushiProducts = Products::where('description', 'Sushi')->get();
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.susshi', [
            'sushiProducts' => $sushiProducts,
            'additionalView' => view('frontend.menupartials.ozamizmenusidebar')
        ]);
    }

    public function sasshimi() {
        $sashimiProducts = Products::where('description', 'Sashimi')->get();
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.sasshimi', [
            'sashimiProducts' => $sashimiProducts,
            'additionalView' => view('frontend.menupartials.ozamizmenusidebar')
        ]);
    }

    public function desserts() {
        $dessertProducts = Products::where('description', 'Desserts')->get();
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.desserts', [
            'dessertProducts' => $dessertProducts,
            'additionalView' => view('frontend.menupartials.ozamizmenusidebar')
        ]);
    }

    public function drinks() {
        $drinkProducts = Products::where('description', 'Drinks')->get();
        return view('frontend.menupartials.menuBranches.ozamiz.orderpage.category.drinks', [
            'drinkProducts' => $drinkProducts,
            'additionalView' => view('frontend.menupartials.ozamizmenusidebar')
        ]);
    }

    // Pagadian Category
    public function pagadianramen() {
        $ramenProducts = pagadianProducts::where('category', 'Ramen')->get();
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.ramen', [
            'ramenProducts' => $ramenProducts,
            'additionalView' => view('frontend.menupartials.pagadianmenusidebar')
        ]);
    }

    public function pagadiansusshi() {
        $sushiProducts = pagadianProducts::where('category', 'Sushi')->get();
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.susshi', [
            'sushiProducts' => $sushiProducts,
            'additionalView' => view('frontend.menupartials.pagadianmenusidebar')
        ]);
    }

    public function pagadiansasshimi() {
        $sasshimiProducts = pagadianProducts::where('category', 'Sasshimi')->get();
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.sasshimi', [
            'sasshimiProducts' => $sasshimiProducts,
            'additionalView' => view('frontend.menupartials.pagadianmenusidebar')
        ]);
    }

    public function pagadiandesserts() {
        $dessertProducts = pagadianProducts::where('category', 'Desserts')->get();
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.desserts', [
            'dessertProducts' => $dessertProducts,
            'additionalView' => view('frontend.menupartials.pagadianmenusidebar')
        ]);
    }

    public function pagadiandrinks() {
        $drinkProducts = pagadianProducts::where('category', 'Drinks')->get();
        return view('frontend.menupartials.menuBranches.pagadian.orderpage.category.drinks', [
            'drinkProducts' => $drinkProducts,
            'additionalView' => view('frontend.menupartials.pagadianmenusidebar')
        ]);
    }
}
