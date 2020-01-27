<?php

namespace App\Http\Controllers;
use App\koordinar;
use Illuminate\Http\Request;

class KoordinarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koordinars = koordinar::all();
       return view('koordinar.index', compact('koordinars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $koordinars = koordinar::all();
        return view('koordinar.create', compact('koordinars'));
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
    public function show(koordinar $koordinar)
    {
        return view('koordinar.show', compact('koordinars'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(koordinar $koordinar)
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
    public function update(Request $request, koordinar $koordinar)
    {
        $request->validate([
            'nama_koor' => 'required',
            'koordinar_id' => 'required',
            'alamat' => 'required',
            'nama_koor' => 'required'
        ]);
        item::where('id', $item->id)
            ->update([
                'nama_koor' => $request->nama_koor,
                'koordinar_id' => $request->koordinar_id,
                'alamat' => $request->alamat,
                'nama_koor' => $request->nama_koor
            ]);
            return redirect('/koordinar')->with('status', 'Data Barang Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(koordinar $koordinar)
    {
        //
    }
}
