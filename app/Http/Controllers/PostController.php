<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;
use Carbon\Carbon;

class PostController extends Controller
{

 //Define table name 

 private $table = 'posts';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display All Posts  List 

        $postLists = DB::table($this->table)->get();

        return view('admin.post.postList',compact('postLists'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.addPost');
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
            'title' => 'required|max:200',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);


        /**
         * Get Data From User Input
         */
        $title = $request->input('title');

        $post_type = $request->input('post_type');

        $image = $request->file('image');

        $content = $request->input('content');

        $status = $request->input('status');

        $metakey = $request->input('metakey');

        $addby = 1;

        $created_at = Carbon::now();

        /**
         * Check File is uploaded or not  time()."_".
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
            if ($image) {
                DB::table($this->table)->insert(
                    [
                        'title' => $title,

                        'post_type' => $post_type,

                        'image' => $img_name,

                        'content' => $content,

                        'status' => $status,

                        'metakey' => $metakey,

                        'addby' => $addby,

                        'created_at' => $created_at

                    ]
                );
            } else {
                DB::table($this->table)->insert(
                    [
                        'title' => $title,

                        'post_type' => $post_type,

                        'content' => $content,

                        'status' => $status,

                        'metakey' => $metakey,

                        'addby' => $addby,

                        'created_at' => $created_at

                    ]
                );
            }

            if ($image) { 
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);  
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/addPost');

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
        $postLists = DB::table($this->table)->where('id',$id)->first();

        return view('admin.post.viewPost',compact('postLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postLists = DB::table($this->table)->where('id',$id)->first();

        return view('admin.post.editPost',compact('postLists'));
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
            'title' => 'required|max:200',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);


        /**
         * Get Data From User Input
         */
        $id = $request->input('ID');

        $title = $request->input('title');

        $post_type = $request->input('post_type');

        $image = $request->file('image');

        $content = $request->input('content');

        $status = $request->input('status');

        $metakey = $request->input('metakey');

        // $addby = 1;

        // $created_at = Carbon::now();

        /**
         * Check File is uploaded or not  time()."_".
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
            if ($image) {
                DB::table($this->table)->where('id',$id)->update(
                    [
                        'title' => $title,

                        'post_type' => $post_type,

                        'image' => $img_name,

                        'content' => $content,

                        'status' => $status,

                        'metakey' => $metakey

                        // 'addby' => $addby,

                        // 'created_at' => $created_at

                    ]
                );
            } else {
                DB::table($this->table)->where('id',$id)->update(
                    [
                        'title' => $title,

                        'post_type' => $post_type,

                        'content' => $content,

                        'status' => $status,

                        'metakey' => $metakey

                        // 'addby' => $addby,

                        // 'created_at' => $created_at

                    ]
                );
            }

            if ($image) { 
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);  
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/editPost/'.$id);

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
        DB::table($this->table)->where('id', $id)->delete();
        return redirect('/adminpanel/postList');
    }
}
