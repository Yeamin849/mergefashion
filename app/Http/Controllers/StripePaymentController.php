<?php

namespace App\Http\Controllers;

use App\Models\ClientAccount;
use App\Models\Products;
use App\Models\SellsHistory;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        if (count(session('cart')) === 0) {

            return redirect()->route('welcome')->with('cart-error', 'Your cart is empty.');

        } else {

            return view('public.stripe');

        }

        // return redirect()->route('welcome')->with('cart-error', 'Payment service is temporary unavailable. Please contact with 01621833839');
    }

    public function stripePost(Request $request)
    {
        // dd($request->all());

        $user = auth()->user();

        $client = ClientAccount::where('email', $user->email)->first();

        // Payment section
        $amount = $request['amount'];

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => "$amount",
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from Octosync Software Ltd."
        ]);

        $cart = session('cart', []);

        $random_num = null;
        do {
            $random_num = rand(10000000, 99999999);
        } while (DB::table('sells_histories')->where('tran_id', $random_num)->exists());


        foreach ($cart as $key => $item) {
            $pro_id = $item['pro_id'];
            $size = $item['size'];
            $price = $item['price'];
            $quantity = $item['quantity'];

            // Retrieve the corresponding stock item
            $stock = Stock::where('pro_id', $pro_id)
                ->where('size', $size)
                ->first();

            if ($stock) {
                // Update stock quantity by subtracting the cart quantity
                $stock->quantity -= $quantity;

                // Save the updated stock item
                $stock->save();
            }

            $product = Products::where('pro_id', $pro_id)->first();

            $sell_history = new SellsHistory;

            $sell_history->payment_status = 1;
            $sell_history->user_id = $user->user_id;
            $sell_history->tran_id = $random_num;
            $sell_history->pro_id = $pro_id;
            $sell_history->pro_name = $item['name'];
            $sell_history->pro_cover = $item['image'];
            $sell_history->size = $size;
            $sell_history->quantity = $quantity;
            $sell_history->r_price = $product->r_price;
            $sell_history->c_price = $product->c_price;
            $sell_history->total_price = $price * $quantity;
            $sell_history->client_name = $client->name;
            $sell_history->c_email = $client->email;
            $sell_history->c_mobile = $client->mobile;
            $sell_history->c_address = $client->address;
            $sell_history->c_upazila = $client->upazila;
            $sell_history->c_zila = $client->zila;
            $sell_history->c_division = $client->division;
            $sell_history->save();


            // Remove the cart item if stock is updated or not found
            unset($cart[$key]);
        }

        // Update the cart session with the modified cart data
        session(['cart' => $cart]);

        return redirect()->route('client.account')->with('cart-success', 'Payment successful!');
    }


    public function confirmOrder(Request $request)
    {
        // dd($request->toArray());

        $user = auth()->user();

        $client = ClientAccount::where('email', $user->email)->first();

        $cart = session('cart', []);

        $random_num = null;
        do {
            $random_num = rand(10000000, 99999999);
        } while (DB::table('sells_histories')->where('tran_id', $random_num)->exists());


        foreach ($cart as $key => $item) {
            $pro_id = $item['pro_id'];
            $size = $item['size'];
            $price = $item['price'];
            $quantity = $item['quantity'];

            // Retrieve the corresponding stock item
            $stock = Stock::where('pro_id', $pro_id)
                ->where('size', $size)
                ->first();

            if ($stock) {
                // Update stock quantity by subtracting the cart quantity
                $stock->quantity -= $quantity;

                // Save the updated stock item
                $stock->save();
            }

            $product = Products::where('pro_id', $pro_id)->first();

            $sell_history = new SellsHistory;

            $sell_history->payment_status = 1;
            $sell_history->user_id = $user->user_id;
            $sell_history->tran_id = $random_num;
            $sell_history->pro_id = $pro_id;
            $sell_history->pro_name = $item['name'];
            $sell_history->pro_cover = $item['image'];
            $sell_history->size = $size;
            $sell_history->quantity = $quantity;
            $sell_history->r_price = $product->r_price;
            $sell_history->c_price = $product->c_price;
            $sell_history->total_price = $price * $quantity;
            $sell_history->client_name = $client->name;
            $sell_history->c_email = $client->email;
            $sell_history->c_mobile = $client->mobile;
            $sell_history->c_address = $client->address;
            $sell_history->c_upazila = $client->upazila;
            $sell_history->c_zila = $client->zila;
            $sell_history->c_division = $client->division;
            $sell_history->save();


            // Remove the cart item if stock is updated or not found
            unset($cart[$key]);
        }

        // Update the cart session with the modified cart data
        session(['cart' => $cart]);

        return redirect()->route('client.account')->with('cart-success', 'Order placed successful.');

    }


}
