<?php

namespace App\Http\Controllers;

use App\Models\OzamizTabledata;
use Illuminate\Http\Request;

class OzamizTabledataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tables = OzamizTabledata::all(); // Use the same name as in the view
        return view('superadmin.tabledatas.ozamiz.tableDatas', ['tables' => $tables]); // Pass it to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(OzamizTabledata $ozamizTabledata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OzamizTabledata $ozamiztabledata)
    {
        return view('superadmin.tabledatas.ozamiz.edit',  compact('ozamiztabledata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OzamizTabledata $ozamizTabledata)
{
    $request->validate([
        'table' => 'required|integer|max:255',
        'table_capacity' => 'required|integer|min:1',
    ]);

    $ozamizTabledata->update([
        'table' => $request->input('table'),
        'table_capacity' => $request->input('table_capacity'),
    ]);

    return redirect()->route('super-admin.ozamiztabledatas.index')
    ->with('status', 'Table data updated successfully!');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OzamizTabledata $ozamizTabledata)
    {
        //
    }
}
