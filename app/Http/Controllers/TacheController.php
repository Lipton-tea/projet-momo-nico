<?php

namespace App\Http\Controllers;

use App\Tache;
use App\Project;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taches = Tache::all();
        return view("taches", compact('taches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return view('taches.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tache = new Tache();
        $tache->tache_name = request('tache_name');
        $tache->description = request('description');
        $tache->project_id = request('project_id');
    
        $tache->save();

        return redirect("/taches");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function show(Tache $tache)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function edit(Tache $tach)
    {
        $projects = Project::all();
        return view('taches.edit', compact('tach', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tache $tach)
    {
        $tach->tache_name = request('tache_name');
        $tach->description = request('description');
        $tach->project_id = request('project_id');
    
        $tach->save();

        return redirect("/taches");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tache  $tache
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tache $tach)
    {
        $tach->delete(); 
        return redirect()->back()->with('info', 'item has been deleted');
    }
    public function save(){
       
    }
}
