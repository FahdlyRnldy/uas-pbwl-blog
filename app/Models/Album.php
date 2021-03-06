<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $table = "tb_album";
    protected $primaryKey = 'id_album';
    protected $fillable = ['name_album', 'text_album'];
    protected $foreignKey = 'id_photos';
}
