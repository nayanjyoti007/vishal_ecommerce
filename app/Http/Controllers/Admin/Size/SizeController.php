<?php

namespace App\Http\Controllers\Admin\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Rules\IndianPanCard;

class SizeController extends Controller
{
    public function list()
    {
        $size = Size::latest()->get();
        return view('admin.size.list', compact('size'));
    }
    public function form($id = null)
    {
        if (!empty($id)) {
            $size = Size::findOrFail($id);

            return view('admin.size.form', compact('size'));
        } else {
            return view('admin.size.form');
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());

        
        $this->validate($request, [
            'id' => 'nullable|numeric|exists:sizes,id',
            'name' => 'required|unique:sizes,size,'.$request->post('id'),

            // 'name' => ['required', new IndianPanCard],

        ]);
        $id = $request->input('id');
        if (!empty($id)) {
            $size = Size::findOrFail($id);
            $this->SizeSave($size, $request);
            return back()->with('success', 'Size Updated Successfully');
        } else {
            $this->SizeSave(new Size(), $request);
            return back()->with('success', 'Size Added Successfully');
        }
    }

    private function SizeSave(Size $size, Request $request)
    {
        $size->size = $request->input('name');
        $size->save();
        return true;
    }

    public function status($id)
    {
        $size = Size::findOrFail($id);
        $size->status = $size->status == 1 ? 2 : 1;
        $size->save();
        return back()->with('success', 'Status Updated Successfully');
    }

    public function delete(Request $request)
    {
        try {
            $data = Size::findOrFail($request->id);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
