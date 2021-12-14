<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $razonSocial = $request->get('razon_social');
        $cuit = $request->get('cuit');
        

        /*
        //metodo para saber si una key esta generada
        $request->has('cuit');
        */
        
        //$cliente = DB::select('SELECT * FROM cliente');
        $clientes = DB::table("cliente")
        ->select("*")
        ->where("razon_social","like","%".$razonSocial."%")
        //->orWhere("cuit","like",$cuit."%")
        ->where("cuit","like",$cuit."%")
        ->get(); //forma 2
        $parametros = [
            "arrayClientes" => $clientes,
            "titulo" => "Esta es la tabla de clientes"
        ];
        return view("clientes.clientes",$parametros); //pasa mas de un parametro atraves de un array KEY
        //return $razonSocial;
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
        return "Esto es el metodo show de ClientesController del cliente " .$id;
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
