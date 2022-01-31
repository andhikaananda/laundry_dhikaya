<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminat\Support\Str;
use App\Models\paket;
use App\Http\Requests\PaketRequest;
use App\Models\Outlet;


class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Paket::join('outlet', 'paket.id_outlet', '=', 'outlet.id')
            ->select('paket.*', 'outlet.nama')->orderBy('outlet.nama')->get();

        $outlet = Outlet::orderBy('nama')->get();

        return view('paket.index')->with([
            'items' => $items,
            'outlet' => $outlet
        ]);
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
    public function store(PaketRequest $request)
    {
        $data = $request->all();

        Paket::create($data);
        return redirect('/paket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(PaketRequest $request)
    {
        Paket::findOrFail($request->id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Paket::findOrFail($id);
        $items->delete();

        return redirect('/paket');
    }
}
