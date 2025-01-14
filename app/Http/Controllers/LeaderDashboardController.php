<?php

namespace App\Http\Controllers;

use App\Models\ResearchGrant;
use App\Models\ProjectMilestone;
use App\Models\Academician;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LeaderDashboardController extends Controller
{
    public function dashboard()
    {
        $leaderId = Session::get('leader_id');
        $projects = ResearchGrant::with('members', 'milestones')
            ->where('project_leader_id', $leaderId)
            ->get();
        return view('leader.dashboard', compact('projects'));
    }

    public function manageMembers($grantId)
    {
        $project = ResearchGrant::with('members')->findOrFail($grantId);
        $academicians = Academician::all();
        return view('leader.manage-members', compact('project', 'academicians'));
    }

    public function updateMembers(Request $request, $grantId)
    {
        $project = ResearchGrant::findOrFail($grantId);
        $project->members()->sync($request->members);
        return redirect()->route('leader.dashboard')->with('success', 'Project members updated successfully.');
    }

    public function manageMilestones($grantId)
    {
        $project = ResearchGrant::with('milestones')->findOrFail($grantId);
        return view('leader.manage-milestones', compact('project'));
    }

    public function storeMilestone(Request $request, $grantId)
    {
        $request->validate([
            'name' => 'required',
            'target_completion_date' => 'required|date',
            'deliverable' => 'required',
        ]);

        ProjectMilestone::create([
            'research_grant_id' => $grantId,
            'name' => $request->name,
            'target_completion_date' => $request->target_completion_date,
            'deliverable' => $request->deliverable,
        ]);

        return back()->with('success', 'Milestone added successfully.');
    }

    public function updateMilestone(Request $request, $milestoneId)
    {
        $milestone = ProjectMilestone::findOrFail($milestoneId);
        $milestone->update($request->all());
        return back()->with('success', 'Milestone updated successfully.');
    }

    public function deleteMilestone($milestoneId)
    {
        $milestone = ProjectMilestone::findOrFail($milestoneId);
        $milestone->delete();
        return back()->with('success', 'Milestone deleted successfully.');
    }
}
