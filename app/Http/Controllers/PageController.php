<?php

// namespace App\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;

class PageController extends Controller
{
    private $table ='pages';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageLists = DB::table($this->table)->get();

    return view('admin.page.pageList',compact('pageLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Display Add Page Form 
        return view('admin.page.addPage');

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
            'title' => 'required|unique:pages|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);


        /**
         * Get Data From User Input
         */
        $title = $request->input('title');

        $image = $request->file('image');

        $content = $request->input('content');

        $isVisible = $request->input('isVisible');

        $metakey = $request->input('metakey');

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
            if ($image) {
                DB::table($this->table)->insert(
                    [
                        'title' => $title,

                        'image' => $img_name,

                        'content' => $content,

                        'isVisible' => $isVisible,

                        'metakey' => $metakey

                    ]
                );
            } else {
                DB::table($this->table)->insert(
                    [
                        'title' => $title,

                        'content' => $content,

                        'isVisible' => $isVisible,

                        'metakey' => $metakey

                    ]
                );
            }

            if ($image) { 
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);  
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/addPage');

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
        
        $pageLists = DB::table($this->table)->where('id',$id)->first();

        return view('admin.page.viewPage',compact('pageLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageLists = DB::table($this->table)->where('id',$id)->first();

        return view('admin.page.editPage',compact('pageLists'));
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
            'title' => 'required|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
        ]);


        /**
         * Get Data From User Input
         */
        $id = $request->input('ID');

        $title = $request->input('title');

        $image = $request->file('image');

        $content = $request->input('content');

        $isVisible = $request->input('isVisible');

        $metakey = $request->input('metakey');

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
            if ($image) {
                DB::table($this->table)->where('id', $id)->update(
                    [
                        'title' => $title,

                        'image' => $img_name,

                        'content' => $content,

                        'isVisible' => $isVisible,

                        'metakey' => $metakey

                    ]
                );
            } else {
                DB::table($this->table)->where('id', $id)->update(
                    [
                        'title' => $title,

                        'content' => $content,

                        'isVisible' => $isVisible,

                        'metakey' => $metakey

                    ]
                );
            }

            if ($image) { 
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);  
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/editPage/'.$id);

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
        return redirect('/adminpanel/pageList');
    }
}
