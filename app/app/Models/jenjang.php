<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenjang extends Model
{
    protected $table = 'jenjangs';
    protected $fillable = [
        'id',
        'kelas'
    ];

    public function pelajaran()
    {
        return $this->hasMany(Pelajaran::class);
    }
}
