<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Services\ImageService;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list()
    {
        $brand = Brand::latest()->get();
        return view('admin.brand.list', compact('brand'));
    }
    public function form($id = null)
    {
        if (!empty($id)) {
            $brand = Brand::findOrFail($id);
            return view('admin.brand.form', compact('brand'));
        } else {
            return view('admin.brand.form');
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id' => 'nullable|numeric|exists:brands,id',
            'name' => 'required|string|max:100',
            'slug' => 'required|unique:brands,slug,'.$request->post('id'),
            'parent_cat_id' => 'nullable|numeric|exists:brands,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $id = $request->input('id');
        if (!empty($id)) {
            $brand = Brand::findOrFail($id);
            $this->brandSave($brand, $request);
            return back()->with('success', 'Brand Updated Successfully');
        } else {
            $this->brandSave(new Brand(), $request);
            return back()->with('success', 'Brand Added Successfully');
        }
    }

    private function brandSave(Brand $brand, Request $request)
    {
        if ($request->hasFile('image')) {
            ImageService::delete($brand->image);
            $brand->image = ImageService::save($request->file('image'));
        }
        $brand->name = $request->input('name');
        $brand->slug = $request->input('slug');
        $brand->save();
        return true;
    }

    public function status($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->status = $brand->status == 1 ? 2 : 1;
        $brand->save();
        return back()->with('success', 'Status Updated Successfully');
    }

    public function showHome($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->show_in_home = $brand->show_in_home == 1 ? 2 : 1;
        $brand->save();
        return back()->with('success', 'Show in Home Updated Successfully');
    }

    public function delete(Request $request)
    {
        try {
            $data = Brand::findOrFail($request->id);
            ImageService::delete($data->image);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
