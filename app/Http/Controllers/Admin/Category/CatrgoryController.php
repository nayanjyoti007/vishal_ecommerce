<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\ImageService;
use Illuminate\Http\Request;

class CatrgoryController extends Controller
{
    public function list()
    {
        $category = Category::latest()->get();
        return view('admin.category.list', compact('category'));
    }
    public function form($id = null)
    {
       
        if (!empty($id)) {
            $category = Category::findOrFail($id);
            $allCateegory = Category::latest()->where('id', '!=', $id)->where('status',1)->get();
            return view('admin.category.form', compact('category', 'allCateegory'));
        } else {
            $allCateegory = Category::latest()->where('status',1)->get();
            return view('admin.category.form', compact('allCateegory'));
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id' => 'nullable|numeric|exists:categories,id',
            'name' => 'required|string|max:100',
            'slug' => 'required|unique:categories,slug_name,'.$request->post('id'),
            'parent_cat_id' => 'nullable|numeric|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $id = $request->input('id');
        if (!empty($id)) {
            $category = Category::findOrFail($id);
            $this->categorySave($category, $request);
            return back()->with('success', 'Category Updated Successfully');
        } else {
            $this->categorySave(new Category(), $request);
            return back()->with('success', 'Category Added Successfully');
        }
    }

    private function categorySave(Category $category, Request $request)
    {
        if ($request->hasFile('image')) {
            ImageService::delete($category->image);
            $category->image = ImageService::save($request->file('image'));
        }
        $category->name = $request->input('name');
        $category->slug_name = $request->input('slug');
        $category->parent_cat_id = $request->input('parent_cat_id');
        $category->save();
        return true;
    }
    public function status($id)
    {
        $category = Category::findOrFail($id);
        $category->status = $category->status == 1 ? 2 : 1;
        $category->save();
        return back()->with('success', 'Status Updated Successfully');
    }

    public function delete(Request $request)
    {
        try {
            $data = Category::findOrFail($request->id);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
