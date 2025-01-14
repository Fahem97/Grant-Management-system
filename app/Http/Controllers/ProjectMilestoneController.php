<?php

namespace App\Http\Controllers;

use App\Models\ProjectMilestone;
use App\Models\ResearchGrant;
use Illuminate\Http\Request;

class ProjectMilestoneController extends Controller
{
    public function index()
    {
        $milestones = ProjectMilestone::with('grant')->get();
        return view('milestones.index', compact('milestones'));
    }

    public function create()
    {
        $researchGrants = ResearchGrant::all();
        return view('milestones.create', compact('researchGrants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'research_grant_id' => 'required|exists:research_grants,id',
            'name' => 'required',
            'target_completion_date' => 'required|date',
            'deliverable' => 'required',
        ]);

        ProjectMilestone::create($request->all());
        return redirect()->route('milestones.index')->with('success', 'Project milestone created successfully.');
    }

    public function edit($id)
    {
        $milestone = ProjectMilestone::findOrFail($id);
        $researchGrants = ResearchGrant::all();
        return view('milestones.edit', compact('milestone', 'researchGrants'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'research_grant_id' => 'required|exists:research_grants,id',
            'name' => 'required',
            'target_completion_date' => 'required|date',
            'deliverable' => 'required',
            'status' => 'nullable',
            'remark' => 'nullable',
        ]);

        $milestone = ProjectMilestone::findOrFail($id);
        $milestone->update($request->all());
        return redirect()->route('milestones.index')->with('success', 'Project milestone updated successfully.');
    }

    public function destroy($id)
    {
        $milestone = ProjectMilestone::findOrFail($id);
        $milestone->delete();
        return redirect()->route('milestones.index')->with('success', 'Project milestone deleted successfully.');
    }
}
