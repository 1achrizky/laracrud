<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'slug', 'excerpt', 'body']; // FILLABLE: mana saja yg boleh diisi. Sisanya tidak boleh
    protected $guarded = ['id']; // GUARDED: id tidak boleh diisi, lainnya boleh.
    protected $with = ['category','author'];

    public function category(){
      return $this->belongsTo(Category::class); // 1 postingan, 1 category
    }
    
    public function author(){
      return $this->belongsTo(User::class, 'user_id'); // 1 postingan, 1 category
    }

    public function getRouteKeyName(){
      return 'slug';
    }
}
