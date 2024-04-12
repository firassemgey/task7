<?php

namespace App\Http\Controllers;

use App\Models\Libraries;
use Illuminate\Http\Request;

class LibrariesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libraries =Libraries::all();

        return response()->json([
            'status' => 'success',
            'library' => $libraries
        ]);
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
    public function show(Libraries $libraries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libraries $libraries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libraries $libraries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libraries $libraries)
    {
        //
    }
}
