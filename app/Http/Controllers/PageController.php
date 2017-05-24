<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beasiswa;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function getBeasiswa()
    {
        return view('daftar-beasiswa');
    }

    public function postBeasiswa(Request $request)
    {
      // validasi data
      $this->validate($request, array(
              'nama'         => 'required|max:255',
              'ttl'         => 'required|max:255',
              'alamat'         => 'required',
              'jk'         => 'required|max:255',
              'asal'         => 'required|max:255',
              'nisn'         => 'required|max:255',
              'lulus'         => 'required|max:255',
              'email'         => 'required|max:255',
              'telp'         => 'required|max:255'
          ));

      // store in the database
      $beasiswa         = new Beasiswa;
      $beasiswa->nama   = $request->nama;
      $beasiswa->ttl    = $request->ttl;
      $beasiswa->alamat = $request->alamat;
      $beasiswa->jk     = $request->jk;
      $beasiswa->asal   = $request->asal;
      $beasiswa->nisn   = $request->nisn;
      $beasiswa->lulus  = $request->lulus;
      $beasiswa->email  = $request->email;
      $beasiswa->telp   = $request->telp;

      $beasiswa->save();
      // flash messages
      $request->session()->flash('status', 'Data berhasil disimpan!');
      // redirect ke halaman
      return redirect()->back();
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
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
