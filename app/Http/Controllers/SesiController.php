<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sesi;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list sesi
        return view('backend.sesi_index')->withSesis(Sesi::all()); 
        // Sesi::all() = "SELECT * FROM sesi .... "

        /*kalau ada condition / where
        $openSesi = Sesi::where('status', 1)->get();
        return view('backend.sesi_index')->withSesis($openSesi); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // add sesi
    public function create()
    {
        /* cara yang sama jugak
        $sesi = new Sesi;
        return view('backend.sesi_add')->with(['sesi', $sesi]);
        */
        return view('backend.sesi_add')->withSesi(new Sesi);
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
            'name'      => 'required',
            'pingat'    => 'required'
        ], [
            'name.required'     => 'Sila masukkan nama sesi',
            'pingat.required'    => 'Sila masukkan nama pingat'
        ]);

        //return dd($request); utk tengok dia antaq dd = dunp or die request

        // nak buat ternary function (mcm if else)
        $request['status'] = ($request->status == 'on') ? true : false; // utk boolean

        /*
        //cara biasa
        $sesi = new Sesi;
        $sesi->nama = $request->name;
        $sesi->pingat = $request->pingat;
        $sesi->status = $request->status;
        $sesi->save();
        */

        //cara pendek
        //buat only sebab nak simpan 3 tu ja, yg antaq csrf jugak...
        Sesi::create($request->only('name', 'pingat', 'status'));

        return back()->withSuccess('Sussessfully added');

        //longhand
        //return back()->with(['success' => 'Successfully added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.sesi_show')->withSesi(Sesi::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.sesi_edit')->withSesi(Sesi::findOrFail($id));
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
        $request->validate([
            'name'      => 'required',
            'pingat'    => 'required'
        ], [
            'name.required'     => 'Sila masukkan nama sesi',
            'pingat.required'    => 'Sila masukkan nama pingat'
        ]);

        $request['status'] = ($request->status == 'on') ? true : false; 

        Sesi::where('id', $id)->update($request->only('name', 'pingat', 'status'));

        return redirect()->route('sesi.index')->withSuccess('Sussessfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
