<?php

namespace App\Http\Controllers;

use App\Database;
use App\DBEngine;
use App\Collation;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;//Para manejar de manera mas facil las fechas

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databases = Database::all();
        
        return view('databases.index', ['databases' => $databases]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dBEngines = DBEngine::all();
        $collations = Collation::all();
        $projects = Project::all();
        
        for ($i=0; $i < sizeof($projects) ; $i++) { 
            if($projects[$i]->database != null){
                unset($projects[$i]);
            }
        }

        return view('databases.create',[
            'dBEngines'=>$dBEngines,
            'collations'=>$collations,
            'projects'  =>$projects            
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
        $projects = Project::all();
        
        for ($i=0; $i < sizeof($projects) ; $i++) { 
            if($projects[$i]->database != null){
                unset($projects[$i]);
            }
        }
        $data = request()->validate([
            'name' => ['required', 'string', 'max:20'],
            'collation_id' =>['required', 'integer', 'exists:collations,id'],
            'd_b_engine_id' => ['required', 'integer', 'exists:d_b_engines,id'],
            'project_id' => ['required','integer','exists:projects,id']
        ]);
        $date=Carbon::now();
        Database::create([
            'name' => $data['name'],
            'collation_id' => $data['collation_id'],
            'd_b_engine_id' => $data['d_b_engine_id'],
            'project_id' => $data['project_id'],
            'creation_date' => $date
        ]);

        return redirect()->route('databases.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function show(Database $database)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function edit(Database $database)
    {
        $dBEngines = DBEngine::all();
        $collations = Collation::all();
        return view('databases.edit',[
            'database' => $database,
            'dBEngines'=>$dBEngines,
            'collations'=>$collations,        
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Database $database)
    {
        $data = request()->validate([
            'name' => ['required', 'string', 'max:20'],
            'collation_id' =>['required', 'integer', 'exists:collations,id'],
            'd_b_engine_id' => ['required', 'integer', 'exists:d_b_engines,id'],
        ]);

        $database->update($data);
        return redirect()->route('databases.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function destroy(Database $database)
    {
        $database->delete();
        return redirect()->route('databases.index');
    }
}
