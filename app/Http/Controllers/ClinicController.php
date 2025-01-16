<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {
        $clinics = Clinic::all();
        return view('clinics.index', compact('clinics'));
    }

    public function create()
    {
        return view('clinics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
        ]);

        Clinic::create($request->all());
        return redirect()->route('clinics.index')->with('success', 'Clinic created successfully.');
    }

    public function show(Clinic $clinic)
    {
        return view('clinics.show', compact('clinic'));
    }

    public function edit(Clinic $clinic)
    {
        return view('clinics.edit', compact('clinic'));
    }

    public function update(Request $request, Clinic $clinic)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
        ]);

        $clinic->update($request->all());
        return redirect()->route('clinics.index')->with('success', 'Clinic updated successfully.');
    }

    public function destroy(Clinic $clinic)
    {
        $clinic->delete();
        return redirect()->route('clinics.index')->with('success', 'Clinic deleted successfully.');
    }
}
