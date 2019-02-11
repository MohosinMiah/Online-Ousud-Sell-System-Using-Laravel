<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Controllers\Session;
use Illuminate\View\View;

class SubscriveController extends Controller
{
    private $table = 'subscrivers';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //Collect subscriver email

         
        /**
         *  Data  Validation.....
         */

        $v = Validator::make($request->all(), [
            'email' => 'required|unique:subscrivers|max:100',            
        ]);


        /**
         * Get Data From User Input
         */
        $email = $request->input('email');

        


        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // Insert Data in subscrivers table 
           
                DB::table($this->table)->insert(
                    [
                        'email' => $email
                    ]
                );
           
            }

           

             return redirect()->back();

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
