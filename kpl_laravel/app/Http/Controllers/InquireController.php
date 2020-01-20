<?php

namespace App\Http\Controllers;

use App\Inquire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class InquireController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Mail::to('kpl.industrialsupplyandservices@yahoo.com.ph')->send(new SendMailable($request->all()));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inquire  $inquire
     * @return \Illuminate\Http\Response
     */
    public function show(Inquire $inquire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inquire  $inquire
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquire $inquire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inquire  $inquire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquire $inquire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inquire  $inquire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquire $inquire)
    {
        //
    }
}
