<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookmarkType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $timestamps = false;

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}
