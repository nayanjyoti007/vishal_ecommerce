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

?>