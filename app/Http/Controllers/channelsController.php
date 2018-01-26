<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\channel;
use App\client;
use App\screen;
use App\channelClient;
class channelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $clientes = client::orderBy('cl_nombres', 'ASC')->pluck('cl_nombres', 'id');
        $pantallas = screen::orderBy('sn_mac', 'ASC')->pluck('sn_mac', 'id');
        $canales = channel::orderBy('id', 'DESC')->pluck('cn_nombre', 'id');;
     return view('adminlte::canales.canales')->with('canales',$canales)->with('clientes',$clientes)->with('pantallas',$pantallas);
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
        $canales = new channel($request->all());
       $canales ->save();
        return redirect()->back();
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

    public function guardar(Request $request){
        
        $pivote = new channelClient($request->all());
        dd($pivote);
    }
}
