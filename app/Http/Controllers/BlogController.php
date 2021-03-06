<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogPost;
use App\Models\Categorie;
use App\Models\Footer;
use App\Models\homeTitre;
use App\Models\Logo;
use App\Models\newsletter;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {   $datafooter = Footer::first();
        $datanewletter = newsletter::first();
        $datatitre = homeTitre::all();
        $datalogo = Logo::first();
        $datacategorie = Categorie::all();
        $datatag = Tag::all();
        $dataPost = BlogPost::all();

        $dataPostp = BlogPost::paginate(3);

        return view('page.blog',compact("datacategorie",
        "datalogo",
        "datatitre",
        "datafooter",
        "datanewletter",
        "datatag",
        "dataPost","dataPostp"));
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
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $datatitre = homeTitre::all();
        $datanewletter = newsletter::first();
        $datalogo = Logo::first();
        $datafooter = Footer::first();
        $datacategorie = Categorie::all();
        $datatag = Tag::all();

        $show = BlogPost::find($id);
        return view("page.blog-post", compact('show',
        'datatitre',
        'datanewletter',
        'datalogo',
        'datatag',
        'datafooter',
        'datacategorie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
