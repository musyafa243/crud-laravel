<?php

namespace App\Http\Controllers;
use App\koordinar;
use App\item;
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
        $koordinar = koordinar::all();
       return view('koordinar.index', ['koordinar' => $koordinar]);
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
        $request->validate([
            'nama_koor' => 'required',
            'alamat' => 'required',
            'item_id' => 'required'
        ]);

        $koordinar = new koordinar;
        $koordinar->nama_koor=$request->nama_koor;
        $koordinar->alamat=$request->alamat;
        $koordinar->item_id=$request->item_id;

        //
        //dd($request->jumlah);

        $koordinar->save();
        return redirect('/koordinar')->with('status', 'Data Koordinator Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(koordinar $koordinar)
    {
        return view('koordinar.show', compact('koordinar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(koordinar $koordinar)
    {
        $item = item::all();
        return view('koordinar.edit', compact('item') ,compact('koordinar'));
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
            'item_id' => 'required',
            'alamat' => 'required'
        ]);
        koordinar::where('id', $koordinar->id)
            ->update([
                'nama_koor' => $request->nama_koor,
                'item_id' => $request->item_id,
                'alamat' => $request->alamat
            ]);
            return redirect('/koordinar')->with('status', 'Data Koordinator Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(koordinar $koordinar)
    {
        koordinar::destroy($koordinar->id);
        return redirect('/koordinar');
    }
}
