<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreToySchemaRequest;
use App\Http\Requests\UpdateToySchemaRequest;
use App\Models\ToySchema;
use Illuminate\Http\RedirectResponse;

class ToySchemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreToySchemaRequest $request): RedirectResponse
    {
        $toySchema = new ToySchema();
        $toySchema->title = $request->title;
        $toySchema->save();
        return redirect("/schemas");
    }

    /**
     * Display the specified resource.
     */
    public function show(ToySchema $toySchema)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToySchema $toySchema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToySchemaRequest $request, ToySchema $toySchema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToySchema $toySchema)
    {
        //
    }
}
