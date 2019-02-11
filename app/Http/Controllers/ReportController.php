<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Controllers\Session;
use Illuminate\View\View;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //Display Result Based on date  between
        //Display Result Based on date
        //Display Result Based on daily  date
        $date = $request->input('date');
        $daily_orders = DB::table('orders')->where('created_at', 'like', "$date%")->get();


        return view('admin.report.order', compact('daily_orderss'));
    }


    public function between_date_order(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

       
        $daily_orderss = DB::table('orders')
        ->whereBetween('created_at' ,[$from, $to])->get();

        return view('admin.report.order_between', compact('daily_orderss'));
    }


    /**
     * Display a listing of the daily order 
     *
     * @return \Illuminate\Http\Response
     */
    public function daily_order(Request $request)
    {
        //Display Result Based on daily  date
        $date = $request->input('date');
        $daily_orders = DB::table('orders')->where('created_at', $date)->get();

        return view('admin.report.order', compact('daily_orders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
