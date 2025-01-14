@extends('layouts.leader')
@section('content')
<h1>Your Projects</h1>
@foreach ($projects as $project)
    <div class="card mb-3">
        <div class="card-header">
            {{ $project->title }} ({{ $project->grant_provider }})
        </div>
        <div class="card-body">
            <p>Start Date: {{ $project->start_date }}</p>
            <p>Duration: {{ $project->duration_months }} months</p>
            <a href="{{ route('leader.members', $project->id) }}" class="btn btn-secondary">Manage Members</a>
            <a href="{{ route('leader.milestones', $project->id) }}" class="btn btn-secondary">Manage Milestones</a>
        </div>
    </div>
@endforeach
@endsection
