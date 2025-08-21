<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Categorie;
use App\Models\ClientAccount;
use App\Models\SellsHistory;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Redirect;

class ClientAccountController extends Controller
{
    public function account()
    {
        $categories = Categorie::all();

        $user = auth()->user();

        $address = ClientAccount::where("email", $user->email)->first();

        $buy_his = SellsHistory::where("c_email", $user->email)->get();

        return view('public.account.index', compact('categories', 'user', 'address', 'buy_his'));

    }

    public function address_save(Request $request)
    {

        try {
            $client = ClientAccount::create($request->all());

            return redirect()->route('client.account')->with('cart-success', 'Delivery address is saved.');

        } catch (QueryException $e) {
            // Check if the exception is due to a unique constraint violation
            if ($e->errorInfo[1] === 1062) {
                return redirect()->route('client.account')->with('cart-error', 'Mobile number is already in use.');
            } else {
                return redirect()->route('client.account')->with('cart-error', 'An error occurred, please try again later or fill the form correctly.');
            }

            // Debug the exception details
            // dd($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }


    }

    public function profileView()
    {
        $categories = Categorie::all();

        $user = auth()->user();

        $address = ClientAccount::where('email', $user->email)->first();

        return view('public.account.profile', compact('categories', 'user', 'address'));
        // dd($address);
    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {

        $old_emil = $request['old_emil'];

        $address = ClientAccount::where('email', $old_emil)->first();
        
        $request->user()->fill($request->validated());

        if ($address) {
            $address->name = $request['name'];
            $address->email = $request['email'];
            $address->save();
        }

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
            $request->user()->save(); // Update the email address for the user
        }

        return Redirect::route('client.account')->with('cart-success', 'Profile updated.');
        // dd($request->all());
    }



    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);
        
        $user = $request->user();
        
        $address = ClientAccount::where('email', $user->email)->first();
        
        if ($address) {
            $address->delete();
        }
        
        Auth::logout();
        
        $user->delete();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
        

        // dd($user);
    }


    public function addressEdit()
    {
        $categories = Categorie::all();

        $user = auth()->user();

        $address = ClientAccount::where('email', $user->email)->first();

        return view('public.account.address_edit', compact('categories', 'user', 'address'));
    }

    public function address_update(Request $request)
    {

        // dd($request->all());

        $user = auth()->user();

        $address = ClientAccount::where('email', $user->email)->first();

        try {
            $client = $address->update($request->all());

            return redirect()->route('client.account')->with('cart-success', 'Delivery address is saved.');

        } catch (QueryException $e) {
            // Check if the exception is due to a unique constraint violation
            if ($e->errorInfo[1] === 1062) {
                return redirect()->route('client.account')->with('cart-error', 'Mobile number is already in use.');
            } else {
                return redirect()->route('client.account')->with('cart-error', 'An error occurred, please try again later or fill the form correctly.');
            }

            // Debug the exception details
            // dd($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
        }

    }



}
