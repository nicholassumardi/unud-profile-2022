<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanNonAkademik extends Model
{
    protected $table = 'kegiatan_non_akademik';
    protected $primaryKey = 'id_kegiatan_nonakademik';
    protected $guarded = [];
}
