<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestasiNonAkademik extends Model
{
    protected $table = 'prestasi_non_akademik';
    protected $primaryKey = 'id_prestasi_nonakademik';
    protected $guarded = [];
}
