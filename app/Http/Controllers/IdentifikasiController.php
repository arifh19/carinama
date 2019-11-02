<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imports\IdentifikasiImport;
use App\Identifikasi;
use App\Training;
use App\Exports\IdentifikasiExport;
use Maatwebsite\Excel\Facades\Excel;

class IdentifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('identifikasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function parseImport(Request $request) 
    {
        DB::table('identifikasis')->truncate();
        Excel::import(new IdentifikasiImport, $request->file('excel_file'));
        $this->identifikasi();
        return redirect('/export')->with('success', 'All good!');
    }

    public function identifikasi()
    {
        $identitas=Identifikasi::all();

        foreach($identitas as $id){
            $hasil="";
            $temp="";
            $cari="";
            $tokenisasi = explode(" ", $id->nama);
            for ( $i = 0; $i < count( $tokenisasi ); $i++ ) {
                $cari=Training::where('nama',$tokenisasi[$i])->first();

                if($cari!=null){
                    $temp=$cari->klasifikasi;   
                    if($hasil==""){
                        $hasil=$temp;
                    } 
                    else{
                        $hasil=$hasil."-".$temp;
                    } 
                } else{
                    $temp="UNIDENTIFIED";
                    if($hasil==""){
                        $hasil=$temp;
                    } 
                    else{
                        $hasil=$hasil."-".$temp;
                    } 
                }
            }
            $id->klasifikasi=$hasil;
            $id->save();
        }
    }

    public function export() 
    {
        return Excel::download(new IdentifikasiExport, 'kucingsuper.xlsx');
    } 

    public function truntrun()
    {
        DB::table('identifikasis')->truncate();
    }

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
