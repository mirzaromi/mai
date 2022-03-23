<?php

namespace App\Http\Controllers;

use App\Imports\RegisSiswaImport;
use App\Models\RegisSiswaIzin;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Maatwebsite\Excel\Facades\Excel;

class RegisSiswaIzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.perizinan.siswa.index',[
            'title1' => 'Perizinan',
            'title2' => 'daftar_regis_siswa',
            'data' => RegisSiswaIzin::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.perizinan.siswa.create',[
            'title1' => 'Perizinan',
            'title2' => 'daftar_regis_siswa'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validate = $request->validate([
            'nama_siswa' => 'required',
            'slug' => 'required',
            'kelas' => 'required',
            'angkatan' => 'required',
            'jk' => 'required',
            'foto' => 'image|max:30720'
        ]);
        
        if ($request->file('foto') != null)
        {
            $validate['foto'] = $request->file('foto')->store('foto_perizinan');
        }

        
        RegisSiswaIzin::create($validate);
        return redirect('/admin/perizinan_siswa')->with('sukses','Sukses menambahkan Siswa Baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegisSiswaIzin  $regisSiswaIzin
     * @return \Illuminate\Http\Response
     */
    public function show(RegisSiswaIzin $regisSiswaIzin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegisSiswaIzin  $regisSiswaIzin
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisSiswaIzin $regisSiswaIzin, $id)
    {
        
        return view('admin.perizinan.siswa.edit',[
            'title1' => 'Perizinan',
            'title2' => 'daftar_regis_siswa',
            'data' => RegisSiswaIzin::where('id',$id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegisSiswaIzin  $regisSiswaIzin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegisSiswaIzin $regisSiswaIzin, $id)
    {
        $validate = $request->validate([
            'nama_siswa' => 'required',
            'slug' => 'required',
            'kelas' => 'required',
            'angkatan' => 'required',
            'jk' => 'required',
            'foto' => 'image|max:30720'
        ]);

        if ($request->file('foto') != null)
        {
            $validate['foto'] = $request->file('foto')->store('foto_perizinan');
        }

        
        RegisSiswaIzin::where('id',$id)->update($validate);
        return redirect('/admin/perizinan_siswa')->with('sukses','Sukses Mengupdate Biodata Siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegisSiswaIzin  $regisSiswaIzin
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisSiswaIzin $regisSiswaIzin, $id)
    {
        
        RegisSiswaIzin::destroy($id);

        return redirect('/admin/perizinan_siswa')->with('sukses','Sukses Menghapus Siswa');
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(RegisSiswaIzin::class, 'slug', $request->nama_siswa);
        return response()->json(['slug' => $slug]);
    }

    public function view_import()
    {
        return view('admin.perizinan.siswa.import',[
            'title1' => 'Perizinan',
            'title2' => 'daftar_regis_siswa',
        ]);
    }

    public function import()
    {
        // dd($request);
        Excel::import(new RegisSiswaImport, request()->file('file'));

        return redirect('/admin/perizinan_siswa/')->with('sukses', 'Sukses menambahkan beberapa perizinan baru');
    }
}
