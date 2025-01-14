@extends('layouts.leader')

@section('content')
<div class="container">
    <h1>Manage Milestones for {{ $project->title }}</h1>

    <!-- Add New Milestone Form -->
    <div class="card mb-3">
        <div class="card-header">Add New Milestone</div>
        <div class="card-body">
            <form action="{{ route('leader.milestones.store', $project->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Milestone Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="target_completion_date" class="form-label">Target Completion Date</label>
                    <input type="date" class="form-control" id="target_completion_date" name="target_completion_date" required>
                </div>
                <div class="mb-3">
                    <label for="deliverable" class="form-label">Deliverable</label>
                    <input type="text" class="form-control" id="deliverable" name="deliverable" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Milestone</button>
            </form>
        </div>
    </div>

    <!-- Existing Milestones List -->
    <h2>Existing Milestones</h2>
    @if($project->milestones->isEmpty())
        <p>No milestones found.</p>
    @else
        @foreach ($project->milestones as $milestone)
            <div class="card mb-3">
                <div class="card-header">{{ $milestone->name }} (Target: {{ $milestone->target_completion_date }})</div>
                <div class="card-body">
                    <p>Deliverable: {{ $milestone->deliverable }}</p>
                    <form action="{{ route('leader.milestones.update', $milestone->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('PUT')
                        <input type="text" name="status" placeholder="Enter status" class="form-control mb-2">
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                    <form action="{{ route('leader.milestones.delete', $milestone->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
