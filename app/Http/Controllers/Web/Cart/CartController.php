<?php

namespace App\Http\Controllers\Web\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function save(Request $request){
        // dd($request->all());

        $color_id = $request->input('color_id');
        $size_id = $request->input('size_id');
        $product_id = $request->input('product_id');
        $attr_id = $request->input('attr_id');
        $qty = $request->input('qty');

        if($request->session()->has('FRONT_USER_LOGIN')){
            $uid = $request->session()->get('FRONT_USER_LOGIN');
            $user_type = 1;
        }else{
            $uid = getUserTempID();
            $user_type = 2;
        }

        // $result = DB::table('product_attributes')->select('product_attributes.id')
        // ->leftJoin('colors', 'colors.id', 'product_attributes.color_id')
        // ->leftJoin('sizes', 'sizes.id', 'product_attributes.size_id')
        // ->where('product_attributes.product_id', $product_id)
        // ->where('product_attributes.color_id', $color_id)
        // ->where('product_attributes.size_id', $size_id)
        // ->first();
        // dd($result);


        $cart = Cart::where('product_id', $product_id)->where('product_attr_id', $attr_id)->where('user_id',$uid)->where('user_type', $user_type)->first();


        if (empty($cart)) {
            $cart = new Cart();
            $cart->product_id = $product_id;
            $cart->user_id = $uid;
            $cart->user_type = $user_type;
            $cart->qty = $qty;
            $cart->product_attr_id = $attr_id;
            $message = "Cart Add Successfully !!";
        } else {
            $cart->qty = $cart->qty + $qty;
            $message = "Cart Update Successfully !!";
        }
        if ($cart->save()) {
            return response()->json(['status' => 200, 'msg' => $message]);
        }

    }
}
