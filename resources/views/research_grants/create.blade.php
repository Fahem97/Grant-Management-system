@extends('layouts.app')

@section('content')
<h1>Add Research Grant</h1>
<form action="{{ route('research-grants.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Project Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="grant_provider" class="form-label">Grant Provider</label>
        <input type="text" class="form-control" id="grant_provider" name="grant_provider" required>
    </div>
    <div class="mb-3">
        <label for="grant_amount" class="form-label">Grant Amount</label>
        <input type="number" class="form-control" id="grant_amount" name="grant_amount" required>
    </div>
    <div class="mb-3">
        <label for="start_date" class="form-label">Start Date</label>
        <input type="date" class="form-control" id="start_date" name="start_date" required>
    </div>
    <div class="mb-3">
        <label for="duration_months" class="form-label">Duration (Months)</label>
        <input type="number" class="form-control" id="duration_months" name="duration_months" required>
    </div>
    <div class="mb-3">
        <label for="project_leader_id" class="form-label">Project Leader</label>
        <select class="form-select" id="project_leader_id" name="project_leader_id" required>
            @foreach ($academicians as $academician)
            <option value="{{ $academician->id }}">{{ $academician->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection