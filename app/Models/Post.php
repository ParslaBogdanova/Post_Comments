<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    protected $timestamp = false;

    protected $fillable = [
        'post_id',
        'title',
        'content'
    ];

    public function comments(){
        return $this->hasMany(Comment::class, 'comment_id');
    }
}
