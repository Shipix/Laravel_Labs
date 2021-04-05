<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Contact;
use App\Models\Footer;
use App\Models\homeTitre;
use App\Models\Logo;
use App\Models\newsletter;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalogo = Logo::first();

        $datacontact = Contact::first();
        $datafooter = Footer::first();
        $datatitre = homeTitre::all();

        $dataservicep = Service::paginate(9);

        $dataservice = Service::all();
        
        $last = $dataservice->last()->id;
        $lastServA = $dataservice->whereBetween('id',[($last-2),($last)]);
        $lastServB = $dataservice->whereBetween('id',[($last-5),($last-3)]);
        
        $datanewletter = newsletter::first();

        $dataArticle = BlogPost::all();
        $lastA = $dataArticle->last()->id;
        $lastarticle = $dataArticle->whereBetween('id',[($lastA-2),($lastA)]);
        
        return view('page.service',compact("datalogo",
        "dataservicep",
        "datanewletter",
        "lastServA",
        "lastServB",
        "datacontact",
        "datafooter",
        "datatitre",
        "dataservice",
        'lastarticle'));
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
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
