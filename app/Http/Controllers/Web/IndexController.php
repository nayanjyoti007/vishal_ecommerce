<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {

        $sliders = DB::table('home_sliders')->get();

        $category['home_category'] = DB::table('categories')->where('status', 1)->where('show_in_home', 1)->get();

        foreach ($category['home_category'] as $list) {
            $category['home_category_product'][$list->id] = DB::table('products')->where('category_id', $list->id)->where('status', 1)->get();

            foreach ($category['home_category_product'][$list->id] as $list1) {
                $category['home_category_product_attr'][$list1->id] = DB::table('product_attributes')
                    ->leftJoin('sizes', 'sizes.id', '=', 'product_attributes.size_id')
                    ->leftJoin('colors', 'colors.id', '=', 'product_attributes.color_id')
                    ->where('product_attributes.status', 1)->where('product_attributes.product_id', $list1->id)
                    ->select(DB::raw('MIN(product_attributes.price) AS minPrice, MAX(product_attributes.price) AS maxPrice'))
                    ->get();
            }
        }

        // dd($category);

        // foreach($category['home_category_product'] as $list){
        //     if(isset($list[0])){
        //         foreach($list as $hcpa){
        //             $category['home_category_product_attr'][$hcpa->id] = DB::table('product_attributes')
        //             ->leftJoin('sizes', 'sizes.id', '=', 'product_attributes.size_id')
        //             ->leftJoin('colors', 'colors.id', '=', 'product_attributes.color_id')
        //             ->where('product_attributes.status', 1)->where('product_attributes.product_id',$hcpa->id)->get();
        //         }
        //     }
        // }



        return view('web.index', compact('sliders', 'category'));
    }


    public function productDetails($product_slug)
    {

        $result['product'] = DB::table('products')->where('slug', $product_slug)->where('status', 1)->first();

        $result['product_attributes'] = DB::table('product_attributes')
            ->leftJoin('sizes', 'sizes.id', '=', 'product_attributes.size_id')
            ->leftJoin('colors', 'colors.id', '=', 'product_attributes.color_id')
            ->where('product_attributes.status', 1)->where('product_attributes.product_id', $result['product']->id)
            ->select('product_attributes.id', 'product_attributes.mrp', 'product_attributes.price', 'product_attributes.qty', 'product_attributes.size_id', 'product_attributes.color_id', 'product_attributes.attr_image','colors.color','sizes.size')
            ->get();

// dd($result);
            $result['product_images'] = DB::table('product_images')
            ->where('product_images.status', 1)->where('product_images.product_id', $result['product']->id)
            ->get();


        $result['product_attributes_price_min_max'] = DB::table('product_attributes')
            ->leftJoin('sizes', 'sizes.id', '=', 'product_attributes.size_id')
            ->leftJoin('colors', 'colors.id', '=', 'product_attributes.color_id')
            ->where('product_attributes.status', 1)->where('product_attributes.product_id', $result['product']->id)
            ->select(DB::raw('MIN(product_attributes.price) AS minPrice, MAX(product_attributes.price) AS maxPrice'))
            ->get();



        $result['related_products'] = DB::table('products')->where('category_id', $result['product']->category_id)->where('id', '!=', $result['product']->id)->where('status', 1)->get();

        foreach ($result['related_products'] as $listProduct) {
            $result['related_products_attributes'][$listProduct->id] = DB::table('product_attributes')
                ->leftJoin('sizes', 'sizes.id', '=', 'product_attributes.size_id')
                ->leftJoin('colors', 'colors.id', '=', 'product_attributes.color_id')
                ->where('product_attributes.status', 1)->where('product_attributes.product_id', $listProduct->id)
                ->select(DB::raw('MIN(product_attributes.price) AS minPrice, MAX(product_attributes.price) AS maxPrice'))
                ->get();
        }


        // dd($result);

        return view('web.product', compact('result'));
    }
}
