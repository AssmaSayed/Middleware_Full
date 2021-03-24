<?php

namespace App\Http\Controllers;

use App\Models\BackOffice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { if (Auth::check()) {
        return view('pages.BackOffice.backOffice');
    }else
        return redirect()->back();

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
     * @param  \App\Models\BackOffice  $backOffice
     * @return \Illuminate\Http\Response
     */
    public function show(BackOffice $backOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BackOffice  $backOffice
     * @return \Illuminate\Http\Response
     */
    public function edit(BackOffice $backOffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BackOffice  $backOffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BackOffice $backOffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BackOffice  $backOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(BackOffice $backOffice)
    {
        //
    }
}
