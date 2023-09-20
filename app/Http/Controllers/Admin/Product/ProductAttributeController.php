<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Size;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ProductAttributeController extends Controller
{
    public function list($id)
    {
        $product_attr = ProductAttribute::latest()->where('product_id', $id)->get();
        return view('admin.product.attribute.list', compact('product_attr','id'));
    }
    public function form($id = null, $product_id)
    {
        $color = Color::latest()->where('status',1)->get();
        $size = Size::latest()->where('status',1)->get();
        $product = Product::where('id', $product_id)->first();
        
        
        if (!empty($id)) {
            $product_attr = ProductAttribute::findOrFail($id);

            return view('admin.product.attribute.form', compact('product_attr', 'size', 'color', 'product'));
        } else {
            return view('admin.product.attribute.form', compact('color', 'size', 'product'));
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());
    
        $this->validate($request, [
            'id' => 'nullable|numeric|exists:product_attributes,id',
            'product_id' => 'required|numeric|exists:products,id',
            'sku' => 'required|unique:product_attributes,sku,'.$request->post('id'),
            'mrp' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'color_id' => 'required|numeric|exists:colors,id',
            'size_id' => 'required|numeric|exists:sizes,id',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',

        ]);

        $id = $request->input('id');

        if (ProductAttribute::where('product_id', $request->input('product_id'))
        ->where('color_id', $request->input('color_id'))
        ->where('size_id', $request->input('size_id'))
        ->exists()) {
        // Create the product if it doesn't already exist
        return back()->with('error', 'Product with the same name and size already exists');
    } 

        if (!empty($id)) {
            $product_attr = ProductAttribute::findOrFail($id);
            $this->productAttrSave($product_attr, $request);
            return back()->with('success', 'Product Attribute Updated Successfully');
        } else {
            $this->productAttrSave(new ProductAttribute(), $request);
            return back()->with('success', 'Product Attribute Added Successfully');
        }
    }

    private function productAttrSave(ProductAttribute $product_attr, Request $request)
    {

        if ($request->hasFile('image')) {
            ImageService::delete($product_attr->image);
            $product_attr->attr_image = ImageService::save($request->file('image'));
        }
        
        $product_attr->product_id = $request->input('product_id');
        $product_attr->sku = $request->input('sku');
        $product_attr->mrp = $request->input('mrp');
        $product_attr->price = $request->input('price');
        $product_attr->size_id = $request->input('size_id');
        $product_attr->color_id = $request->input('color_id');
        $product_attr->qty = $request->input('qty');
        $product_attr->save();
        return true;
    }
    public function status($id)
    {
        $product_attr = ProductAttribute::findOrFail($id);
        $product_attr->status = $product_attr->status == 1 ? 2 : 1;
        $product_attr->save();
        return back()->with('success', 'Status Updated Successfully');
    }

    public function delete(Request $request)
    {
        try {
            $data = ProductAttribute::findOrFail($request->id);
            ImageService::delete($data->attr_image);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
