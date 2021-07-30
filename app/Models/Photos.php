<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    use HasFactory;
    protected $table = "tb_photos";
    protected $primaryKey = 'id_photos';
    protected $fillable = ['date_photos', 'title_photos', 'text_photos'];
    protected $foreignKey = 'id_post';
}
