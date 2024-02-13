<?php

use Illuminate\Support\Facades\DB;


function prx($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

function getTopMenu(){
    $menuCategory = DB::table('categories')->where('status', 1)->get();
    // prx($menuCategory);
}

function getUserTempID(){
    if ((session()->has('USER_TEMP_ID') === null)) {

        $rand = rand(1111111111,99999999999);
        Session()->put('USER_TEMP_ID'.$rand);
        return $rand;
    } else {

        return Session()->get('USER_TEMP_ID');

    }
}


