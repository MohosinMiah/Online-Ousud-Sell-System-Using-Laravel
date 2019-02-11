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

class AdminController extends Controller
{


    private $table = "admins";


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display Admin Login Form

        return view('admin.user.login');
    }


   /**
     * Display a list of all admin
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_list()
    {
        //Display Admin Login Form
        $all_admin_lists = DB::table('admins')
        ->get();


        return view('admin.customer.admin_list',compact('all_admin_lists'));
    }



    /**
     * Admin Login Check
     *
     * @return \Illuminate\Http\Response
     */

    public function admin_login_check(Request $request)
    {


        /**
         *  Data  Validation.....
         */

        $v = Validator::make($request->all(), [
            'email' => 'required|max:100',
            'password' => 'required',

        ]);


        /**
         * Get Data From User Input
         */
        $email = $request->input('email');

        $password = md5($request->input('password'));


        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Login  Data.Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');

            $admin_info = DB::table($this->table)->where('email', $email)
                ->where('password', $password)->first();

            if ($admin_info) {
                \Session::put('admin_login', true);
                \Session::put('admin_id', $admin_info->id);
                \Session::put('admin_name', $admin_info->name);
                \Session::put('admin_roll', $admin_info->roll);
                \Session::put('admin_email', $admin_info->email);

                \Session::flash('message', 'Login Successfully ....... ');

                return redirect('haetywxisbwvfkixds');

            } else {

                \Session::flash('message', 'Fail To Login .Email Or PassWord is not Valid');

                return redirect()->back()->withInput()->withErrors($v);;

            }

        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //Display Admin Login Form

       return view('admin.user.register');
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
            'email' => 'required|unique:admins|max:100',
            'name' => 'required',
            'roll' => 'required',
            'password' => 'required',
            
        ]);


        /**
         * Get Data From User Input
         */
        $name = $request->input('name');

        $email = $request->input('email');

        $roll = $request->input('roll');

        $password = md5($request->input('password'));

        $created_at = Carbon::now();


        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Register .Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');
          
                DB::table($this->table)->insert(
                    [
                        'name' => $name,

                        'email' => $email,

                        'roll' => $roll,

                        'password' => $password,

                        'created_at' => $created_at
                        
                    ]
                );
            

            

            \Session::flash('message', 'Register Successfully ....... ');

            return redirect('/adminpanel/add/admin');

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
    public function destroy(Request $request,$id)
    {
        \Session::put('admin_login', false);
        $request->session()->flush();
        $request->session()->regenerate();
        \Session::put('admin_login', false);

        return redirect('/haetywxisbwvfkixds/login');
    }
}
