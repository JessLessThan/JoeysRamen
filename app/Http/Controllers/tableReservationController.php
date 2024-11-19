<?php

namespace App\Http\Controllers;

use App\Models\OzamizTabledata;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tableReservationController extends Controller
{
    public function index()
    {
        

       // Get data from ozamiz_tabledatas for tables
        $ozamizTables = DB::table('ozamiz_tabledatas')->where('table', '1')->first();
        $ozamizTables2 = DB::table('ozamiz_tabledatas')->where('table', '2')->first();
        $ozamizTables3 = DB::table('ozamiz_tabledatas')->where('table', '3')->first();
        $ozamizTables4 = DB::table('ozamiz_tabledatas')->where('table', '4')->first();
        $ozamizTables5 = DB::table('ozamiz_tabledatas')->where('table', '5')->first();
        $ozamizTables6 = DB::table('ozamiz_tabledatas')->where('table', '6')->first();
        $ozamizTables7 = DB::table('ozamiz_tabledatas')->where('table', '7')->first();
        $ozamizTables8 = DB::table('ozamiz_tabledatas')->where('table', '8')->first();
        

        // Check if either query returns no result
        if (!$ozamizTables || !$ozamizTables2 || !$ozamizTables3 || !$ozamizTables4 || !$ozamizTables5 || !$ozamizTables6 || !$ozamizTables7  || !$ozamizTables8) {
            throw new ModelNotFoundException(); // Throw a 404 error if no result is found
        }

        // Pass both results to the view
        return view('frontend.reservationspartials.reservationsBranches.ozamiz.reservation', [
            'ozamizTables1' => $ozamizTables,
            'ozamizTables2' => $ozamizTables2,
            'ozamizTables3' => $ozamizTables3,
            'ozamizTables4' => $ozamizTables4,
            'ozamizTables5' => $ozamizTables5,
            'ozamizTables6' => $ozamizTables6,
            'ozamizTables7' => $ozamizTables7,
            'ozamizTables8' => $ozamizTables8,
        ]);
    }

    public function pagadianindex()
    {
        

       // Get data from ozamiz_tabledatas for tables
        $pagadianTables = DB::table('pagadian_tabledatas')->where('table', '1')->first();
        $pagadianTables2 = DB::table('pagadian_tabledatas')->where('table', '2')->first();
        $pagadianTables3 = DB::table('pagadian_tabledatas')->where('table', '3')->first();
        $pagadianTables4 = DB::table('pagadian_tabledatas')->where('table', '4')->first();
        $pagadianTables5 = DB::table('pagadian_tabledatas')->where('table', '5')->first();
        $pagadianTables6 = DB::table('pagadian_tabledatas')->where('table', '6')->first();
        $pagadianTables7 = DB::table('pagadian_tabledatas')->where('table', '7')->first();
        $pagadianTables8 = DB::table('pagadian_tabledatas')->where('table', '8')->first();
        $pagadianTables9 = DB::table('pagadian_tabledatas')->where('table', '9')->first();
        $pagadianTables10 = DB::table('pagadian_tabledatas')->where('table', '10')->first();
        

        // Check if either query returns no result
        if (!$pagadianTables || !$pagadianTables2 || !$pagadianTables3 || !$pagadianTables4 || !$pagadianTables5 || !$pagadianTables6 || !$pagadianTables7  || !$pagadianTables8 || !$pagadianTables9 || !$pagadianTables10) {
            throw new ModelNotFoundException(); // Throw a 404 error if no result is found
        }

        // Pass both results to the view
        return view('frontend.reservationspartials.reservationsBranches.pagadian.reservation', [
            'pagadianTables1' => $pagadianTables,
            'pagadianTables2' => $pagadianTables2,
            'pagadianTables3' => $pagadianTables3,
            'pagadianTables4' => $pagadianTables4,
            'pagadianTables5' => $pagadianTables5,
            'pagadianTables6' => $pagadianTables6,
            'pagadianTables7' => $pagadianTables7,
            'pagadianTables8' => $pagadianTables8,
            'pagadianTables9' => $pagadianTables9,
            'pagadianTables10' => $pagadianTables10,
        ]);
    }

    public function ozamizReservation(Request $request, $id)
{
    // Fetch the table from ozamiz_tabledatas
    $ozamizTable = DB::table('ozamiz_tabledatas')->where('id', $id)->first();
    // Fetch data for Pagadian table
    $pagadianTable = DB::table('pagadian_tabledatas')->where('id', $id)->first();

    if (!$ozamizTable && !$pagadianTable) {
        abort(404); // If no table is found, show a 404 error
    }

    // Check if the table belongs to Ozamiz or Pagadian
    $isOzamiz = $ozamizTable ? true : false; // This sets the flag

    // If the form is submitted (POST request), perform validation
    if ($request->isMethod('post')) {
        $request->validate([
            'numberOfPersons' => 'required|integer|min:1|max:' . ($isOzamiz ? $ozamizTable->table_capacity : $pagadianTable->table_capacity),
            'reservationDate' => 'required|date|after_or_equal:today', 
            'reservationTime' => 'required|date_format:H:i',   // Ensure time is in the proper format
            'description' => 'nullable|string|max:255',         // Optional description
        ]);
    }

    // Pass data to the view if the form hasn't been submitted yet
    return view('frontend.reservationspartials.reservationsBranches.ozamiz.partials.tablereservation', [
        'ozamizTable' => $ozamizTable,
        'pagadianTable' => $pagadianTable,
        'isOzamiz' => $isOzamiz, // Pass the flag to the view
    ]);
}



}
