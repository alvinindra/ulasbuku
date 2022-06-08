<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';
    protected $primaryKey = 'id';

    protected $fillable = ['id','review_content','rating','id_book','id_user'];

    public function book(){
        return $this->belongsTo('App\Models\Book','id_book');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','id_user');
    }
}
