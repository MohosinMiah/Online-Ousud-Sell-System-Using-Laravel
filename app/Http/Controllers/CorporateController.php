<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use Illuminate\View\View;

class CorporateController extends Controller
{
 
    private $table ='corporates';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function action_list()
    {
        //Display All Corporate Order List

        $corporate_orders = DB::table($this->table)->orderby('id','asc')->get();
        return view('admin.corporate.actionlist',compact('corporate_orders'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display All Corporate Order List

        $corporate_orders = DB::table($this->table)->orderby('id','asc')->get();
        return view('admin.corporate.list',compact('corporate_orders'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //Display A Corporate Order Form 
        return view('fornt.corporate.create_order');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         *  Data  Validation.....
         */

        $v = Validator::make($request->all(), [
            'name' => 'required',
            'position' => 'required',
            'mobile' => 'required',
            'email' => 'required|unique:corporates|max:100',
            'company_name' => 'required',
            'address' => 'required',
            'details' => 'required',
        ]);


        /**
         * Get Data From User Input
         */
        $name = $request->input('name');
        $position = $request->input('position');
        $mobile = $request->input('mobile');
        $email = $request->input('email');
        $company_name = $request->input('company_name');
        $address = $request->input('address');
        $details = $request->input('details');

        $created_at = Carbon::now();

       


        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Send  Data.Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');
          
                DB::table('corporates')->insert(
                    [
                        'name' => $name,
                        'position' => $position,
                        'mobile' => $mobile,
                        'email' => $email,
                        'company_name' => $company_name,
                        'address' => $address,
                        'details' => $details,
                        'created_at' => $created_at
                    ]
                );
            

            
            \Session::flash('message', 'Send  Successfully ....... ');

            return redirect('/corporate/order');

        }
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
        //Delete Item from Table 
         //Display All Corporate Order List

         DB::table($this->table)->where('id',$id)->delete();
        return redirect('/adminpanel/corporate/order/action');
    }
}
