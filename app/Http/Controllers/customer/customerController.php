<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\customer\Customer;
use Session;
Use Redirect;
use DB;

class customerController extends Controller
{
    public function buyer_info(Request $request)
    {
        // Customer Add
        $data=array();
        $data['customerName'] = $request -> customerName;
        $data['CustomerPhoneNumber'] = $request -> CustomerPhoneNumber;
        $data['CustomerEmail'] = $request -> CustomerEmail;
        $customer_save = DB::table('customers')->insertGetId($data);
        
        // Order Add
        $order=array();
        $order['customer_id'] = $customer_save;;
        $order_id = DB::table('order')->insertGetId($order);

        
        $shopping_cart = array();
        $cartProduct = \Cart::getContent();
        
        foreach ($cartProduct as $item){
            $shopping_cart_detailes['order_id'] = $order_id;
            $shopping_cart_detailes['pdt_id'] = $item->id;
            $shopping_cart_detailes['pdt_name'] = $item->name;
            $shopping_cart_detailes['pdt_price'] = $item->price;
            $shopping_cart_detailes['pdt_subtotal'] = \Cart::get($item->id)->getPriceSum();
            $shopping_cart_detailes['pdt_total'] = \Cart::getTotal();
            $shopping_cart_detailes['pdt_image'] = $item->attributes->image;
            $shopping_cart_detailes['pdt_quantity'] = $item->quantity;
            $save_cart = DB::table('shopping_cart')->insert($shopping_cart_detailes);
        }
        
        if($order_id){
            \Cart::clear();
            // $admin_notification = DB::table('admin_users')
            //                       ->where()
            //                       ->get();
            // Session::flash('message','Within few Minute We Will Contact with you!');
            
            return Redirect::to('/');
            
        }


        // else{
        //     Session::flash('message','Woops Something wrong!');
        //     return redirect()->back();
        // }
            
    }
}
