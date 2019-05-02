<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinsi;
use App\Kota;
use App\Pendaftaran;

use Mail;
use App\Mail\SendEmail;

class PendaftaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = Provinsi::all();

        return view('index', compact('provinsi'));
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
        $nama_provinsi  = Provinsi::all()->where('id', $request->id_provinsi)->first();
        $nama_kota      = Kota::all()->where('id', $request->id_kota)->first();

        Pendaftaran::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'jk'    => $request->jk,
            'provinsi'=> $nama_provinsi->name,
            'kota'  => $nama_kota->name,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

        // Mail::to($request->email)->send(new SendEmail("Test Subject", "Test Message"));

        return redirect(route('barcode'));
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

    public function kota(Request $request)
    {
        $kota = Kota::all()->where('province_id', $request->provinsi_id);

        echo "<option value='' disabled selected>Choose your option</option>";
        foreach ($kota as $row) {
            echo "<option value='$row[id]'>$row[name]</option>";
        }
    }
}
