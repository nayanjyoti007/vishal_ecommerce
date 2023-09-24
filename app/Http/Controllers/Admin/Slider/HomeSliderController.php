<?php

namespace App\Http\Controllers\Admin\Slider;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;
use App\Services\ImageService;
use Illuminate\Http\Request;

class HomeSliderController extends Controller
{
    public function list()
    {
        $slider = HomeSlider::latest()->get();
        return view('admin.homeSlider.list', compact('slider'));
    }
    public function form($id = null)
    {
        if (!empty($id)) {
            $slider = HomeSlider::findOrFail($id);
            return view('admin.homeSlider.form', compact('slider'));
        } else {
            return view('admin.homeSlider.form');
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id' => 'nullable|numeric|exists:home_sliders,id',
            'heading' => 'required|string|max:100',
            'title' => 'required|string|max:100',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $id = $request->input('id');

        if (!empty($id)) {
            $slider = HomeSlider::findOrFail($id);
            $this->sliderSave($slider, $request);
            return back()->with('success', 'Slider Updated Successfully');
        } else {
            $this->sliderSave(new HomeSlider(), $request);
            return back()->with('success', 'Slider Added Successfully');
        }
    }

    private function sliderSave(HomeSlider $slider, Request $request)
    {
        if ($request->hasFile('image')) {
            ImageService::delete($slider->image);
            $slider->image = ImageService::save($request->file('image'));
        }
        $slider->heading = $request->input('heading');
        $slider->title = $request->input('title');
        $slider->save();
        return true;
    }


    public function delete(Request $request)
    {
        try {
            $data = HomeSlider::findOrFail($request->id);
            ImageService::delete($data->image);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
