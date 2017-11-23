<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Book;
use App\Review;

class Stats extends Model
{
    public static function show_statistics($text) 
    {
        $conditions = explode('|', $text);
        $name = $conditions[0];
        $condition = $conditions[1];
        
        $books = Book::all();
        foreach ($books as $book) {
            similar_text(strtolower($name), strtolower($book->name), $percent);
            $book->compatibility = $percent;
            $book->favg = $book->reviews->where('sex', 'f')->avg('age');
            $book->mavg = $book->reviews->where('sex', 'm')->avg('age');
        }
        
        return $books;
    }
}
