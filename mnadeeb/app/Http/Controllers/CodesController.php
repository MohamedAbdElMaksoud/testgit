<?php

namespace App\Http\Controllers;

use App\codes;
use Illuminate\Http\Request;

class CodesController extends Controller
{
    public function index()
    {
        $items = codes::paginate(5);
        return view('site.codes.index', compact('items'));
    }
    public function create()
    {
        return view('site.categories.create');
    }

    public function store(Request $request)
    {
        $item = category::create($request->all());
        return redirect('categories');
    }
    public function edit($id)
    {
        $item = codes::find($id);
        return view('site.codes.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = codes::find($id);
        $item->update($request->all());
        return redirect('codes');
    }

    public function destroy($id)
    {
        $item = codes::find($id);
        $item->delete();
        return redirect('codes');
    }
}
