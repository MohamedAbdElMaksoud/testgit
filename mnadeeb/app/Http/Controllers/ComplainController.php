<?php

namespace App\Http\Controllers;

use App\complain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    public function index()
    {
        $items = complain::paginate(5);
        return view('site.complains.index', compact('items'));
    }

    public function edit($id)
    {
        $item = complain::find($id);
        return view('site.complains.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = complain::find($id);
        $item->update($request->all());
        return redirect('complains');
    }

    public function destroy($id)
    {
        $item = complain::find($id);
        $item->delete();
        return redirect('complains');
    }
}
