<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $siswas = Siswa::latest()->paginate(5);

  

        return view('siswas.index',compact('siswas'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswas.create');
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

            'nis' => 'required',

            'nama' => 'required',

            'jk' => 'required',

            'tempat_lahir' => 'required',

            'tanggal_lahir' => 'required',

            'alamat' => 'required',

            'asal_sekolah' => 'required',

            'kelas' => 'required',

            'jurusan' => 'required',

        ]);

  

        Siswa::create($request->all());

   

        return redirect()->route('siswas.index')

                        ->with('success','Data berhasil tersimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        return view('siswas.edit',compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([

            'nis' => 'required',

            'nama' => 'required',

            'jk' => 'required',

            'tempat_lahir' => 'required',

            'tanggal_lahir' => 'required',

            'alamat' => 'required',

            'asal_sekolah' => 'required',

            'kelas' => 'required',

            'jurusan' => 'required',

        ]);

  

        $siswa->update($request->all());

  

        return redirect()->route('siswas.index')

                        ->with('success','Data berhasil terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

  

        return redirect()->route('siswas.index')

                        ->with('success','Data berhasil terhapus');
    }
    public function cetakSiswa()
    {
        $siswas = Siswa::get();
        return view('siswas.cetak-siswa', compact('siswas'));
    }
}
