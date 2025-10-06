<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasUlids;
    // UUID
    public $incrementing = false;
    protected $keyType = 'string';
    
    //table
    protected $table = 'books';

    // fillable fields
    protected $fillable = [
        'title',
        'description',
        'author',
    ];

}
