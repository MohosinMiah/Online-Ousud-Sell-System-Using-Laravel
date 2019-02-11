<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;


class CategoryController extends Controller
{

    private $table ='categories';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        
         $categoryLists = DB::table($this->table)->get();

        return view('admin.product_category.categoryList',compact('categoryLists'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Display Add Category Form
        return view('admin.product_category.addProduct_category');
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
            'title' => 'required|unique:categories|max:100',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);


        /**
         * Get Data From User Input
         */
        $title = $request->input('title');

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
          
                DB::table($this->table)->insert(
                    [
                        'title' => $title,

                        'image' => $img_name
                    ]
                );
            

            if ($image) { 
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);  
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/addProduct/addCategory');

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
        $categoryLists = DB::table($this->table)->where('id',$id)->first();

        return view('admin.product_category.viewProduct_category',compact('categoryLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryLists = DB::table($this->table)->where('id',$id)->first();

        return view('admin.product_category.editProduct_category',compact('categoryLists'));
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
            
        ]);


        /**
         * Get Data From User Input
         */
        $id = $request->input('ID');

        $title = $request->input('title');

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
            if ($image) {
                DB::table($this->table)->where('id',$id)->update(
                    [
                        'title' => $title,

                        'image' => $img_name
                    ]
                );
            }else{
                DB::table($this->table)->where('id',$id)->update(
                    [
                        'title' => $title

                    ]
                );

            }

            if ($image) { 
                $destinationPathOne = public_path('images');
                $image->move($destinationPathOne, $img_name);  
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/editproduct/category/'.$id);

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
        return redirect('/adminpanel/addProduct/categoryList');
    }



    // View All Method From Here *****************************************
    /**  ****************************************** */
    /**
     * Display All category product
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_category()
    {
        
        return view('fornt.category.category');
    }


        /**  ****************************************** */
    /**
     * Display Single category product
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function single_category($title)
    {
        // $allcategories = DB::table('categories')->limit(8)->get();

        return view('fornt.category.single',compact('title'));
    }

    



}
