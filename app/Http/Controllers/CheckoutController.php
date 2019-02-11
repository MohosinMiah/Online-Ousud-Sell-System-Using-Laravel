<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use Illuminate\View\View;
use App\Http\Controllers\Session;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $customer_id = Auth::user()->id;
            $shipping_info = DB::table('shippings')->where('customer_id', $customer_id)->first();
            
        //Display Cart And Order 
            return view('fornt.cart.cart_review', compact('shipping_info'));
        } else {
            return view('/');
        }



    }
    /**
     * Place Order
     *
  
     */
    public function place_order(Request $request)
    {
      //Start  Insert Data in Payments Table 

        /**
         *  Data  Validation.....
         */

        $v = Validator::make($request->all(), [
            'payment_method' => 'required'

        ]);

        /**
         * Get Data From User Input
         */
        $payment_method = $request->input('payment_method');
        $payment_status = 'Pending';
        $created_at = Carbon::now();

        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
             $check_or_type = \Session::get('location_store');
              $delivery_type = "Inside Dhaka";
             if($check_or_type == 1){
                 $delivery_type = "Inside Dhaka";
             }elseif ($check_or_type == 0) {
                $delivery_type = "OutSide Dhaka";
            }elseif ($check_or_type == 2) {
                $delivery_type = "Emergency Delivery";

             }

            DB::table('payments')->insert(
                [
                    'payment_method' => $payment_method,
                    'payment_status' => $payment_status,
                    'order_type' => $delivery_type,
                    'created_at' => $created_at
                ]
            );
                //Store Payment ID in session
            $payment_id = DB::getPdo()->lastInsertId();
            \Session::put('payment_id', $payment_id);
        }

    //************ */ End Insert Data in Payments Table  **************************

      // Start Insert Data in orders Table 
        $customer_id = \Session::get('customer_id');
        $shipping_id = \Session::get('shipping_id');
        $order_total = \Session::get('total_order_amount_total');
        $order_status = "Pending";
        // $pay_id = \Session::get('payment_id');  
        $result = DB::table('orders')->insert(
            [
                'customer_id' => $customer_id,
                'shipping_id' => $shipping_id,
                'payment_id' => $payment_id,
                'order_total' => $order_total,
                'order_status' => $order_status,
                'created_at' => $created_at
            ]
        );
        if ($result) {
        //Store Order ID in session
            $order_id = DB::getPdo()->lastInsertId();
            \Session::put('order_id', $order_id);
        }
        
    //************ */ End Insert Data in Orders Table  **************************

      // Start Insert Data in order_details Table 

        $session_id = \Session::getId();
        $cartinfos = DB::table('carts')->where('session_id', $session_id)->get();
        foreach ($cartinfos as $cartinfo) {


            DB::table('order_details')->insert(
                [
                    'order_id' => $order_id,
                    'product_id' => $cartinfo->product_id,
                    'product_name' => $cartinfo->product_name,
                    'product_price' => $cartinfo->price,
                    'product_quantity' => $cartinfo->qty,
                    'created_at' => $created_at
                ]
            );

        }

        $session_id = \Session::getId();
        $cartinfos = DB::table('carts')->where('session_id', $session_id)->delete();
        $request->session()->regenerate();
        if ($result) {
            if ($payment_method == 'HandDelivery') {
                return redirect('/place_order/status');
               

            } elseif ($payment_method == 'MasterCard') {
                echo "MasterCard";
            }
        }

     


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function place_order_status()
    {
        return  view('fornt.cart.status');
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
    public function show($id)
    {
        //
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
}
