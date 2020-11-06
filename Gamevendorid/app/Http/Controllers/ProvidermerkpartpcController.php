<?php

namespace App\Http\Controllers;

use App\Models\providermerkpartpc;
use Illuminate\Http\Request;

class ProvidermerkpartpcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providerpartpc = providermerkpartpc::all();
                return view('providerpartpc.index', compact('providerpartpc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('providerpartpc.addproviderpartpc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_provider' => 'required|string',
            'merk_provider' => 'required|string',

        ]);

        providermerkpartpc::create([
            'nama_provider' => $data['nama_provider'],
            'merk_provider' => $data['merk_provider']

        ]);


        return redirect()->route('providerpartpc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\providermerkpartpc  $providermerkpartpc
     * @return \Illuminate\Http\Response
     */
    public function show(providermerkpartpc $providermerkpartpc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\providermerkpartpc  $providermerkpartpc
     * @return \Illuminate\Http\Response
     */
    public function edit(providermerkpartpc $providermerkpartpc)
    {
        return view('providerpartpc.editproviderpartpc', compact('providermerkpartpc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\providermerkpartpc  $providermerkpartpc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, providermerkpartpc $providermerkpartpc)
    {
        $providermerkpartpc->update($request->all());
        return redirect()->route('providerpartpc.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\providermerkpartpc  $providermerkpartpc
     * @return \Illuminate\Http\Response
     */
    public function destroy(providermerkpartpc $providermerkpartpc)
    {
        $providermerkpartpc->delete();
        return redirect()->route('providerpartpc.index');
    }
}
