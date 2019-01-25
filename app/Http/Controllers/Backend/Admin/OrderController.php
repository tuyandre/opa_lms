<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{

    /**
     * Display a listing of Orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::get();
        return view('backend.orders.index', compact('orders'));
    }

    /**
     * Display a listing of Courses via ajax DataTable.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData(Request $request)
    {
        if (request('offline_requests') == 1) {

            $orders = Order::where('payment_type','=',3)->get();
        } else {
            $orders = Order::all();
        }

        return DataTables::of($orders)
            ->addColumn('actions', function ($q) use ($request) {
                $view = "";

                $view = view('backend.datatable.action-view')
                    ->with(['route' => route('admin.orders.show', ['order' => $q->id])])->render();

                if($q->status == 0){
                    $complete_order = view('backend.datatable.action-complete-order')
                        ->with(['route' => route('admin.orders.complete', ['order' => $q->id])])
                        ->render();
                    $view .= $complete_order;
                }

                $delete = view('backend.datatable.action-delete')
                    ->with(['route' => route('admin.orders.destroy', ['order' => $q->id])])
                    ->render();

                $view .= $delete;

                return $view;

            })
            ->addColumn('items', function ($q) {
                $items = "";
                foreach ($q->items as $key=>$item){
                    $key++;
                    $items .= "<a class='text-decoration-none' target='_blank' href='".route('admin.courses.show',$item->course_id)."'> ". $key.'. '.$item->course->title ."</a>";
                }
                return $items;
            })
            ->addColumn('user_email', function ($q) {
               return $q->user->email;
            })
            ->addColumn('date', function ($q) {
                return  $q->updated_at->format('d M, Y | h:i A');
            })
            ->addColumn('payment', function ($q) {
                if($q->status == 0){
                   $payment_status = trans('labels.backend.orders.fields.payment_status.pending');
                }elseif($q->status == 1){
                    $payment_status = trans('labels.backend.orders.fields.payment_status.completed');
                }else{
                    $payment_status = trans('labels.backend.orders.fields.payment_status.failed');
                }
                return $payment_status;
            })
            ->addColumn('price', function ($q) {
                return  '$'.floatval($q->price);
            })

            ->rawColumns(['items','actions'])
            ->make();
    }


    public function complete(Request $request){
        $order = Order::findOrfail($request->order);
        $order->status = 1;
        $order->save();
        return back()->withFlashSuccess(trans('alerts.backend.general.updated'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('backend.orders.show', compact('order'));
    }

    /**
     * Remove Test from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $order = Order::findOrFail($id);
        $order->items()->delete();
        $order->delete();
        return redirect()->route('admin.orders.index')->withFlashSuccess(trans('alerts.backend.general.deleted'));
    }

}
