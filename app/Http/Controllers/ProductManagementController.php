<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Controllers\Session;
use Illuminate\View\View;


class ProductManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
     
        //Display Order List
        $all_latest_orders = DB::table('orders')
            ->join('users', 'orders.customer_id', '=', 'users.id')
            ->where('orders.order_status', '=', 'Pending')
            ->select('orders.*', 'users.name')
            ->get();
        return view('admin.order.display_order', compact('all_latest_orders'));
    
    }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function all_order_view()
    {
     
        //Display Order List
        $all_latest_orders = DB::table('orders')
            ->join('users', 'orders.customer_id', '=', 'users.id')
            // ->where('orders.order_status', '=', 'Pending')
            ->select('orders.*', 'users.name')
            ->get();
        return view('admin.order.display_order', compact('all_latest_orders'));
    
    }

    

     /**
     * Display a listing of top_rated_seller
     *
     * @return \Illuminate\Http\Response
     */

    public function top_rated_seller()
    {
     
        //Display Order List
        $all_latest_orders = DB::table('orders')
            ->join('users', 'orders.customer_id', '=', 'users.id')
            ->select('orders.*', 'users.name')
            ->get();
        return view('admin.order.top_rated_customer', compact('all_latest_orders'));
    
    }
   


    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function order_details($id)
    {
        $customer_id = \Session::get('customer_id');

       //Display Order Details
        $order_details = DB::table('orders')
            ->join('users', 'orders.customer_id', '=', 'users.id')
            ->join('shippings', 'orders.shipping_id', '=', 'shippings.id')
            ->join('payments', 'orders.payment_id', '=', 'payments.id')
            ->select('orders.*', 'users.*', 'shippings.*', 'payments.*')
            ->where('orders.id', '=', $id)      
            ->first();

        $display_order_details = DB::table('orders')
            ->join('order_details', 'order_details.order_id', '=', 'orders.id')
            ->select('orders.*','order_details.*')
            // ->where('orders.customer_id','=',$customer_id)           
            ->where('orders.id', '=', $id)      
            ->get();

        return view('admin.order.order_details', compact(['order_details', 'id','display_order_details']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function success($id)
    {

        DB::table('orders')
            ->where('id', $id)
            ->update(['order_status' => 'success']);

        return redirect('adminpanel/latest/order');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /** **********************  Product Details *******************************
     * Display Product Details
     *
     * @return \Illuminate\Http\Response
     */

    public function product_details($id)
    {
        $single_product_detail = DB::table('tproducts')->where('id',$id)->first();
        $result =  DB::table('recent_views')->where('product_id',$id)->first();
         if($result){
       
            }else{
                $session_id = \Session::getId();
                $created_at = Carbon::now();
                //Add Data into  Wish List
                   DB::table('recent_views')->insert(
                            [
                                'product_id' => $id,
        
                                'session_id' => $session_id,
        
                                'created_at' => $created_at
        
                            ]
                        ); 
            }
    return view('fornt.product_details.product_details',compact('single_product_detail'));
    }
}
