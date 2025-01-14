@extends('layouts.app')

@section('content')
<h1>Add Project Milestone</h1>
<form action="{{ route('milestones.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="research_grant_id" class="form-label">Research Grant</label>
        <select class="form-select" id="research_grant_id" name="research_grant_id" required>
            @foreach ($researchGrants as $grant)
            <option value="{{ $grant->id }}">{{ $grant->title }}</option>
            @endforeach
        </select>
    </div>
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
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection
