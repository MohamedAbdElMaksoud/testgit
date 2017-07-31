<?php

namespace App\Http\Controllers;

use App\orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $items = orders::paginate(5);
        return view('site.orders.index', compact('items'));
    }

    public function edit($id)
    {
        $item = orders::find($id);
        return view('site.orders.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = orders::find($id);
        $item->update($request->all());
        return redirect('orders');
    }

    public function destroy($id)
    {
        $item = category::find($id);
        $item->delete();
        return redirect('orders');
    }
}
