<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $product = Product::latest()->get();
        return view('admin.product.list', compact('product'));
    }
    public function form($id = null)
    {
        $category = Category::latest()->where('status',1)->get();
        
        if (!empty($id)) {
            $product = Product::findOrFail($id);

            return view('admin.product.form', compact('product', 'category'));
        } else {
            return view('admin.product.form', compact('category'));
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());
    
        $this->validate($request, [
            'id' => 'nullable|numeric|exists:products,id',
            'name' => 'required|string|max:100',
            'slug' => 'required|unique:products,slug,'.$request->post('id'),
            'category_id' => 'required|numeric|exists:categories,id',
            'brand' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'short_description' => 'required',
            'long_description' => 'required',
            'keywords' => 'required',

        ]);

        $id = $request->input('id');

        if (!empty($id)) {
            $product = Product::findOrFail($id);
            $this->productSave($product, $request);
            return back()->with('success', 'Product Updated Successfully');
        } else {
            $this->productSave(new Product(), $request);
            return back()->with('success', 'Product Added Successfully');
        }
    }

    private function productSave(Product $product, Request $request)
    {

        if ($request->hasFile('image')) {
            ImageService::delete($product->image);
            $product->image = ImageService::save($request->file('image'));
        }
        
        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->brand = $request->input('brand');
        $product->model = $request->input('model');
        $product->lead_time = $request->input('lead_time');
        $product->tax = $request->input('tax');
        $product->tax_type = $request->input('tax_type');
        $product->is_promo = $request->input('is_promo');
        $product->is_featured = $request->input('is_featured');
        $product->is_discounted = $request->input('is_discounted');
        $product->is_tranding = $request->input('is_tranding');
        $product->short_description = $request->input('short_description');
        $product->long_description = $request->input('long_description');
        $product->keywords = $request->input('keywords');
        $product->technical_specifications = $request->input('technical_specifications');
        $product->uses = $request->input('uses');
        $product->warranty = $request->input('warranty');
        $product->save();
        return true;
    }
    public function status($id)
    {
        $product = Product::findOrFail($id);
        $product->status = $product->status == 1 ? 2 : 1;
        $product->save();
        return back()->with('success', 'Status Updated Successfully');
    }

    public function delete(Request $request)
    {
        try {
            $data = Product::findOrFail($request->id);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
