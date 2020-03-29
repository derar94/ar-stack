<?php

namespace App\Http\Controllers;

use App\chanel;
use Illuminate\Http\Request;

class ChanelController extends Controller
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
    public function latest()
    {
        $chanels = chanel::orderBy('id','desc')->take(5)->get()->toArray();
        return $chanels;
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
     * @param  \App\chanel  $chanel
     * @return \Illuminate\Http\Response
     */
    public function show(chanel $chanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\chanel  $chanel
     * @return \Illuminate\Http\Response
     */
    public function edit(chanel $chanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\chanel  $chanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chanel $chanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\chanel  $chanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(chanel $chanel)
    {
        //
    }
}
