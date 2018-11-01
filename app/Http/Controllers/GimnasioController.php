<?php

namespace Gimnasio\Http\Controllers;

use Gimnasio\Cliente;
use Illuminate\Http\Request;
use Gimnasio\Http\Requests\StoreClienteRequest;

class GimnasioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        $cliente = new Cliente();

        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $cliente->name = $request->input('name');
        $cliente->slug = $request->input('slug');
        $cliente->text = $request->input('text');
        $cliente->avatar = $name;
        $cliente->save();
        return 'Guardado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Cliente $cliente)
    {
        $cliente->fill($request->except('avatar'));
        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $cliente->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $cliente->save();
        return 'Actualizado';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $file_pauth = public_path().'/images/'.$cliente->avatar;
        \File::delete($file_pauth);
        $cliente->delete();
        return 'Eliminado';
    }
}
