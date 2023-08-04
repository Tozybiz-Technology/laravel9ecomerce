<?php

namespace App\Http\Controllers\Admin;
use App\Models\order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class orderController extends Controller
{
public function viewOrder(){
    $orders=order::where('status', '0')->get();
    return view('admin.view-order',compact('orders'));
}

public function ordersView($id){
    $orders=order::where('id', $id)->first();
    return view('admin.ordersview',compact('orders'));
}

public function updateOrder(Request $req, $id){
    $orders=order::find($id);
    $orders->status=$req->input('order_status');
    $orders->update();
    return redirect()->back()->with('status', "Order updated successfully");
}
public function orderHistory(){
    $orders=order::where('status', '1')->get();
    return view('admin.history',compact('orders'));
}
public function print_PDF($id){
    $order=order::find($id);
 $pdf = PDF::loadView('admin.orderpdf', compact('order'))->setOptions(['defaultFont' => 'sans-serif']);
 return $pdf->download('order_details.pdf');  
}
}

?>
