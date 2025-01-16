<?php

namespace App\Http\Controllers;

use App\Models\Idc;
use Illuminate\Http\Request;

class IdcController extends Controller
{
    public function index()
    {
        $idcs = Idc::all();
        return view('idc.index', compact('idcs'));
    }

    public function create()
    {
        return view('idc.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:idc,code|max:10',
            'name_en' => 'required',
            'name_id' => 'required',
        ]);

        Idc::create($request->all());

        return redirect()->route('idc.index')->with('success', 'IDC created successfully.');
    }

    public function show(Idc $idc)
    {
        return view('idc.show', compact('idc'));
    }

    public function edit(Idc $idc)
    {
        return view('idc.edit', compact('idc'));
    }

    public function update(Request $request, Idc $idc)
    {
        $request->validate([
            'code' => 'required|unique:idc,code,' . $idc->id,
            'name_en' => 'required',
            'name_id' => 'required',
        ]);

        $idc->update($request->all());

        return redirect()->route('idc.index')->with('success', 'IDC updated successfully.');
    }

    public function destroy(Idc $idc)
    {
        $idc->delete();

        return redirect()->route('idc.index')->with('success', 'IDC deleted successfully.');
    }
}
