<?php

namespace App\Http\Controllers;

use App\Models\Academician;
use Illuminate\Http\Request;

class AcademicianController extends Controller
{
    public function index()
    {
        $academicians = Academician::all();
        return view('academicians.index', compact('academicians'));
    }

    public function create()
    {
        return view('academicians.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'staff_number' => 'required|unique:academicians',
            'email' => 'required|email|unique:academicians',
            'college' => 'required',
            'department' => 'required',
            'position' => 'required'
        ]);

        Academician::create($request->all());
        return redirect()->route('academicians.index')->with('success', 'Academician created successfully.');
    }
}
