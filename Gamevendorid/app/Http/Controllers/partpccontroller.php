<?php

namespace App\Http\Controllers;

use App\Models\providermerkpartpc;
use Illuminate\Http\Request;

class partpc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partpc = \App\Models\partpc::all();
               return view('partpc.index', compact('partpc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $providers = \App\Models\providermerkpartpc::all();
        return view('partpc.addpartpc', compact('providers'));
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
            'nama_item' => 'required|string',
            'tipe_item' => 'required|String',
            'deskripsi_item'=>'required|String',
            'brand_id' => 'required',

        ]);

        \App\Models\partpc::create([
            'nama_item' => $data['nama_item'],
            'tipe_item' => $data['tipe_item'],
            'deskripsi_item' => $data['deskripsi_item'],
            'brand_id' => $data['brand_id']
        ]);


        return redirect()->route('partpc.index');
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
     * @param \App\Models\partpc $partpc
     * @return \Illuminate\Http\Response
     */
    public function edit(\App\Models\partpc $partpc)
    {
        $provider = providermerkpartpc::all();
        return view('partpc.editpartpc', compact('partpc', 'provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\partpc $partpc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, \App\Models\partpc $partpc)
    {
        $partpc->update($request->all());
        return redirect()->route('partpc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\partpc $partpc
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Models\partpc $partpc)
    {
        $partpc->delete();
        return redirect()->route('partpc.index');
    }
}
