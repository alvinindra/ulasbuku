<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    protected $primaryKey = 'id';

    protected $fillable = ['id','title','description','cover','id_category','id_author','id_publisher'];

    public function category(){
        return $this->belongsTo('App\Models\Category','id_category');
    }

    public function author(){
        return $this->belongsTo('App\Models\Author','id_author');
    }

    public function publisher(){
        return $this->belongsTo('App\Models\Publisher','id_publisher');
    }
}
