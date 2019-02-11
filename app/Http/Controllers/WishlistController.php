<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Controllers\Session;
use Illuminate\View\View;


class WishlistController extends Controller
{
    private $table = 'wishlists';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //view wish list

        return view('fornt.wishlist.wishlist');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

       $result =  DB::table($this->table)->where('product_id',$id)->first();
         if($result){
       
            }else{
                $session_id = \Session::getId();
                $created_at = Carbon::now();
                //Add Data into  Wish List
                   DB::table($this->table)->insert(
                            [
                                'product_id' => $id,
        
                                'session_id' => $session_id,
        
                                'created_at' => $created_at
        
                            ]
                        ); 
            }
                return redirect('/');

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
        //Delete  Data  From Cart Item 
        $session_id = \Session::getId();

        DB::table($this->table)->where('product_id', $id)->where('session_id',$session_id)->delete();
        return redirect('view/wishlist');
    }
}
