<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSend;
use App\Models\newsletterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterMailController extends Controller
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
        $store= new newsletterMail;
        $store->email =$request->email;
        $store->save();
        Mail::to('yo@yo')->send(new NewsletterSend($request));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\newsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function show(newsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function edit(newsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsletterMail $newsletterMail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsletterMail  $newsletterMail
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsletterMail $newsletterMail)
    {
        //
    }
}
