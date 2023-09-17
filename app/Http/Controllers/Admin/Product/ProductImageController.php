<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{

    public function product_images($id = null)
    {
        $product = Product::findOrFail($id);
        $product_images = ProductImage::where('product_id', $id)->get();
        return view('admin.product.product_images.form', compact('product', 'product_images'));
    }

    public function addMultipleImage(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id' => ' required|numeric|exists:products,id',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $id = $request->input('id');
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $product_image = new ProductImage();
                $product_image->product_id = $id;
                // dd('pp');
                $product_image->image = ImageService::save($file);
                $product_image->save();
            }
        }
        return back();
    }


    public function delete_image($id)
    {
        $product_image = ProductImage::where('id', $id)->first();
        ImageService::delete($product_image->images);
        $product_image->delete();
        return back();
    }

    public function delete(Request $request)
    {
        try {
            $data = ProductImage::findOrFail($request->id);
            ImageService::delete($data->images);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
