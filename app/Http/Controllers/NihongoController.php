<?php

namespace App\Http\Controllers;

use App\Models\Nihongo;
use App\Http\Requests\StoreNihongoRequest;
use App\Http\Requests\UpdateNihongoRequest;

class NihongoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNihongoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNihongoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nihongo  $nihongo
     * @return \Illuminate\Http\Response
     */
    public function show(Nihongo $nihongo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nihongo  $nihongo
     * @return \Illuminate\Http\Response
     */
    public function edit(Nihongo $nihongo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNihongoRequest  $request
     * @param  \App\Models\Nihongo  $nihongo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNihongoRequest $request, Nihongo $nihongo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nihongo  $nihongo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nihongo $nihongo)
    {
        //
    }
}
