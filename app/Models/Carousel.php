<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $table = 'carousel';
    protected $primaryKey = 'id_carousel';
    protected $guarded = [];
}
