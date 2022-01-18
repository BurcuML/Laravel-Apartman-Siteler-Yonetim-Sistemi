<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Revie;
use Illuminate\Http\Request;

class RevieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist= Revie::all();
        return view('admin.review', ['datalist' => $datalist]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Revie  $revie
     * @return \Illuminate\Http\Response
     */
    public function show(Revie $revie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Revie  $revie
     * @return \Illuminate\Http\Response
     */
    public function edit(Revie $revie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Revie  $revie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Revie $revie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Revie  $revie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Revie $revie)
    {
        //
    }
}
