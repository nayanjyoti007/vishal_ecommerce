<?php

namespace App\Http\Controllers\Admin\Color;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function list()
    {
        $color = Color::latest()->get();
        return view('admin.color.list', compact('color'));
    }
    public function form($id = null)
    {
        if (!empty($id)) {
            $color = Color::findOrFail($id);

            return view('admin.color.form', compact('color'));
        } else {
            return view('admin.color.form');
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id' => 'nullable|numeric|exists:colors,id',
            'name' => 'required|unique:colors,color,'.$request->post('id'),

        ]);
        $id = $request->input('id');
        if (!empty($id)) {
            $color = Color::findOrFail($id);
            $this->ColorSave($color, $request);
            return back()->with('success', 'Size Updated Successfully');
        } else {
            $this->ColorSave(new Color(), $request);
            return back()->with('success', 'Size Added Successfully');
        }
    }

    private function ColorSave(Color $color, Request $request)
    {
        $color->color = $request->input('name');
        $color->save();
        return true;
    }

    public function status($id)
    {
        $color = Color::findOrFail($id);
        $color->status = $color->status == 1 ? 2 : 1;
        $color->save();
        return back()->with('success', 'Status Updated Successfully');
    }

    public function delete(Request $request)
    {
        try {
            $data = Color::findOrFail($request->id);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
