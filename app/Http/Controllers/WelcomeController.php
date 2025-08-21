<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use App\Models\ClientAccount;
use App\Models\Products;
use App\Models\SellsHistory;
use App\Models\Slider;
use App\Models\Stock;
use App\Models\TrustedClient;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function welcome()
    {
        $categories = Categorie::all();

        $sliders = Slider::all();

        $featured = Products::where('feature', 1)->where('status', 1)->get();

        $products = Products::where('status', 1)->orderBy('created_at', 'desc')->paginate(15);

        $trusted_clients = TrustedClient::all();

        return view("public.welcome", compact("categories", "products", "sliders", "featured", "trusted_clients"));
    }

    public function productView($id)
    {
        $categories = Categorie::all();

        $product = Products::where('pro_id', $id)->first();

        if ($product) {

            $stocks = Stock::where('pro_id', $id)->where('quantity', '>=', 1)->get();

            $pro_cat = $product->pro_cat;

            $products = Products::where('pro_cat', $pro_cat)->get();

            return view('public.product', compact('product', 'categories', 'products', 'stocks'));

        } else {

            $product = null;

            return view('public.product', compact('product', 'categories'));

        }

    }

    public function categoryView($pro_cat)
    {
        $categories = Categorie::all();

        $products = Products::where('pro_cat', $pro_cat)->get();

        return view('public.category', compact('categories', 'products', 'pro_cat'));
    }

    public function blogView()
    {
        $categories = Categorie::all();

        $blogs = Blog::where('status', 1)->get();

        return view('public.blog', compact('categories', 'blogs'));
    }

    public function blog($id)
    {
        $categories = Categorie::all();

        $blog = Blog::where('blog_id', $id)->first();

        $blogs = Blog::orderBy('created_at', 'desc')->get();

        return view('public.blog_single', compact('categories', 'blog', 'blogs'));
    }

    public function contactView()
    {
        $categories = Categorie::all();

        return view('public.contact', compact('categories'));
    }




    // Product cart control

    // public function cart()
    // {
    //     if (auth()->check()) {

    //         $categories = Categorie::all();

    //         return view('public.cart', compact('categories'));

    //     } else {

    //         return redirect()->back()->with('cart-error', 'Please log in first to see the cart');

    //     }
    // }

    // public function addToCartData(Request $request, $id)
    // {
    //     // dd($request->all());

    //     // Check if the user is authenticated
    //     if (auth()->check()) {

    //         $size = $request->input('size');

    //         $product = Products::findOrFail($id);

    //         if (!is_null($size)) {

    //             $quantity = $request->input('quantity');

    //             $stock = Stock::where('pro_id', $product->pro_id)->where('size', $size)->first();

    //             if ($quantity < $stock->quantity) {

    //                 $cart = session()->get('cart', []);

    //                 $key = "{$id}_{$request->size}"; // Create a unique key combining id and size

    //                 if (isset($cart[$key])) {
    //                     $cart[$key]['quantity']++;
    //                 } else {
    //                     $cart[$key] = [
    //                         "pro_id" => $product->pro_id,
    //                         "name" => $product->pro_name,
    //                         "size" => $request->size,
    //                         "quantity" => $request->quantity,
    //                         "price" => $product->c_price,
    //                         "image" => $product->pro_cover
    //                     ];
    //                 }

    //                 // Update the session with the modified cart
    //                 session(['cart' => $cart]);

    //                 return redirect()->back()->with('cart-success', 'Product added to cart successfully!');

    //             } else {

    //                 return redirect()->back()->with('cart-error', 'Your quantity is too much');

    //             }
    //         } else {

    //             return redirect()->back()->with('cart-error', 'Size not selected');

    //         }
    //     } else {

    //         return redirect()->back()->with('cart-error', 'Please log in to add to the cart');
    //     }
    // }

    // public function update(Request $request)
    // {
    //     if (auth()->check()) {

    //         if ($request->id && $request->quantity) {

    //             $cart = session()->get('cart', []);

    //             if (isset($cart[$request->id])) {

    //                 $cart[$request->id]["quantity"] = $request->quantity;

    //                 session()->put('cart', $cart);

    //                 return response()->json(['success' => 'Cart updated successfully']);
    //             }
    //             return response()->json(['error' => 'Item not found in the cart'], 404);
    //         }
    //         return response()->json(['error' => 'Invalid request'], 400);
    //     } else {
    //         return redirect()->back()->with('cart-error', 'Please log in to add to the cart');
    //     }
    // }

    // public function remove(Request $request)
    // {
    //     if (auth()->check()) {

    //         if ($request->id) {

    //             $cart = session()->get('cart', []);

    //             if (isset($cart[$request->id])) {

    //                 unset($cart[$request->id]);

    //                 session()->put('cart', $cart);

    //                 return response()->json(['success' => 'Product removed successfully']);
    //             }
    //             return response()->json(['error' => 'Item not found in the cart'], 404);
    //         }
    //         return response()->json(['error' => 'Invalid request'], 400);

    //     } else {

    //         return redirect()->back()->with('cart-error', 'Please log in to add to the cart');
    //     }
    // }

    // public function check_outPage()
    // {
    //     $cart = session()->get('cart', []);

    //     // Check if the cart is empty
    //     if (empty($cart)) {
    //         return redirect()->back()->with('cart-error', 'Your cart is empty. Please add items to your cart before proceeding.');
    //     }

    //     if (auth()->check()) {
    //         $user = auth()->user();
    //         $client = ClientAccount::where('email', $user->email)->first();

    //         if ($client) {
    //             $address = ClientAccount::where('email', $user->email)->first();
    //             $categories = Categorie::all();
    //             return view('public.check_out', compact('categories', 'address'));
    //         } else {
    //             return redirect()->route('client.account')->with('cart-error', 'Please save your delivery address first.');
    //         }
    //     } else {
    //         return redirect()->back()->with('cart-error', 'Please log in to add to the cart');
    //     }


    // }




    public function buyNow(Request $request, $id)
    {
        $product = Products::where('pro_id', $id)->first();

        $categories = Categorie::all();

        return view('public.cart', compact('product', 'request', 'categories', 'id'));

        // dd($product->toArray());
    }

    public function buyNowConfirm(Request $request)
    {
        // Get the product by its ID
        $product = Products::where('pro_id', $request->pro_id)->first();

        // Retrieve the corresponding stock item for the selected product and size
        $stock = Stock::where('pro_id', $product->pro_id)
            ->where('size', $request['size'])
            ->first();

        // Requested quantity
        $quantity = $request['quantity'];

        // Check if the stock quantity is sufficient
        if ($stock && $stock->quantity >= $quantity) {
            // Update stock by subtracting the requested quantity
            $stock->quantity -= $quantity;
            $stock->save();

            $categories = Categorie::all();

            // Generate a unique transaction ID
            $random_num = null;
            do {
                $random_num = rand(10000000, 99999999);
            } while (DB::table('sells_histories')->where('tran_id', $random_num)->exists());

            // Create a new Sell History
            $sell_history = new SellsHistory;
            $sell_history->payment_status = 0;
            $sell_history->location = $request['location'];
            $sell_history->tran_id = $random_num;
            $sell_history->pro_id = $product->pro_id;
            $sell_history->pro_name = $product->pro_name;
            $sell_history->pro_cover = $request['selected_image']; // Add the selected image
            $sell_history->size = $request['size'];
            $sell_history->quantity = $quantity;
            $sell_history->r_price = $product->r_price;
            $sell_history->c_price = $product->c_price;
            $sell_history->total_price = $request['total_price'];
            $sell_history->client_name = $request['name'];
            $sell_history->c_email = $request['email'];
            $sell_history->c_mobile = $request['mobile'];
            $sell_history->c_address = $request['address'];
            $sell_history->c_upazila = $request['upazila'];
            $sell_history->c_zila = $request['zila'];
            $sell_history->notes = $request['note'];
            $sell_history->save();

            // Pass the selected image to the thank you view
            $img = $request['selected_image'];

            return view('public.thanks', compact('img', 'categories'));

        } else {
            // Insufficient stock, redirect back with a message
            return to_route('welcome')->with('success-delete', 'দুঃখিত, স্টকে পর্যাপ্ত পরিমাণ প্রোডাক্ট নেই।');
        }
    }




}
