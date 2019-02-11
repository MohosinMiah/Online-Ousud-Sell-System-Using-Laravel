<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Controllers\Session;
use Illuminate\View\View;
use Illuminate\Routing\Route;

class CustomerController extends Controller
{

    private $table = 'customers';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            $customer_id = Auth::user()->id;

            $shipping_info = DB::table('shippings')->where('customer_id', $customer_id)->first();

            return view('fornt.myaccount.shipping', compact('shipping_info'));
        } else {
            return redirect('/login');
        }
    }


    /**
     * Display shipping_info form
     *
     * @return \Illuminate\Http\Response
     */
    public function shipping()
    {
        return view('fornt.customer.shipping_info');

    }

   /**
    * How to Place Order
    */


    public function how_to_pace_order()
    {
        return view('fornt.pages.howplace_order');

    }

    /**
     * Display Customer List
     *
     * @return \Illuminate\Http\Response
     */
    public function customer_list()
    {

        $all_customer_lists = DB::table('users')
            ->join('shippings', 'users.id', '=', 'shippings.customer_id')
            ->select('users.name', 'shippings.*')
            ->get();

        return view('admin.customer.list', compact('all_customer_lists'));

    }



    /**
     * Display gust_shipping form
     *
     * @return \Illuminate\Http\Response
     */
    public function gust_shipping()
    {
        return view('fornt.guest.guest_shipping');

    }
    /**
     * Customer Details Information
     *
     * @return \Illuminate\Http\Response
     */

    public function customer_details_information($id)
    {
        $all_customer_lists = DB::table('users')
            ->join('shippings', 'users.id', '=', 'shippings.customer_id')
            ->where('users.id', '=', $id)
            ->select('users.*', 'shippings.*')
            ->first();

        return view('admin.customer.details', compact('all_customer_lists'));
    }

    /**
     * Display gust_shipping form
     *
     * @return \Illuminate\Http\Response
     */
    public function saveguest(Request $request)
    {


        /**
         *  Data  Validation.....
         */

        $v = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:guests',
            'house' => 'required',
            'road' => 'required',
            'area' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);


        /**
         * Get Data From User Input
         */


        $name = $request->input('name');

        $email = $request->input('email');

        $house = $request->input('house');

        $road = $request->input('road');

        $area = $request->input('area');

        $city = $request->input('city');

        $zip = $request->input('zip');

        $phone = $request->input('phone');


        $created_at = Carbon::now();




        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');

            // DB::table('shippings')->insert(
            //     [
            //         'customer_id' => $customer_id,
            //         'house' => $house,
            //         'road' => $road,
            //         'area' => $area,
            //         'city' => $city,
            //         'zip' => $zip,
            //         'phone' => $phone,
            //         'created_at' => $created_at
            //     ]
            // );




            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/process/cart');

        }


    }

    /**
     * Display a Login Form
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        //Display Login Form
        return view('fornt.customer.login');

    }

    /**
     * Display a Login  and Regsitration Form
     *
     * @return \Illuminate\Http\Response
     */

    public function login_customer()
    {
        return view('fornt.customer.login_register_customer');
    }




    /**
     * Display a Login and Registered Form
     *
     * @return \Illuminate\Http\Response
     */
    public function register_customer()
    {
          
        //Display Login Form
        return view('fornt.customer.login_register_customer');



    }


 /**
     * admin_register_customer display a register form
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_register_customer()
    {
          
        //Display Login Form
        return view('admin.customer.register');



    }



 /**
     * admin_register_customer display a all Customer List 
     *
     * @return \Illuminate\Http\Response
     */
    public function all_customer_list()
    {
          
        $all_customer_lists = DB::table('users')
        ->get();

        //Display Login Form
        return view('admin.customer.allcustomer',compact('all_customer_lists'));



    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Create Customer Registration and Login
        return view('fornt.customer.registration');
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
            'house' => 'required',
            'road' => 'required',
            'area' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);


        /**
         * Get Data From User Input
         */
        if (Auth::user()) {
            $customer_id = Auth::user()->id;
        } else {
            $customer_id = 0;
        }

        $house = $request->input('house');

        $road = $request->input('road');

        $area = $request->input('area');

        $city = $request->input('city');

        $zip = $request->input('zip');

        $phone = $request->input('phone');


        $created_at = Carbon::now();




        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');

            DB::table('shippings')->insert(
                [
                    'customer_id' => $customer_id,
                    'house' => $house,
                    'road' => $road,
                    'area' => $area,
                    'city' => $city,
                    'zip' => $zip,
                    'phone' => $phone,
                    'created_at' => $created_at
                ]
            );




            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/process/cart');

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
    public function update(Request $request)
    {
        $v = Validator::make($request->all(), [
            'house' => 'required',
            'road' => 'required',
            'area' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);


        /**
         * Get Data From User Input
         */
        if (Auth::user()) {
            $customer_id = Auth::user()->id;
        }
        $id = $request->input('ID');

        $house = $request->input('house');

        $road = $request->input('road');

        $area = $request->input('area');

        $city = $request->input('city');

        $zip = $request->input('zip');

        $phone = $request->input('phone');


        $created_at = Carbon::now();




        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');

            DB::table('shippings')->where('customer_id', $customer_id)->update(
                [
                    'customer_id' => $customer_id,
                    'house' => $house,
                    'road' => $road,
                    'area' => $area,
                    'city' => $city,
                    'zip' => $zip,
                    'phone' => $phone,
                    'created_at' => $created_at
                ]
            );




            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/customer/shipping/view');

        }
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
