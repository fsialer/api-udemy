<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos= Producto::all();
        return \Response::Json(['status' => 'success',
                            'error'   => false,
                            'data'    => $productos],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
     /* return dd($request->all());*/
        $producto=new Producto($request->all());
        $producto->save();
        return \Response::Json(['status' => 'success',
                            'error'   => false,
                            'data'    => $producto],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto= Producto::find($id);
        return \Response::Json(['status' => 'success',
                            'error'   => false,
                            'data'    => $producto],200);
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
        $producto= Producto::find($id);
        $producto->fill($request->all());
        $producto->save();
        return \Response::Json(['status' => 'success',
                            'error'   => false,
                            'data'    => $producto],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $producto= Producto::find($id);
         $producto->delete();
         return \Response::Json(['status' => 'success',
                            'error'   => false,
                            'data'    => $producto],200);
    }

  

}
