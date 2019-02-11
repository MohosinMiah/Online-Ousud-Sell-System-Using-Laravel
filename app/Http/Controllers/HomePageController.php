<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $blog = DB::table('posts')->where('id',$id)->first();

        return view('fornt.blog.single',compact('blog'));
    }


    
    
  /**
     * blog_page Page  
     *
     * @return \Illuminate\Http\Response
     */

    public function blog_page(){
        $all_posts = DB::table('posts')->paginate(6);

        return view('fornt.pages.blog', ['all_posts' => $all_posts]);
        
}



  /**
     * About-Us Page  Page
     *
     * @return \Illuminate\Http\Response
     */

    public function about_page(){
        
        return view('fornt.pages.about');
}
   /**
     * About-Us Page  Page
     *
     * @return \Illuminate\Http\Response
     */

    public function delivery_policy(){
        
        return view('fornt.pages.deliverypolicy');
     }

      /**
     * privacy policy Page  Page
     *
     * @return \Illuminate\Http\Response
     */

    public function privacy_policy(){
        
        return view('fornt.pages.privacypolicy');
     }



     public function how_buy(){
        return view('fornt.pages.howtobuy');

     }


     public function why_trust(){
        return view('fornt.pages.whytrust');

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
