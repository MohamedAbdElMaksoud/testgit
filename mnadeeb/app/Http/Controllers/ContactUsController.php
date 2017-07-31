<?php

namespace App\Http\Controllers;

use App\contact_us;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $items = contact_us::paginate(5);
        return view('site.contacts.index', compact('items'));
    }

    public function edit($id)
    {
        $item = contact_us::find($id);
        return view('site.contacts.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = contact_us::find($id);
        $item->update($request->all());
        return redirect('contacts');
    }

    public function destroy($id)
    {
        $item = contact_us::find($id);
        $item->delete();
        return redirect('contacts');
    }
}
