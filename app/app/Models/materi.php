<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class materi extends Model
{
    protected $table = 'materis';
    protected $fillable = [
        'pelajaran_id',
        'judul_materi',
        'isi_materi'
    ];

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class);
    }
}
