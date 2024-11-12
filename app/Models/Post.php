<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;






    public function category(){
        return $this->belongsTo(Post::class);
}







    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    protected $fillable = [
        'title',
        'author',
        'thumb',
        'date',
        'description',
    ];
}
