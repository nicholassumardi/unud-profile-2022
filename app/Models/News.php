<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id_news';
    protected $guarded = [];

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'id_admin');
    }
}
