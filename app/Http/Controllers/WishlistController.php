<?php

namespace App\Http\Controllers;

use App\ViewModels\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function storewishlist(Request $request){
        $product_id = $request->product_id;
        if(Wishlist::where('user_id',Auth::id())->where('product_id',$product_id)->exists())
        {
            return response()->json(['status'=>'Product is already Added to Wishlist']);
        }
        else {
            
            $wishlist = new Wishlist();
            $wishlist ->user_id = Auth::id();
            $wishlist -> product_id = $product_id;
            $wishlist -> save();
            return response()->json(['status'=>'Product is Added to Wishlist']);
        }
    }
}
