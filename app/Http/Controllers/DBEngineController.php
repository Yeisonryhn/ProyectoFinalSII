<?php

namespace App\Http\Controllers;

use App\DBEngine;
use Illuminate\Http\Request;

class DBEngineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dBEngine=DBEngine::all();
        return view('engines.index',['dBEngines' => $dBEngine]);
    }
    public function indexModify()
    {
        $dBEngine=DBEngine::all();
        return view('engines.indexModify',['dBEngines' => $dBEngine]);
    }
    public function indexDelete()
    {
        $dBEngine=DBEngine::all();
        return view('engines.indexDelete',['dBEngines' => $dBEngine]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('engines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => ['string', 'required', 'max:20']
        ]);

        DBEngine::create([
            'name' => $data['name']
        ]);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DBEngine  $dBEngine
     * @return \Illuminate\Http\Response
     */
    public function show(DBEngine $dBEngine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DBEngine  $dBEngine
     * @return \Illuminate\Http\Response
     */
    public function edit(DBEngine $dBEngine)
    {
        return view('engines.edit', [ 'dBEngine' => $dBEngine ] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DBEngine  $dBEngine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DBEngine $dBEngine)
    {
        $data = request()->validate([
            'name' => ['string', 'required', 'max:20']
        ]);
        $dBEngine->update($data);
        return redirect()->route('indexModifyDBEngine');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DBEngine  $dBEngine
     * @return \Illuminate\Http\Response
     */
    public function destroy(DBEngine $dBEngine)
    {
        $dBEngine->delete();
        return redirect()->route('indexDeleteDBEngine');
    }
}
