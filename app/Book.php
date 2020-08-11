<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';     // optional
    protected $primaryKey = 'id';   // optional
    protected $fillable = ['title', 'author', 'description', 'price']; // required
}
