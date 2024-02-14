<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'name',
        'title_id',
        'category_id',
        'creator_id',
        'mod_id',
        'editor_id',
    ];
}
