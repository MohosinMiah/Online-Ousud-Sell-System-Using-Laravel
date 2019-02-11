<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Auth;
use Illuminate\View\View;

class TproductController extends Controller
{
    private $table = "tproducts";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.inc.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryLists = DB::table('categories')->get();

        return view('admin.product.create',compact('categoryLists'));

    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productList()
    {
        // $productLists = DB::table($this->table)->get();
        $productLists = DB::table($this->table)->paginate(15);

        return view('admin.product.productList',compact('productLists'));

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
            'brand_name' => 'required|max:100',
            'cat_id' => 'required',
            'price' => 'required',
            'img_one' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_two' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        /**
         * Get Data From User Input
         */

        $brand_name = $request->input('brand_name');

        $cat_id = $request->input('cat_id');

        $generic_name = $request->input('generic_name');

        $strength = $request->input('strength');

        $dosage = $request->input('dosage');

        $price = $request->input('price');

        $userfor = $request->input('userfor');

        $dar = $request->input('dar');

        $img_one = $request->file('img_one');

        $img_two = $request->file('img_two');

        $description = $request->input('description');

        $qty = $request->input('qty');

        $type = $request->input('type');

        $isavailable = $request->input('isavailable');
 
        $offer = $request->input('offer');
        
        $expair_date = $request->input('expair_date');

        $expair_date_ousud = $request->input('expair_date_ousud');

        $status = $request->input('status');

        $metakey = $request->input('metakey');

        $metadescription = $request->input('metadescription');
        
        $addby = 1;



        /**
         * Check File is uploaded or not
         */
        if ($img_one) { 
        $img_one_name =  time()."_".$img_one->getClientOriginalName();
        }
        if ($img_two) { 
        $img_two_name =  time()."_".$img_two->getClientOriginalName();
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
            if ($img_one && $img_two) { 
            DB::table($this->table)->insert(
                [
                    'brand_name' => $brand_name,
                    'cat_id' => $cat_id,
                    'generic_name' => $generic_name,
                    'strength' => $strength,
                    'dosage' => $dosage,
                    'price' => $price,
                    'userfor' => $userfor,
                    'dar' => $dar,
                    'img_one' => $img_one_name,
                    'img_two' => $img_two_name,
                    'description' => $description,
                    'qty' => $qty,
                    'type' => $type,
                    'isavailable' => $isavailable,
                    'offer' => $offer,
                    'expair_date' => $expair_date,
                    'expair_date_ousud' => $expair_date_ousud,
                    'status' => $status,
                    'metakey' => $metakey,
                    'metadescription' => $metadescription,
                    'addby' => $addby

                ]
            );
        }elseif($img_one){
            DB::table($this->table)->insert(
                [
                    'brand_name' => $brand_name,
                    'cat_id' => $cat_id,
                    'generic_name' => $generic_name,
                    'strength' => $strength,
                    'dosage' => $dosage,
                    'price' => $price,
                    'userfor' => $userfor,
                    'dar' => $dar,
                    'img_one' => $img_one_name,
                    'img_two' => "1.png",
                    'description' => $description,
                    'qty' => $qty,
                    'type' => $type,
                    'isavailable' => $isavailable,
                    'offer' => $offer,
                    'expair_date' => $expair_date,
                    'expair_date_ousud' => $expair_date_ousud,
                    'status' => $status,
                    'metakey' => $metakey,
                    'metadescription' => $metadescription,
                    'addby' => $addby

                ]
            );
        }elseif($img_two){
            DB::table($this->table)->insert(
                [
                    'brand_name' => $brand_name,
                    'cat_id' => $cat_id,
                    'generic_name' => $generic_name,
                    'strength' => $strength,
                    'dosage' => $dosage,
                    'price' => $price,
                    'userfor' => $userfor,
                    'dar' => $dar,
                    'img_one' => "1.png",
                    'img_two' => $img_two_name,
                    'description' => $description,
                    'qty' => $qty,
                    'type' => $type,
                    'isavailable' => $isavailable,
                    'offer' => $offer,
                    'expair_date' => $expair_date,
                    'expair_date_ousud' => $expair_date_ousud,
                    'status' => $status,
                    'metakey' => $metakey,
                    'metadescription' => $metadescription,
                    'addby' => $addby

                ]
            );
        }else{
            DB::table($this->table)->insert(
                [
                    'brand_name' => $brand_name,
                    'cat_id' => $cat_id,
                    'generic_name' => $generic_name,
                    'strength' => $strength,
                    'dosage' => $dosage,
                    'price' => $price,
                    'userfor' => $userfor,
                    'dar' => $dar,
                    // 'img_one' => $img_one_name,
                    // 'img_two' => $img_two_name, 
                    'img_one' => '1.png',
                    'img_two' => '1.png',
                    'description' => $description,
                    'qty' => $qty,
                    'type' => $type,
                    'isavailable' => $isavailable,
                    'offer' => $offer,
                    'expair_date' => $expair_date,
                    'expair_date_ousud' =>$expair_date_ousud,
                    'status' => $status,
                    'metakey' => $metakey,
                    'metadescription' => $metadescription,
                    'addby' => $addby

                ]
            );
        }

            if ($img_one) { 
                $destinationPathOne = public_path('images');
                $img_one->move($destinationPathOne, $img_one_name);  
            }

            if ($img_two) { 
                $destinationPathTwo = public_path('images');
                $img_two->move($destinationPathTwo, $img_two_name);  
            }

            \Session::flash('message', 'Data Save Successfully ....... ');

            return redirect('/adminpanel/addProduct');
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
        $productLists = DB::table($this->table)->where('id',$id)->first();
     
        return view('admin/product/viewProduct',compact('productLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryLists = DB::table('categories')->get();

        $productLists = DB::table($this->table)->where('id',$id)->first();
     
        return view('admin/product/editProduct',compact('productLists','categoryLists'));




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
            'brand_name' => 'required|max:100',
            'cat_id' => 'required',
            'price' => 'required',
            'img_one' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_two' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        /**
         * Get Data From User Input
         */
        $id = $request->input('ID');

        $brand_name = $request->input('brand_name');

        $cat_id = $request->input('cat_id');

        $generic_name = $request->input('generic_name');

        $strength = $request->input('strength');

        $dosage = $request->input('dosage');

        $price = $request->input('price');

        $userfor = $request->input('userfor');

        $dar = $request->input('dar');

        $img_one = $request->file('img_one');

        $img_two = $request->file('img_two');

        $description = $request->input('description');

        $qty = $request->input('qty');

        $type = $request->input('type');

        $isavailable = $request->input('isavailable');
 
        $offer = $request->input('offer');

        $expair_date = $request->input('expair_date');

        $expair_date_ousud = $request->input('expair_date_ousud');

        $status = $request->input('status');

        $metakey = $request->input('metakey');

        $metadescription = $request->input('metadescription');
        
        $addby = 1;



        /**
         * Check File is uploaded or not
         */
        if ($img_one) { 
        $img_one_name =  time()."_".$img_one->getClientOriginalName();
        }
        if ($img_two) { 
        $img_two_name =  time()."_".$img_two->getClientOriginalName();
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
            if ($img_one && $img_two) { 
            DB::table($this->table)->where('id', $id)->update(
                [
                    'brand_name' => $brand_name,
                    'cat_id' => $cat_id,
                    'generic_name' => $generic_name,
                    'strength' => $strength,
                    'dosage' => $dosage,
                    'price' => $price,
                    'userfor' => $userfor,
                    'dar' => $dar,
                    'img_one' => $img_one_name,
                    'img_two' => $img_two_name,
                    'description' => $description,
                    'qty' => $qty,
                    'type' => $type,
                    'isavailable' => $isavailable,
                    'offer' => $offer,
                    'expair_date' => $expair_date,
                    'expair_date_ousud' => $expair_date_ousud,
                    'status' => $status,
                    'metakey' => $metakey,
                    'metadescription' => $metadescription,
                    'addby' => $addby

                ]
            );
        }elseif($img_one){
            DB::table($this->table)->where('id', $id)->update(
                [
                    'brand_name' => $brand_name,
                    'cat_id' => $cat_id,
                    'generic_name' => $generic_name,
                    'strength' => $strength,
                    'dosage' => $dosage,
                    'price' => $price,
                    'userfor' => $userfor,
                    'dar' => $dar,
                    'img_one' => $img_one_name,
                    // 'img_two' => $img_two_name,
                    'description' => $description,
                    'qty' => $qty,
                    'type' => $type,
                    'isavailable' => $isavailable,
                    'offer' => $offer,
                    'expair_date' => $expair_date,
                    'expair_date_ousud' =>$expair_date_ousud,
                    'status' => $status,
                    'metakey' => $metakey,
                    'metadescription' => $metadescription,
                    'addby' => $addby

                ]
            );
        }elseif($img_two){
            DB::table($this->table)->where('id', $id)->update(
                [
                    'brand_name' => $brand_name,
                    'cat_id' => $cat_id,
                    'generic_name' => $generic_name,
                    'strength' => $strength,
                    'dosage' => $dosage,
                    'price' => $price,
                    'userfor' => $userfor,
                    'dar' => $dar,
                    // 'img_one' => $img_one_name,
                    'img_two' => $img_two_name,
                    'description' => $description,
                    'qty' => $qty,
                    'type' => $type,
                    'isavailable' => $isavailable,
                    'offer' => $offer,
                    'expair_date' => $expair_date,
                    'expair_date_ousud' =>$expair_date_ousud,
                    'status' => $status,
                    'metakey' => $metakey,
                    'metadescription' => $metadescription,
                    'addby' => $addby

                ]
            );
        }else{
            DB::table($this->table)->where('id', $id)->update(
                [
                    'brand_name' => $brand_name,
                    'cat_id' => $cat_id,
                    'generic_name' => $generic_name,
                    'strength' => $strength,
                    'dosage' => $dosage,
                    'price' => $price,
                    'userfor' => $userfor,
                    'dar' => $dar,
                    // 'img_one' => $img_one_name,
                    // 'img_two' => $img_two_name, 
                    // 'img_one' => 'ousud.jpg',
                    // 'img_two' => 'ousud.jpg',
                    'description' => $description,
                    'qty' => $qty,
                    'type' => $type,
                    'isavailable' => $isavailable,
                    'offer' => $offer,
                    'expair_date' => $expair_date,
                    'expair_date_ousud' =>$expair_date_ousud,
                    'status' => $status,
                    'metakey' => $metakey,
                    'metadescription' => $metadescription,
                    'addby' => $addby

                ]
            );
        }

            if ($img_one) { 
                $destinationPathOne = public_path('images');
                $img_one->move($destinationPathOne, $img_one_name);  
            }

            if ($img_two) { 
                $destinationPathTwo = public_path('images');
                $img_two->move($destinationPathTwo, $img_two_name);  
            }

            \Session::flash('message', 'Data Update Successfully ....... ');

            return redirect('/adminpanel/editProduct/'.$id);
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
        return redirect('/adminpanel/productList');
    }
}
