<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\TrustedClient as TrustedSS;

class TrustedClient extends Controller
{
    public function trusted_client()
    {
        $clients = TrustedSS::paginate(15);

        return view('admin.trusted_client.trusted_client_all', compact('clients'));
    }

    public function trusted_client_addPage()
    {
        $client_data = new TrustedSS;

        $title = 'Add new Trusted client';

        $url = route('admin.trusted_client_add');

        return view('admin.trusted_client.trusted_client_add', compact('client_data', 'title', 'url'));
    }

    public function trusted_client_add(Request $request)
    {
        TrustedSS::create($request->all());

        return redirect()->route('admin.trusted_client')->with('success', 'Trusted client added successfully.');

        // dd($request->all());
    }

    public function trusted_client_edit($id)
    {
        $client_data = TrustedSS::find($id);

        $title = 'Trusted client edit';

        $url = route('admin.trusted_client_update', ['id' => $id]);

        return view('admin.trusted_client.trusted_client_add', compact('client_data', 'title', 'url'));
    }

    public function trusted_client_update(Request $request, $id)
    {
        $client_data = TrustedSS::find($id);

        if ($client_data) {

            $client_data->update($request->all());
            return redirect()->route('admin.trusted_client')->with('success', 'Update successfully.');

        } else {

            return redirect()->route('admin.trusted_client')->with('success-trash', 'Not found.');

        }
    }

    public function trusted_client_delete($id)
    {
        $client_data = TrustedSS::find($id);

        if ($client_data) {

            $client_data->delete();

            return redirect()->route('admin.trusted_client')->with('success-delete', 'Deleted successfully.');

        } else {

            return redirect()->route('admin.trusted_client')->with('success-trash', 'Not found.');

        }
    }



}
