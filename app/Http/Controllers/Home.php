<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Kategori;
use App\Models\Pelaksanaan;
use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [

            'title' => "Crud App | Home",
            'event' => Event::all()

        ];

        return view('Home.Home', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => "Create",
            'kategori' => Kategori::all(),
            'pelaksanaan' => Pelaksanaan::all()
        ];

        return view('Home.Create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'nama' => 'required|max:50|min:5',
                'seat' => 'required|numeric',
                'pelaksanaan_id' => 'required',
                'kategori_id' => 'required',
                'tanggal' => 'required'

            ]
        );

        Event::create($validasi);

        return redirect('/home')->with('berhasil', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $home)
    {
        $edit = [

            'edit' => $home,
            'kategori' => Kategori::all(),
            'pelaksanaan' => Pelaksanaan::all(),
            'title' => "Edit"
        ];

        return view('Home.Edit', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $home)
    {
        $validasi = $request->validate(
            [
                'nama' => 'required|max:50|min:5',
                'seat' => 'required|numeric',
                'pelaksanaan_id' => 'required',
                'kategori_id' => 'required',
                'tanggal' => 'required'

            ]
        );

        Event::where('id', $home->id)->update($validasi);
        return redirect('/home')->with('berhasil', 'Data Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $home)
    {
        Event::destroy($home->id);
        return redirect('/home')->with('berhasil', 'Data Berhasil Dihapus');
    }
}
