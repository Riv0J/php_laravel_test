<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teddy;

class TeddieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teddies=Teddy::all();
        return view('teddies.index',['teddies'=>$teddies]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('teddies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recabar los datos del form en un array
        $data = $request->all();

        //crear nuevo peluche con
        $nuevo_peluche = new Teddy();
        $nuevo_peluche->name = $data['name'];
        $nuevo_peluche->color = $data['color'];

        //guardar el peluche en la bd
        $nuevo_peluche->save();

        //redireccionar a otro controller, en este caso el index
        return redirect()->route('peluche.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //probar php artisan tinker
        //2 obtener el peluche que tiene es id de la BD
        $teddy = Teddy::find($id);
        //cargar la vista detallada enviandole el peluche (teddies.show)
        return view('teddies.show',['teddy'=>$teddy]);
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
        $teddy = Teddy::find($id);
        $deleted = $teddy->delete();

        //redireccionar a otro controller, en este caso el index
        return redirect()->route('peluche.index');
    }
}
