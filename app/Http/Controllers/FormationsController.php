<?php

namespace App\Http\Controllers;

use App\Models\Formations;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formations::all();
        return view('formations', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.fomation.formationCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Formations;
        $store->name = $request->name;
        $store->description = $request->description;
        $store->save();
        return redirect('/formation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function show(Formations $formations,$id)
    {
        $show = Formations::find($id);
        return view("pages.fomation.formationShow", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $update = Formations::find($id);
        $update->name = $request->name;
        $update->description = $request->description;;
        $update->save();
        return redirect('/formation');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $destroy = Formations::find($id);
        $destroy->delete();
        return redirect("/formation");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formations  $formations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formations $formations)
    {
        //
    }
}
