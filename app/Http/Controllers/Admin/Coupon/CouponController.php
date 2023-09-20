<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function list()
    {
        $coupon = Coupon::latest()->get();
        return view('admin.coupon.list', compact('coupon'));
    }
    public function form($id = null)
    {
        if (!empty($id)) {
            $coupon = Coupon::findOrFail($id);

            return view('admin.coupon.form', compact('coupon'));
        } else {
            return view('admin.coupon.form');
        }
    }

    public function submit(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id' => 'nullable|numeric|exists:coupons,id',
            'coupons_name' => 'required|string|max:100',
            'coupons_code' => 'required|unique:coupons,coupons_code,'.$request->post('id'),
            'coupons_value' => 'required|numeric',
            'type' => 'required'

        ]);
        $id = $request->input('id');
        if (!empty($id)) {
            $coupon = Coupon::findOrFail($id);
            $this->couponSave($coupon, $request);
            return back()->with('success', 'Coupon Updated Successfully');
        } else {
            $this->couponSave(new Coupon(), $request);
            return back()->with('success', 'Coupon Added Successfully');
        }
    }

    private function couponSave(Coupon $coupon, Request $request)
    {
        $coupon->coupons_name = $request->input('coupons_name');
        $coupon->coupons_code = $request->input('coupons_code');
        $coupon->coupons_value = $request->input('coupons_value');
        $coupon->type = $request->input('type');
        $coupon->min_order_amt = $request->input('min_order_amt');
        $coupon->is_one_time = $request->input('is_one_time');
        $coupon->save();
        return true;
    }
    public function status($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->status = $coupon->status == 1 ? 2 : 1;
        $coupon->save();
        return back()->with('success', 'Status Updated Successfully');
    }

    public function delete(Request $request)
    {
        try {
            $data = Coupon::findOrFail($request->id);
            $data->delete();
            return response()->json(['success' => true, 'message' => 'Delete Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
