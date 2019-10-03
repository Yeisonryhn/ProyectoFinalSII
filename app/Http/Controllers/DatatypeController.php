<?php

namespace App\Http\Controllers;

use App\Datatype;
use Illuminate\Http\Request;

class DatatypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatypes = Datatype::all();

        return view('datatypes.index', ['datatypes' => $datatypes ]);
    }

    public function indexModify()
    {
        $datatypes = Datatype::all();

        return view('datatypes.indexModify', ['datatypes' => $datatypes ]);
    }
    public function indexDelete()
    {
        $datatypes = Datatype::all();

        return view('datatypes.indexDelete', ['datatypes' => $datatypes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datatypes.create');
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
            'name' => ['required', 'string', 'max:20'],
            'weight' => ['required', 'integer'],
            'example' => ['required', 'string', 'max:40']
        ]);

        Datatype::create([
            'name' => $data['name'],
            'weight' => $data['weight'],
            'example' => $data['example'],
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Datatype  $datatype
     * @return \Illuminate\Http\Response
     */
    public function show(Datatype $datatype)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datatype  $datatype
     * @return \Illuminate\Http\Response
     */
    public function edit(Datatype $datatype)
    {
        return view('datatypes.edit',['datatype' => $datatype]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datatype  $datatype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datatype $datatype)
    {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:20'],
            'weight' => ['required', 'integer'],
            'example' => ['required', 'string', 'max:40']
        ]);
        
        $datatype->update($data);
        $datatypes = Datatype::all();
        return redirect()->route('indexModifyDatatype', ['datatypes' => $datatypes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datatype  $datatype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datatype $datatype)
    {
        $datatype->delete();
        return redirect()->route('indexDeleteDatatype');
    }
}
