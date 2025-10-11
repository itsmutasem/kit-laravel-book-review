<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, HasUuids;
    // UUID
    public $incrementing = false;
    protected $keyType = 'string';

    //table
    protected $table = 'books';

    // fillable fields
    protected $fillable = [
        'title',
        'description',
        'user_id',
    ];

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
