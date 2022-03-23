<?php

namespace App\Imports;

use App\Models\Perizinan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Auth;

class IzinSiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = Auth::user()->username;
        if ($user === "mirzaromi") {
            $pembina = "Mirza Romi Setiawan";
        } elseif ($user === "muhammadromli") {
            $pembina = "Dr. Muhammad Romli";
        } elseif ($user === "ismizahria") {
            $pembina = "Ismi Zahria, S.Si, M.MT.";
        } else {
            $pembina = "Muhammad Risyad Rahaf Faldi, S.Si";
        }
        
        return new Perizinan([
            'regis_siswa_izin_id' => $row['regis_siswa_izin_id'],
            'kategori' => $row['kategori'],
            'waktu_mulai' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['waktu_mulai']),
            'waktu_selesai' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['waktu_selesai']),
            'keterangan' => $row['keterangan'],
            'pembina' => $pembina
        ]);
    }
}
