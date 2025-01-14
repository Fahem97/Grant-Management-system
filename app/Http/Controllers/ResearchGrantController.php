<?php

namespace App\Http\Controllers;

use App\Models\ResearchGrant;
use App\Models\Academician;
use Illuminate\Http\Request;

class ResearchGrantController extends Controller
{
    public function index()
    {
        $researchGrants = ResearchGrant::with('leader')->get();
        return view('research_grants.index', compact('researchGrants'));
    }

    public function create()
    {
        $academicians = Academician::all();
        return view('research_grants.create', compact('academicians'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'grant_provider' => 'required',
            'grant_amount' => 'required|numeric',
            'start_date' => 'required|date',
            'duration_months' => 'required|integer',
            'project_leader_id' => 'required|exists:academicians,id',
        ]);

        ResearchGrant::create($request->all());
        return redirect()->route('research-grants.index')->with('success', 'Research grant created successfully.');
    }

    public function show($id)
    {
        $researchGrant = ResearchGrant::with('leader', 'members')->findOrFail($id);
        return view('research_grants.show', compact('researchGrant'));
    }

    public function edit($id)
    {
        $researchGrant = ResearchGrant::findOrFail($id);
        $academicians = Academician::all();
        return view('research_grants.edit', compact('researchGrant', 'academicians'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'grant_provider' => 'required',
            'grant_amount' => 'required|numeric',
            'start_date' => 'required|date',
            'duration_months' => 'required|integer',
            'project_leader_id' => 'required|exists:academicians,id',
        ]);

        $researchGrant = ResearchGrant::findOrFail($id);
        $researchGrant->update($request->all());
        return redirect()->route('research-grants.index')->with('success', 'Research grant updated successfully.');
    }

    public function destroy($id)
    {
        $researchGrant = ResearchGrant::findOrFail($id);
        $researchGrant->delete();
        return redirect()->route('research-grants.index')->with('success', 'Research grant deleted successfully.');
    }
}
