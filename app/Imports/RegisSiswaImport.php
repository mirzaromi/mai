<?php

namespace App\Imports;

use App\Models\RegisSiswaIzin;
use Maatwebsite\Excel\Concerns\ToModel;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegisSiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new RegisSiswaIzin([
            'nama_siswa' => $row['nama_siswa'],
            'slug' => SlugService::createSlug(RegisSiswaIzin::class, 'slug', $row['nama_siswa']),
            'kelas' => $row['kelas'],
            'angkatan' => $row['angkatan'],
            'jk' => $row['jk']
        ]);
    }
}
