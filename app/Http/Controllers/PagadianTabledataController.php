<?php

namespace App\Http\Controllers;

use App\Models\PagadianTabledata;
use Illuminate\Http\Request;

class PagadianTabledataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('superadmin.tabledatas.pagadian.tableDatas');
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
    public function show(PagadianTabledata $pagadianTabledata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PagadianTabledata $pagadianTabledata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PagadianTabledata $pagadianTabledata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PagadianTabledata $pagadianTabledata)
    {
        //
    }
}