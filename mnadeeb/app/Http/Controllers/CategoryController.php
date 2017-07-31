<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $items = category::paginate(5);
        return view('site.categories.index', compact('items'));
    }

    public function edit($id)
    {
        $item = category::find($id);
        return view('site.categories.edit', compact('item'));
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

    public function update(Request $request, $id)
    {
        $item = category::find($id);
        $item->update($request->all());
        return redirect('categories');
    }

    public function destroy($id)
    {
        $item = category::find($id);
        $item->delete();
        return redirect('categories');
    }
}
