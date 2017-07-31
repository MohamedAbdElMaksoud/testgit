<?php

namespace App\Http\Controllers;

use App\invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function index()
    {
        $items = invitation::paginate(5);
        return view('site.invitations.index', compact('items'));
    }

    public function edit($id)
    {
        $item = invitation::find($id);
        return view('site.invitations.edit', compact('item'));
    }
    public function create()
    {
        return view('site.invitations.create');
    }

    public function store(Request $request)
    {
        $item = invitation::create($request->all());
        return redirect('invitations');
    }
    public function update(Request $request, $id)
    {
        $item = invitation::find($id);
        $item->update($request->all());
        return redirect('invitations');
    }

    public function destroy($id)
    {
        $item = invitation::find($id);
        $item->delete();
        return redirect('invitations');
    }
}
