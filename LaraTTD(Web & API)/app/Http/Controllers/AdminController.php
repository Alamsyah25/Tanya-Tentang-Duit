<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Pendaftaran;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // 
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

    public function login_index()
    {
        return view('admin.index');
    }

    public function login(Request $request)
    {
        $username = Admin::all()->where('username', $request->username)->count();

        if ($username > 0) {
            $password = Admin::where('username', $request->username)->where('password', base64_encode($request->password))->count();

            if ($password > 0) {
                $no = 1;
                $datas = Pendaftaran::all();
                $anak_p = Pendaftaran::where('tgl_lahir','>=','2002-01-01')->where('jk','perempuan')->count();
                $anak_l = Pendaftaran::where('tgl_lahir','>=','2002-01-01')->where('jk','laki-laki')->count();

                $remaja_p = Pendaftaran::where('tgl_lahir','<','2002-01-01')->where('tgl_lahir','>=','1992-01-01')->where('jk','perempuan')->count();
                $remaja_l = Pendaftaran::where('tgl_lahir','<','2002-01-01')->where('tgl_lahir','>=','1992-01-01')->where('jk','laki-laki')->count();

                $dewasa_l = Pendaftaran::where('tgl_lahir','<','1992-01-01')->where('jk','laki-laki')->count();
                $dewasa_p = Pendaftaran::where('tgl_lahir','<','1992-01-01')->where('jk','perempuan')->count();
                
                
                $pria = Pendaftaran::where('jk','Laki-Laki')->count();
                $wanita = Pendaftaran::where('jk','Perempuan')->count();


                // return dd($dewasa_p);

                return view('admin.home',compact('datas','anak_l','anak_p','remaja_p','remaja_l','wanita','pria','dewasa_p','dewasa_l','no'));
            }else{
                return back()->with('message', 'Password yang anda masukan salah!');    
            }
        }else{
            return back()->with('message', 'Username tidak tersedia!');
        }

        // return dd($request->all());
    }
}
