<?php

namespace App\Http\Controllers;

use App\Field;
use App\Table;
use App\Datatype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //dd($request->table);
        $table=(Table::class);
        $table=Table::where("id","$request->table")->get();
        
        //dd($table->first->name);
        //dd($table);
        $fields = Field::where('table_id', $table->first()->id)->get();
        //dd($fields);
        return view('fields.index',[
            'table'=>$table->first(),
            'fields'=>$fields
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $datatypes=Datatype::all();
        $table = $request->table;
        if($table!=null) $singleTable = true;
        return view('fields.create',[
            'table'=>$table,
            'datatypes' => $datatypes,
            'singleTable' => $singleTable,
        ]);
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
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function show(Field $field)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function edit(Field $field)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Field $field)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Field  $field
     * @return \Illuminate\Http\Response
     */
    public function destroy(Field $field)
    {
        
    }
}
