<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use DB;
use Auth;
use App\Http\Controllers\Session;
use Illuminate\View\View;

class CartController extends Controller
{
    private $table = 'carts';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Display All Cart Product
        return view('fornt.cart.viewCart');
    }

    /**
     * Process Cart
     *
     * @return \Illuminate\Http\Response
     */
    public function process()
    {  //Cart Process

        if (Auth::user()) {

            $customer_id = Auth::user()->id;
            $shipping_info = DB::table('shippings')->where('customer_id', $customer_id)->first();
            if ($shipping_info) {
                \Session::put('customer_id', $customer_id);
                \Session::put('shipping_id', $shipping_info->id);
              //Display Cart And Order 
                return view('fornt.cart.cart_review', compact('shipping_info'));


            } else {
                return view('fornt.customer.shipping_info');
            }
        } else {
            return view('fornt.customer.login_register');
        }







    }





    /**
     * cartUpdate
     *
     * @return \Illuminate\Http\Response
     */
    public function cartUpdate(Request $request)
    {
        //Update Cart 
        $qty = $request->input('quantity');
        $id = $request->input('id');
        if ($qty > 0) {

            DB::table($this->table)->where('id', $id)->update(
                [
                    'qty' => $qty
                ]
            );
        } else {

            DB::table($this->table)->where('id', $id)->update(
                []
            );
        }
        return redirect('cart/view');

    }

    /**
     * Add To Carts
     *
     * @return \Illuminate\Http\Response
     */
    public function addTocart($id)
    {
        //Add To Cart
        $session_id = \Session::getId();

        $products = DB::table('tproducts')->where('id', $id)->first();

        $product_id = $id;

        $product_name = $products->generic_name;

        $product_image = $products->img_one;

        $product_price = $products->price;
       if($products->offer > 1){
        $product_offer = $products->offer;
       }else{
        $product_offer = 1;
       }

        $location = 1;

//Check carts table Same Product ID is alrady addeded or not 
        $product_id_exists = DB::table($this->table)->where([
            ['product_id', $id],
            ['session_id', $session_id]
        ])->first();
        if (count($product_id_exists) > 0) {
            $qty = $product_id_exists->qty + 1;
            DB::table($this->table)->where('id', $product_id_exists->id)->update(
                [
                    'qty' => $qty
                ]
            );

        } else {
            $qty = 1;




            // $total_price = 0;

            $created_at = Carbon::now();

            if (!empty($product_image)) {

                DB::table($this->table)->insert(
                    [
                        'session_id' => $session_id,
                        'product_id' => $product_id,
                        'product_name' => $product_name,
                        'product_image' => $product_image,
                        'price' => $product_price,
                        'offer' => $product_offer,
                        'qty' => $qty,
                        'location' => $location,
                        // 'total_price' => $total_price,
                        'created_at' => $created_at,
                    ]
                );
            } else {
                DB::table($this->table)->insert(
                    [
                        'session_id' => $session_id,
                        'product_id' => $product_id,
                        'product_name' => $product_name,
                        'price' => $product_price,
                        'offer' => $product_offer,
                        'qty' => $qty,
                        'location' => $location,
                        // 'total_price' => $total_price,
                        'created_at' => $created_at,
                    ]
                );
            }
        }

        return redirect('/');



    }

        //Add To Cart FRom Details Page



    public function add_tocard_details_page(Request $request)
    {
        //Add To Cart From Details Page
        $session_id = \Session::getId();
       
         $ID = $request->input('ID');

         $qty = $request->input('qty');

        $products = DB::table('tproducts')->where('id', $ID)->first();

        $product_id = $ID;

        $product_name = $products->generic_name;

        $product_image = $products->img_one;

        $product_price = $products->price;
       if($products->offer > 1){
        $product_offer = $products->offer;
       }else{
        $product_offer = 1;
       }

        $location = 1;

//Check carts table Same Product ID is alrady addeded or not 
        $product_id_exists = DB::table($this->table)->where([
            ['product_id', $ID],
            ['session_id', $session_id]
        ])->first();
        if (count($product_id_exists) > 0) {
            // $qty = $product_id_exists->qty + 1;
            DB::table($this->table)->where('id', $product_id_exists->id)->update(
                [
                    'qty' => $qty
                ]
            );

        } else {




            // $total_price = 0;

            $created_at = Carbon::now();

            if (!empty($product_image)) {

                DB::table($this->table)->insert(
                    [
                        'session_id' => $session_id,
                        'product_id' => $product_id,
                        'product_name' => $product_name,
                        'product_image' => $product_image,
                        'price' => $product_price,
                        'offer' => $product_offer,
                        'qty' => $qty,
                        'location' => $location,
                        // 'total_price' => $total_price,
                        'created_at' => $created_at,
                    ]
                );
            } else {
                DB::table($this->table)->insert(
                    [
                        'session_id' => $session_id,
                        'product_id' => $product_id,
                        'product_name' => $product_name,
                        'price' => $product_price,
                        'offer' => $product_offer,
                        'qty' => $qty,
                        'location' => $location,
                        // 'total_price' => $total_price,
                        'created_at' => $created_at,
                    ]
                );
            }
        }

        return redirect('display/product/details/'.$ID);
    }





    public function cartUpdatelocation(Request $request)
    {

   //Update Cart Location
         $location = $request->input('location');
        if($location == 'inside'){
            $location = 1;
        }elseif($location == 'outside'){
            $location = 0;
        }elseif($location == 'emergency'){
            $location = 2;
        }
        $session_id = \Session::getId();


        DB::table($this->table)->where('session_id', $session_id)->update(
            [
                'location' => $location
            ]
        );

        return redirect('cart/view');
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
        //Delete  Data  From Cart Item 
        DB::table($this->table)->where('id', $id)->delete();
        return redirect('cart/view');
    }
}
