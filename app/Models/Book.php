<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    
    protected $primaryKey = 'book_id';
    protected $table = 'books';
    protected $fillable = ['title','author', 'year_published', 'number_of_pages','description', 'image'];


}
