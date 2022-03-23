<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\RegisSiswaIzin;
use App\Models\User;

class Perizinan extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(RegisSiswaIzin::class,'regis_siswa_izin_id','id');
    }
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function pembina()
    {
        return $this->belongsToMany(User::class, 'perizinan_pembinas', 'user_id', 'perizinan_id');
    }
}
