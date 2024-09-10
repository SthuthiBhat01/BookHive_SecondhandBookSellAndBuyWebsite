<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $table="posts";
    // protected $primaryKey="id";
// public $timestamps=false;
    protected $fillable = ['user_id','image', 'book_title', 'book_description', 'author_name','condition','price','book_type','name','phone_number','pincode'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
