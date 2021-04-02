<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Contact;
use App\Models\HomeMain;
use App\Models\homeTitre;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $datahome = HomeMain::first();
        $datalogo = Logo::first();
        $dataurl = Video::first();
        $datatesti = Testimonial::all();
        
        $last = $datatesti->last()->id;
        $lastTesti = $datatesti->whereBetween('id',[($last-5),($last)]);

        $dataservice = Service::all();
        $datacontact = Contact::all();
        $datatitre = homeTitre::all();
        $datacarousel = Carousel::all();
        $datateam = Team::all();
        return view ('page.home', compact('datacontact',
        'datahome',
        'dataurl',
        'datatesti',
        'datalogo',
        'lastTesti',
        'dataservice',
        'datatitre',
        'datacarousel',
        'datateam'));
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
     * @param  \App\Models\HomeMain  $homeMain
     * @return \Illuminate\Http\Response
     */
    public function show(HomeMain $homeMain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeMain  $homeMain
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeMain $homeMain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeMain  $homeMain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeMain $homeMain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeMain  $homeMain
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeMain $homeMain)
    {
        //  
    }
}
