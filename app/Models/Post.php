<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "tb_post";
    protected $primaryKey = 'id_post';
    protected $fillable = ['date_post', 'slug_post', 'title_post', 'text_post'];
    protected $foreignKey = 'id_ctgr';
}
