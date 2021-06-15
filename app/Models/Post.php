<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //While $fillable serves as a “white list” of attributes that should be mass assignable,
     //you may also choose to use $guarded. The $guarded property should contain an array of attributes
     // that you do not want to be mass assignable. All other attributes not in the array will be mass assignable.
     // So, $guarded functions like a “black list”. Of course, you should use either $fillable or $guarded — not both.
    //protected $fillable=['title','excerpt','body','slug'];

    protected $guarded=['id'];
    //used for returning query parameters to Route
    // public function getRoutKeyName(){
    //     return 'slug';
    // }
    public function category(){
        //elequont relationships
        //one-to-one:hasOne
        //one-t-one-inverse:belongsTo
        return $this->belongsTo(Category::class);
    }
    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }
}
