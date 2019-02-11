<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = DB::table('titles')->where('id',1)->first();
   
        return view('fornt.inc.main',compact('title'));
    }

    
    
    public function terms_condition()
    {
        return view('fornt.terms.terms');
    } 
    

    public function upload_logo()
    {
        return view('admin.general.logo');
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);


        /**
         * Get Data From User Input
         */

        $image = $request->file('image');

        /**
         * Check File is uploaded or not
         */
        if ($image) {
            $img_name = time()."_".$image->getClientOriginalName();
        }


        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');
          
                DB::table('logos')->where('id',1)->update(
                    [
                        'image' => $img_name
                    ]
                );
            

            if ($image) { 
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);  
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/logo');

        }
    }


     /**
     * Add New Slider Design Page
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_slider()
   {
    return view('admin.general.addslider');
   } 



}
