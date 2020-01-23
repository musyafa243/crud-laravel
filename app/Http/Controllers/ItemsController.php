<?php

namespace App\Http\Controllers;

use App\item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $items = item::all();
       return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
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
            'nama' => 'required',
            'code' => 'required',
            'jumlah' => 'required'
        ]);

        $item = new item;
        $item->nama=$request->nama;
        $item->code=$request->code;
        $item->jumlah=$request->jumlah;

        //
        //dd($request->jumlah);

        $item->save();


        return redirect('/items')->with('status', 'Data Barang Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        return view('items.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        return view('items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
        $request->validate([
            'nama' => 'required',
            'code' => 'required',
            'jumlah' => 'required'
        ]);
        item::where('id', $item->id)
            ->update([
                'nama' => $request->nama,
                'code' => $request->code,
                'jumlah' => $request->jumlah
            ]);
            return redirect('/items')->with('status', 'Data Barang Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        item::destroy($item->id);
        return redirect('/user');
    }
}
