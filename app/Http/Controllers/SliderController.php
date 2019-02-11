<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display Slider List
        $slider_lists = DB::table('sliders')->get();

        return view('admin.slider.sliderlist', compact('slider_lists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //View Add Slider 
        return view('admin.slider.addslider');
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
        $title = $request->input('title');
        $slug = $request->input('slug');
        $link = $request->input('link');

        $image = $request->file('image');

        /**
         * Check File is uploaded or not
         */
        if ($image) {
            $img_name = time() . "_" . $image->getClientOriginalName();
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

            DB::table('sliders')->insert(
                [
                    'title' => $title,

                    'slug' => $slug,

                    'link' => $link,

                    'image' => $img_name
                ]
            );


            if ($image) {
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/addslider');

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
        //edit slider 
        $slider_list = DB::table('sliders')->where('id', $id)->first();


        return view('admin.slider.editslider', compact('slider_list'));
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

        /**
         *  Data  Validation.....
         */

        $v = Validator::make($request->all(), [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        /**
         * Get Data From User Input
         */
        $id = $request->input('ID');
        $title = $request->input('title');
        $slug = $request->input('slug');
        $link = $request->input('link');

        $image = $request->file('image');

        /**
         * Check File is uploaded or not
         */
        if ($image) {
            $img_name = time() . "_" . $image->getClientOriginalName();
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
            if ($image) {
                DB::table('sliders')->where('id', $id)->update(
                    [
                        'title' => $title,

                        'slug' => $slug,

                        'link' => $link,

                        'image' => $img_name
                    ]
                );
            } else {
                DB::table('sliders')->where('id', $id)->update(
                    [
                        'title' => $title,

                        'slug' => $slug,

                        'link' => $link

                    ]
                );
            }

            if ($image) {
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/editslider/slider/' . $id);

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
        //Delete A Slider 
        DB::table('sliders')->where('id', $id)->delete();
        return redirect('/adminpanel/sliderlist');
    }


    /**
     * Update Title
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_title()
    {
          // Get Title and Slug
          $title = DB::table('titles')->where('id',1)->first();
       return view('admin.general.updatetitle',compact('title'));
    }


    /**
     * Update Title
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_title_slug(Request $request)
    {

        /**
         *  Data  Validation.....
         */

        $v = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required'

        ]);


        /**
         * Get Data From User Input
         */
        $title = $request->input('title');
        $slug = $request->input('slug');


       


        /**
         * Check Data is Valid or Not
         */


        if ($v->fails()) {
            \Session::flash('message', 'Fail To Save  Data.Please check error messages ....... ');

            return redirect()->back()->withInput()->withErrors($v);;
        } else {
            // route(View Path Address or Location)
            // return redirect()->route('galary.index');

                DB::table('titles')->where('id', 1)->update(
                    [
                        'title' => $title,

                        'slug' => $slug

                      
                    ]
                );
            
         

       

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/update/title');

        }
    }
    

}
