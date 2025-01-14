@extends('layouts.leader')

@section('content')
<div class="container">
    <h1>Manage Members for {{ $project->title }}</h1>
    <form action="{{ route('leader.members.update', $project->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="members" class="form-label">Select Project Members</label>
            <select class="form-select" id="members" name="members[]" multiple>
                @foreach ($academicians as $academician)
                <option value="{{ $academician->id }}"
                    {{ $project->members->contains($academician->id) ? 'selected' : '' }}>
                    {{ $academician->name }} ({{ $academician->position }})
                </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Members</button>
    </form>
</div>
@endsection