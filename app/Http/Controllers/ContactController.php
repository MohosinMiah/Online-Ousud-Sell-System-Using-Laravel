<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use Mail;
use Illuminate\View\View;

class ContactController extends Controller
{

    protected $table = 'contacts';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('fornt.pages.contact.contact_us');
    }

/**
     * Display a Message List
     *
     * @return \Illuminate\Http\Response
     */
    public function message_list()
    {
        $newMessages = DB::table($this->table)->get();
        return view('admin.contact.list',compact('newMessages'));
    }



/**
     * Display a Message List
     *
     * @return \Illuminate\Http\Response
     */
    public function action_message()
    {
        $newMessages = DB::table($this->table)->get();
        return view('admin.contact.list_action',compact('newMessages'));
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
         
        /**
         *  Data  Validation.....
         */

        $v = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'mobile' => 'required|max:30',
            'email' => 'required|max:100',
            'message' => 'required|max:220',

        ]);


        /**
         * Get Data From User Input
         */
        $name = $request->input('name');
        $mobile = $request->input('mobile');
        $email = $request->input('email');
        $message = $request->input('message');
         $created_at = Carbon::now();


        $image = $request->file('image');

 
        $to_name = $name;
        $to_email = 'hamza161033@gmail.com';
        $data = array('name'=>$name, "body" => $message,'mail'=>$email);
            
        Mail::send('fornt.emails.mail', $data, function($message) use ($to_name, $to_email,$email) {
            $message->to($to_email)
                    ->subject('Message From '.$to_name.' . Need Help');
            $message->from($email,'Helth Farma from '.$to_name);
        }); 

    //       $data = array('name'=>"Virat Gandhi",'body'=>"Body");
   
    //   Mail::send('fornt.emails.mail', $data, function($message) {
    //      $message->to('hamza161033@gmail.com', 'Tutorials Point')
    //      ->subject('Laravel Basic Testing Mail');
            
    //   });


        /**
         * Check File is uploaded or not
         */
        if ($image) {
           $v = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'mobile' => 'required|max:30',
            'email' => 'required|max:100',
            'message' => 'required|max:220',
            'created_at' => 'required|max:100',

        ]);

            $img_name = time()."_".$image->getClientOriginalName();
        }


        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Send  Data.Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');
          if ($image) { 
                DB::table($this->table)->insert(
                    [
                        'name' => $name,
                        'mobile' => $mobile,
                        'email' => $email,
                        'message' => $message,

                        'image' => $img_name
                    ]
                );

            }else{
                DB::table($this->table)->insert(
                    [
                        'name' => $name,
                        'mobile' => $mobile,
                        'email' => $email,
                        'message' => $message,
                    ]
                );
            }
            

            if ($image) { 
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);  
            }

            \Session::flash('message', 'Send Message Successfully ....... ');

            return redirect('/contact-us');

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
        //Delete Item Contact Message
        DB::table($this->table)->where('id',$id)->delete();
        return redirect('/adminpanel/contact/action/message');
    }
}
