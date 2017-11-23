<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    
    public function reviews()
    {
        
        return $this->hasMany('App\Book');
    }
}
