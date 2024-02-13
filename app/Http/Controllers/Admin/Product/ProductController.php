<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Size;
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

        $color = Color::latest()->where('status', 1)->get();
        $size = Size::latest()->where('status', 1)->get();
        // $product = Product::where('id', $product_id)->first();

        $category = Category::latest()->where('status', 1)->get();
        $brand = Brand::latest()->where('status', 1)->get();

        if (!empty($id)) {
            $countAttribute = ProductAttribute::where('product_id', $id)->count();
            $product = Product::findOrFail($id);
            $productAttData = ProductAttribute::where('product_id', $id)->get();
            // dd($productAttData);
            return view('admin.product.form', compact('countAttribute', 'product', 'category', 'brand', 'color', 'size', 'productAttData'));
        } else {
            $countAttribute = 1;
            return view('admin.product.form', compact('countAttribute', 'category', 'brand', 'color', 'size'));
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'id' => 'nullable|numeric|exists:products,id',
            'name' => 'required|string|max:100',
            'slug' => 'required|unique:products,slug,' . $request->post('id'),
            'category_id' => 'required|numeric|exists:categories,id',
            'brand' => 'required|numeric',
            'image' => 'required_without:id|image|mimes:jpg,png,jpeg|max:2048',
            'short_description' => 'required',
            'long_description' => 'required',
            'keywords' => 'required',

            'have_attribute' => 'required|numeric',
            'sku.*' => 'required_if:have_attribute,=,1',
            'mrp.*' => 'required_if:have_attribute,=,1|numeric|gte:1',
            'price.*' => 'required_if:have_attribute,=,1|numeric|gte:1',
            'size_id.*' => 'required_if:have_attribute,=,1|numeric|gte:1',
            'color_id.*' => 'required_if:have_attribute,=,1|numeric|gte:1',
            'qty.*' => 'required_if:have_attribute,=,1',
            // 'atimage.*' => 'required_if:have_attribute,=,1|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $id = $request->input('id');

        if (!empty($id)) {
            $product = Product::findOrFail($id);
            $this->productSave($product, $request);
            // return back()->with('success', 'Product Updated Successfully');
            return response()->json(['success' => 200, 'message' => "Product Updated Successfully'"]);
        } else {
            $this->productSave(new Product(), $request);
            // return back()->with('success', 'Product Added Successfully');
            return response()->json(['success' => 200, 'message' => "Product Added Successfully"]);
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

        // $product->is_promo = $request->input('is_promo');
        // $product->is_featured = $request->input('is_featured');
        // $product->is_discounted = $request->input('is_discounted');
        // $product->is_tranding = $request->input('is_tranding');

        $product->short_description = $request->input('short_description');
        $product->long_description = $request->input('long_description');
        $product->keywords = $request->input('keywords');
        $product->technical_specifications = $request->input('technical_specifications');
        $product->uses = $request->input('uses');
        $product->warranty = $request->input('warranty');
        $product->have_attribute = $request->input('have_attribute');
        $product->save();


        if ($request->have_attribute == 0) {
            $remove = ProductAttribute::where('product_id', $request->id)->get();

            foreach ($remove as $productAttr) {
                // Delete the associated image for each ProductAttribute
                ImageService::delete($productAttr->attr_image);

                // Optionally, you may want to delete the ProductAttribute itself
                $productAttr->delete();
            }
        } else {
            foreach ($request->sku as $key => $value) {
                $idd = $request->product_attrID[$key];
                // dd($idd);
                if ($idd != null) {
                    $productAttr = ProductAttribute::where('id', $idd)->first();
                } else {
                    $productAttr = new ProductAttribute();
                }

                // Handle image upload separately outside the SKU loop
                if ($request->hasFile('atimage') && isset($request->file('atimage')[$key])) {
                    ImageService::delete($productAttr->attr_image);
                    $productAttr->attr_image = ImageService::save($request->file('atimage')[$key]);
                }

                // Populate other attributes and save the ProductAttribute
                $productAttr->product_id = $product->id;
                $productAttr->sku = $request->sku[$key];
                $productAttr->mrp = $request->mrp[$key];
                $productAttr->price = $request->price[$key];
                $productAttr->qty = $request->qty[$key];
                $productAttr->size_id = $request->size_id[$key];
                $productAttr->color_id = $request->color_id[$key];
                $productAttr->save();
            }
        }




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

    public function attDelete(Request $request)
    {
        try {
            $data = ProductAttribute::findOrFail($request->id);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
