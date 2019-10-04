<?php

namespace App\Http\Controllers;

use App\Collation;
use Illuminate\Http\Request;

class CollationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collations = Collation::all();
        return view('collations.index',['collations'=>$collations]);
    }
    public function indexModify()
    {
        $collations = Collation::all();
        return view('collations.indexModify',['collations'=>$collations]);
    }
    public function indexDelete()
    {
        $collations = Collation::all();
        return view('collations.indexDelete',['collations'=>$collations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('collations.create');
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
            'description' => ['required', 'string', 'max:20']
        ]);

        Collation::create([
            'description' => $data['description']
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collation  $collation
     * @return \Illuminate\Http\Response
     */
    public function show(Collation $collation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collation  $collation
     * @return \Illuminate\Http\Response
     */
    public function edit(Collation $collation)
    {
        return view('collations.edit',['collation' => $collation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collation  $collation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collation $collation)
    {
        $data = request()->validate([
            'description' => ['required', 'string', 'max:20']
        ]);
        $collation->update($data);
        return redirect()->route('indexModifyCollation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collation  $collation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collation $collation)
    {
        $collation->delete();
        return redirect()->route('indexDeleteCollation');
    }
}
