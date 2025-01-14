@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Project Milestones</h1>
    <a href="{{ route('milestones.create') }}" class="btn btn-success">Add Milestone</a>
</div>
<table class="table table-hover shadow-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Milestone Name</th>
            <th>Target Completion Date</th>
            <th>Deliverable</th>
            <th>Grant Title</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($milestones as $milestone)
        <tr>
            <td>{{ $milestone->id }}</td>
            <td>{{ $milestone->name }}</td>
            <td>{{ $milestone->target_completion_date }}</td>
            <td>{{ $milestone->deliverable }}</td>
            <td>{{ $milestone->grant->title }}</td>
            <td>{{ $milestone->status ?? 'Pending' }}</td>
            <td>
                <a href="{{ route('milestones.edit', $milestone->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('milestones.destroy', $milestone->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
