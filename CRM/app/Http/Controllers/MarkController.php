<?php

namespace PromoWeb1s\Http\Controllers;

use PromoWeb1s\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $marks=Mark::all();
            return response()->json($marks,200);
        }
        return view('marks/listmark');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*return view('views.listmark');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if ($request->hasFile('logo')) {
            $file=$request->file('logo');
            $imgname=time().$file->getClientOriginalName();
            $file->move(public_path().'/images', $imgname);
        }

        $mark=new mark();
        $mark->nombre=$request->input('marca');  
        $mark->pagina=$request->input('url');
        $mark->direccion=$request->input('direccion');    
        $mark->telefono=$request->input('telefono'); 
        $mark->logo=$imgname;  
        $mark->save();
        return 'Guardado';

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
