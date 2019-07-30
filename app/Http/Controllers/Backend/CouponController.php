<?php

namespace App\Http\Controllers\Backend;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CouponController extends Controller
{
    /**
     * Display a listing of Taxes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::orderBy('created_at', 'desc')
            ->get();
        return view('backend.coupons.index',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'type' => 'required',
            'amount' => 'required',
        ]);

        $tax = Coupon::where('name','=',$request->name)->first();
        if($tax == null){
            $tax = new Coupon();
            $tax->name = $request->name;
            $tax->amount = $request->amount;
            $tax->save();
        }

        return redirect()->route('admin.coupons.index')->withFlashSuccess(trans('alerts.backend.general.created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tax = Coupon::findOrFail($id);
        return view('backend.coupons.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'rate' => 'required',
        ]);

        $tax = Coupon::findOrFail($id);
        if($tax != null){
            $tax->name = $request->name;
            $tax->rate = $request->rate;
            $tax->save();
            return redirect()->route('admin.coupons.index')->withFlashSuccess(trans('alerts.backend.general.updated'));
        }
        return abort(404);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tax = Coupon::findOrFail($id);
        $tax->delete();
        return back()->withFlashSuccess(trans('alerts.backend.general.deleted'));

    }


    public function status($id)
    {
        $tax = Coupon::findOrFail($id);
        if ($tax->status == 1) {
            $tax->status = 0;
        } else {
            $tax->status = 1;
        }
        $tax->save();

        return back()->withFlashSuccess(trans('alerts.backend.general.updated'));
    }
}
