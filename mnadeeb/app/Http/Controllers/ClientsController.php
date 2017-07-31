<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $items = User::where('usertype', 4)->paginate(5);
        return view('site.clients.index', compact('items'));
    }

    public function edit($id)
    {
        $item = User::find($id);
        return view('site.clients.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = User::find($id);
        $item->update($request->all());
        return redirect('clients');
    }

    public function destroy($id)
    {
        $item = User::find($id);
        $item->delete();
        return redirect('clients');
    }
}
