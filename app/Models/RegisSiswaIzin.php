<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Perizinan;

class RegisSiswaIzin extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function izin()
    {
        return $this->hasMany(Perizinan::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_siswa'
            ]
        ];
    }
    
}
