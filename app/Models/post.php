<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class, "post_id");
    }
    public function categories(){
        return $this->belongsTo(Category::class, "category_id");
    }
    public function users(){
        return $this->belongsTo(User::class, "user_id");
    }
}
