<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\channel;
use App\channelClient;

class clientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
  {
      $this->middleware('auth');
  }
    public function index()
    {
        $clientes = client::all();
        return view('adminlte::Clientes.clientes')->with("clientes",$clientes);
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
        $cliente =new client($request->all());
  
        $cliente ->save();
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

    public function asignaPantallas(Request $request, $id)
    {
        $canales = $request["canales"];
        $misCanales = channelClient::where("cl_id",$id)->delete();
        foreach ($canales as $canal) {
            channelClient::create(["cl_id"=>$id,"cn_id"=>$canal]);
        }
    }

    public function pantallas($id){
        $cliente = client::findOrFail($id);
        $canales = channel::all();
        $misCanales  = $cliente->canales()->get();
        $channels =[];
        foreach ($canales as $canal) {
            $canal["habilitado"] = false;
            foreach ($misCanales as $cnal) {
                if($canal->id==$cnal->cn_id){
                    $canal["habilitado"] = true;
                    break;
                }
            }
            $channels[] = $canal;
        }
        $datos = [];
        $datos["canales"] =$channels;
        $datos["pantallas"] = $cliente->pantallas()->get();
        return $datos;
    }

    public function getLink(Request $request){
       return $request["sn_mac"];
    }
}
