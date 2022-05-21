<?php

namespace App\ViewModels;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlists';
    protected $fillables = [
        'user_id',
        'product_id',
        'status'
    ];
}
