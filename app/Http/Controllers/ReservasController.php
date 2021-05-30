<?php

namespace App\Http\Controllers;

use App\Models\Reservas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reservas::all();

        return view('home', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/cliente/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/cliente/create')
            ->withErrors($validator)
                ->withInput();
        };

        $reserva = Reservas::create($request->all());
        $reserva->save();
        $request->session()->flash('correcto', 'Se ha creado la reserva.');
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservas  $reservas
     * @return \Illuminate\Http\Response
     */
    public function show(Reservas $reservas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservas  $reservas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $reserva = Reservas::where('idreservas', $id)->get();
       $id = $reserva[0]->idreservas;
        
        return view ('admin/cliente/edit',['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservas  $reservas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reserva = array_slice($request->all(),2);
        
        Reservas::where('idreservas', $id)->update($reserva);
        $request->session()->flash('Correcto', 'Se ha modificado la reserva');
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservas  $reservas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
       Reservas::where('idreservas',$id)->delete();
       $request->session()->flash('correcto', 'Se ha cancelado la reserva');
       return redirect('home');
    }
}
