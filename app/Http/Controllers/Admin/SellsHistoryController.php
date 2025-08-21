<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SellsHistory;
use App\Models\Stock;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SellsHistoryController extends Controller
{
    public function sells_history(Request $request)
    {
        $mobile = $request->input('mobile', null);
        $date_from = $request->input('date_from', null);
        $date_to = $request->input('date_to', null);

        $query = SellsHistory::query(); // Start with an empty query

        // If mobile is provided, add it to the query
        if (!empty($mobile)) {
            $query->where('c_mobile', $mobile);
        }

        // If date range is provided, add it to the query
        if (!empty($date_from) && !empty($date_to)) {
            $query->whereDate('created_at', '>=', $date_from)
                ->whereDate('created_at', '<=', $date_to);
        } else {
            // If no date range is provided, search for today's sells
            $today = now()->format('Y-m-d');
            $query->whereDate('created_at', $today);
        }

        $sells = $query->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.sells.sells_all', compact('sells'));

    }

    public function delivery_status($id, $delivery_status)
    {
        // Validate that delivery_status is one of the allowed values
        if (!in_array($delivery_status, ['1', '2', '3', '4'])) {
            return redirect()->back()->with('success-delete', 'Invalid delivery status.');
        }

        $delivery = SellsHistory::find($id);

        if (!$delivery) {
            return redirect()->back()->with('success-delete', 'Order not found.');
        }

        // Set the delivery status based on the passed status
        switch ($delivery_status) {
            case '1':
                $delivery->delivery_status = '1';
                $delivery->save();
                return redirect()->back()->with('success', 'Product delivered successfully.');
            case '2':
                $delivery->delivery_status = '2';
                $delivery->save();
                return redirect()->back()->with('success', 'Product shipped successfully.');
            case '3':
                $delivery->delivery_status = '3';
                $delivery->save();
                return redirect()->back()->with('success', 'Order confirmed.');
            case '4':
                $delivery->delivery_status = '4';
                $delivery->save();
                return redirect()->back()->with('success-delete', 'Order canceled.');
        }
    }


    public function delete_order($id)
    {
        // Find the item by its ID and delete it
        $item = SellsHistory::find($id);

        if ($item) {
            // Store necessary information before deletion
            $pro_id = $item->pro_id;
            $quantity = $item->quantity;
            $size = $item->size;

            // Delete the item
            $item->delete();

            // Retrieve the corresponding stock item
            $stock = Stock::where('pro_id', $pro_id)
                ->where('size', $size)
                ->first();

            // Update the stock quantity by adding back the deleted order's quantity
            if ($stock) {
                $stock->quantity += $quantity; // Add back the quantity
                $stock->save(); // Save the updated stock
            }

            return redirect()->route('admin.sells_history')->with('success', 'Item successfully deleted and stock updated.');
        } else {
            return redirect()->route('admin.sells_history')->with('success-trash', 'Item not found.');
        }
    }



    // public function client_list()
    // {
    //     // $users = User::whereHas('roles')->get();

    //     $users = User::doesntHave('roles')->get();

    //     return view('admin.sells.client_list', compact('users'));
    // }

    public function invoice(Request $request, $id)
    {
        if (auth()->check()) {
            $categories = Categorie::all();
            $address = SellsHistory::where('tran_id', $id)->first();
            $sells = SellsHistory::where('tran_id', $id)->get();

            if ($request->has('download')) {
                $pdf = PDF::loadView('public.invoice', compact('address', 'sells', 'categories'));
                return $pdf->download('pdfview.pdf');
            }

            return view('public.invoice', compact('address', 'sells', 'categories'));
        }
    }
}
