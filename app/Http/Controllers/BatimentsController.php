<?php

namespace App\Http\Controllers;

use App\Models\Batiments;
use Illuminate\Http\Request;

class BatimentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batiments = Batiments::all();
        return view('batiments', compact('batiments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.batiment.batimentCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Batiments;
        $store->name = $request->name;
        $store->description = $request->description;
        $store->save();
        return redirect('/batiment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function show(Batiments $batiments, $id)
    {
        $show = Batiments::find($id);
        return view("pages.batiment.batimentShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function edit(Batiments $batiments, $id)
    {
        $edit = Batiments::find($id);
        return view('pages.batiment.batimentEdit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Batiments::find($id);
        $update->name = $request->name;
        $update->description = $request->description;;
        $update->save();
        return redirect('/batiment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Batiments  $batiments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Batiments::find($id);
        $destroy->delete();
        return redirect("/batiment");
    }
}
