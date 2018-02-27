<?php

namespace App\Http\Controllers;

use App\Model\Group;
use Illuminate\Http\Request;
use Auth;
use Session;

class GroupController extends Controller
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
        // Validation des données saisi
        $this->validate($request, [
            'name' => 'required|min:4'
        ]);

        $group = new Group;
        // Auth::id() renvoi l'identifiant de l'utilisateur connecté
        $group->user_id = Auth::id();
        $group->name = $request->name;
        $group->save();

        // Envoi d'une variable de session
        $request->session()->flash('success', 'Insertion réussie.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        return view('groups.show',compact('group', $group));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        return view('groups.edit', compact('group', $group));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $this->validate($request, [
            'name' => 'required|min:4'
        ]);

        $group->name = $request->name;
        $group->save();

        $request->session()->flash('success', 'Modification réussie.');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        Session::flash('success', 'Suppression réussie.');

        return redirect()->route('home');
    }
}
