<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelajaran extends Model
{
    protected $table = 'pelajarans';
    protected $fillable = [
        'nama_pelajaran',
        'gambar',
        'jenjang_id'
    ];

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }

}
