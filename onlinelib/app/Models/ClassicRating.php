<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassicRating extends Model
{
    use HasFactory;

    protected $table = 'Classic_books_ratings';

    protected $fillable = [
        'grade',
        'user_id',
        'book_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function book()
    {
        return $this->belongsTo(ClassicBook::class, 'book_id');
    }
}
