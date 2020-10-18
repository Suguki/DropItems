<?php

namespace App\Http\Controllers;

use App\Http\Requests\DropItemRequest;
use Illuminate\Http\Request;
use App\Models\DropItem;

class DropItemController extends Controller
{
    public function index()
    {
        $datas = DropItem::all();
        return view('dropItems.index', compact('datas'));
    }

    public function create(DropItemRequest $request, DropItem $item)
    {
        if ($request->isMethod('POST')) {
            $item->fill($request->all());
            $item->save();
            return redirect(route('dropItems.index'));
        }

        return view('dropItems.create');
    }
}

