<?php

namespace App\Http\Controllers;

use App\package_type;
use App\Packaging;
use Illuminate\Http\Request;

class PackagingTypesController extends Controller
{
    public function index()
    {
        $items = package_type::paginate(5);
        return view('site.packagingTypes.index', compact('items'));
    }

    public function edit($id)
    {
        $item = package_type::find($id);
        return view('site.packagingTypes.edit', compact('item'));
    }
    public function create()
    {
        $items=Packaging::all();
        return view('site.packagingTypes.create',compact($items));
    }

    public function store(Request $request)
    {
        $item = category::create($request->all());
        return redirect('packagingTypes');
    }
    public function update(Request $request, $id)
    {
        $item = package_type::find($id);
        $item->update($request->all());
        return redirect('packagingTypes');
    }

    public function destroy($id)
    {
        $item = package_type::find($id);
        $item->delete();
        return redirect('packagingTypes');
    }
}
