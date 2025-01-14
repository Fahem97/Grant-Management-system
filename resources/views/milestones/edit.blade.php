@extends('layouts.app')

@section('content')
<h1>Edit Project Milestone</h1>
<form action="{{ route('milestones.update', $milestone->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="research_grant_id" class="form-label">Research Grant</label>
        <select class="form-select" id="research_grant_id" name="research_grant_id" required>
            @foreach ($researchGrants as $grant)
            <option value="{{ $grant->id }}" {{ $grant->id == $milestone->research_grant_id ? 'selected' : '' }}>
                {{ $grant->title }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Milestone Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $milestone->name }}" required>
    </div>
    <div class="mb-3">
        <label for="target_completion_date" class="form-label">Target Completion Date</label>
        <input type="date" class="form-control" id="target_completion_date" name="target_completion_date" value="{{ $milestone->target_completion_date }}" required>
    </div>
    <div class="mb-3">
        <label for="deliverable" class="form-label">Deliverable</label>
        <input type="text" class="form-control" id="deliverable" name="deliverable" value="{{ $milestone->deliverable }}" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{ $milestone->status }}">
    </div>
    <div class="mb-3">
        <label for="remark" class="form-label">Remark</label>
        <textarea class="form-control" id="remark" name="remark">{{ $milestone->remark }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
