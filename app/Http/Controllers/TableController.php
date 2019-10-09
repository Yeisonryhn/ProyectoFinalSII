<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Table;
use App\Database;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tables = Table::all();
        return view('tables.index',['tables'=> $tables]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        $manyDatabases = false;
        $singleDatabase = false;
        $database=$request->database;

        if($database != null){

            $singleDatabase = true;
            return view('tables.create',[
                'database'=>$database,
                'singleDatabase' => $singleDatabase,
                'manyDatabases' => $manyDatabases
                ]);

        }else{

            $databases=Database::all();
            if(sizeof($databases) > 0){
                $manyDatabases = true;
            }
            return view('tables.create',[
                'databases'=>$databases,
                'singleDatabase' => $singleDatabase,
                'manyDatabases' => $manyDatabases
                ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $database=$request->database;
        if($database == null){
            $data = request()->validate([
                'name'=>['required', 'string', 'max:20'],
                'database_id' =>['required', 'integer', 'exists:databases,id']
            ]);
        }else{
            $data = request()->validate([
                'name'=>['required', 'string', 'max:20'],
            ]);
            $data['database_id'] = $database;
        }
        $creation_date = Carbon::now();
        //dd($database);
        Table::create([
            'name' => $data['name'],
            'database_id' => $data['database_id'],
            'creation_date' => $creation_date,
        ]);
        return redirect()->route('tables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}
