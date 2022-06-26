<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = ['id','name_category', 'slug'];

    public function books()
    {
        return $this->hasMany('App\Models\Book', 'id_category');
    }
}
