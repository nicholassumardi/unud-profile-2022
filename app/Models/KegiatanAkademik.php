<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanAkademik extends Model
{
    protected $table = 'kegiatan_akademik';
    protected $primaryKey = 'id_kegiatan_akademik';
    protected $guarded = [];
}
