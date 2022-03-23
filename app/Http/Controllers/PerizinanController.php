<?php

namespace App\Http\Controllers;

use App\Imports\IzinSiswaImport;
use App\Models\Perizinan;
use App\Models\RegisSiswaIzin;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use League\Flysystem\ReadInterface;
use Maatwebsite\Excel\Facades\Excel;


class PerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.perizinan.index',[
            'title1' => 'Perizinan',
            'title2' => 'daftar_perizinan',
            'data' => Perizinan::where('status_aktif',1)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'regis_siswa_izin_id' => '',
            'kategori' => 'required',
            'keterangan' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status_aktif' => '',
            'pembina' => ''
        ]);

        if (auth()->user()->username == "mirzaromi") {
            $validate['pembina'] = "Mirza Romi Setiawan";
        } elseif(auth()->user()->username == "ismizahria") {
            $validate['pembina'] = "Ismi Zahria, S.Si, M.MT.";
        }
        elseif(auth()->user()->username == "muhammadromli") {
            $validate['pembina'] = "Dr. Muhammad Romli";
        }
        elseif(auth()->user()->username == "luqifaizal") {
            $validate['pembina'] = "Luqi Faizal, S.Si";
        }
        elseif(auth()->user()->username == "wachidfatkhur") {
            $validate['pembina'] = "Wachid Fatkhur Rozi, S.A";
        }
        else {
            $validate['pembina'] = "Muhammad Risyad Rahaf Faldi, S.Si";
        }
        

        Perizinan::create($validate);
        return redirect('/admin/perizinan')->with('sukses','sukses menampahkan perizinan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function show(perizinan $perizinan)
    {
        return view('admin.perizinan.show',[
            'data' => $perizinan,
            'title1' => 'Perizinan',
            'title2' => 'daftar_perizinan',            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function edit(perizinan $perizinan)
    {
        return view('admin.perizinan.edit',[
            'data' => $perizinan,
            'title1' => 'Perizinan',
            'title2' => 'daftar_perizinan',
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, perizinan $perizinan)
    {
        // dd($request);
        $validate = $request->validate([            
            'kategori' => 'required',
            'keterangan' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'status_aktif' => '',
            'pembina' => ''
        ]);
        $validate['status_aktif'] = 1;

        if (auth()->user()->username == "mirzaromi") {
            $validate['pembina'] = "Mirza Romi Setiawan";
        } elseif(auth()->user()->username == "ismizahria") {
            $validate['pembina'] = "Ismi Zahria, S.Si, M.MT.";
        }
        elseif(auth()->user()->username == "muhammadromli") {
            $validate['pembina'] = "Dr. Muhammad Romli";
        }
        elseif(auth()->user()->username == "luqifaizal") {
            $validate['pembina'] = "Luqi Faizal, S.Si";
        }
        elseif(auth()->user()->username == "wachidfatkhur") {
            $validate['pembina'] = "Wachid Fatkhur Rozi, S.A";
        }
        else {
            $validate['pembina'] = "Muhammad Risyad Rahaf Faldi, S.Si";
        }

        Perizinan::where('id',$perizinan->id)->update($validate);
        return redirect('/admin/perizinan')->with('sukses','sukses meng-update perizinan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(perizinan $perizinan)
    {
        Perizinan::destroy($perizinan->id);

        return redirect('/admin/perizinan')->with('sukses','sukses menghapus perizinan');
    }
    
    public function view_perizinan() 
    {
        return view('perizinan.index',[
            'data' => Perizinan::where('waktu_mulai','>',\Carbon\Carbon::today())->orderBy('waktu_selesai','desc')->get()
        ]);
    }

    public function detail_perizinan($slug) 
    {
        return view('perizinan.show',[
            'data' => RegisSiswaIzin::where('slug',$slug)->get()
        ]);
    }

    public function check_slug(Request $request)
    {
        $slug = SlugService::createSlug(Perizinan::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }

    public function histori_perizinan()
    {
        return view('admin.perizinan.histori',[
            'title1' => 'Perizinan',
            'title2' => 'daftar_histori_perizinan',
            'data' => Perizinan::orderBy('id','desc')->get()
        ]);
    }

    public function registrasi_siswa()
    {
        return view('admin.perizinan.registrasi');
    }

    public function create_izin($slug)
    {
        // dd(auth()->user()->username);
        return view('admin.perizinan.create',[
            'title1' => 'Perizinan',
            'title2' => 'daftar_perizinan',
            'data' => RegisSiswaIzin::where('slug',$slug)->get()
        ]);
    }

    public function view_import()
    {
        
        return view('admin.perizinan.import',[
            'title1' => 'Perizinan',
            'title2' => 'daftar_perizinan',
        ]);
    }

    public function import()
    {
        // dd($request);
        Excel::import(new IzinSiswaImport, request()->file('file'));

        return redirect('/admin/perizinan/')->with('sukses', 'Sukses menambahkan beberapa perizinan baru');
    }
}
