<?php

namespace App\Http\Controllers;

use App\Packaging;
use Illuminate\Http\Request;

class PackagingController extends Controller
{
    public function index()
    {
        $items = Packaging::paginate(5);
        return view('site.packagingWays.index', compact('items'));
    }

    public function edit($id)
    {
        $item = Packaging::find($id);
        return view('site.packagingWays.edit', compact('item'));
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
        $item = Packaging::find($id);
        $item->update($request->all());
        return redirect('packagingWays');
    }

    public function destroy($id)
    {
        $item = Packaging::find($id);
        $item->delete();
        return redirect('packagingWays');
    }
}
