<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Controllers\Session;
use Illuminate\View\View;


class MyaccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        return view('fornt.myaccount.order_details',compact('id'));

    }

    /**
     * Display a listing of the My Order.
     *
     * @return \Illuminate\Http\Response
     */
    public function myorder_list()
    {
        $customer_id = Auth::user()->id;

       //Display Order List
       $all_latest_orders_by_users = DB::table('orders')
       ->join('users', 'orders.customer_id', '=', 'users.id')
       ->select('orders.*', 'users.name')
       ->where('orders.customer_id',$customer_id)
       ->get();

        return view('fornt.myaccount.order',compact('all_latest_orders_by_users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print_info()
    {
         $customer_id = Auth::user()->id;

       //Display Order List
       $all_latest_orders_by_users = DB::table('orders')
       ->join('users', 'orders.customer_id', '=', 'users.id')
       ->select('orders.*', 'users.name')
       ->where('orders.customer_id',$customer_id)
       ->get();

         return view('fornt.myaccount.order_info',compact('all_latest_orders_by_users'));
        
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
