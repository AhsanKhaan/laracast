<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','slug'];

    public function posts(){//foriegn key is post id
        return $this->hasMany(Post::class);//over write with second args
    }
}
