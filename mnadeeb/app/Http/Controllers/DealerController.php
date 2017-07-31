<?php

namespace App\Http\Controllers;

use App\dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index()
    {
        $items = dealer::paginate(5);
        return view('site.dealers.index', compact('items'));
    }

    public function edit($id)
    {
        $item = dealer::find($id);
        return view('site.dealers.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = dealer::find($id);
        $item->update($request->all());
        return redirect('dealers');
    }

    public function destroy($id)
    {
        $item = dealer::find($id);
        $item->delete();
        return redirect('dealers');
    }
}
