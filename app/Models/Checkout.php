<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table="checkout";
    protected $primaryKey="id";

    
    protected $fillable = [
        'seller_id', 'buyer_id', 'book_id', 'fname', 'lname', 'phone_number',
         'address', 'state', 'pincode',
    ];
   
    function getUser()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

    // Define the relationship with the User model (assuming the foreign key is 'user_id')
    public function user()
    {
        // return $this->belongsTo('App\Models\User', 'seller_id');
        return $this->belongsTo(User::class, 'id','seller_id');
    }

    // Define the relationship with the Post model (assuming the foreign key is 'post_id')
    public function post()
    {
        return $this->belongsTo(Post::class, 'book_id');
    }
}
