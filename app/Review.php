<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'id';
    
    public function book()
    {
        
        return $this->hasOne('App\Book');
    }
}
