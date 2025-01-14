@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Research Grants</h1>
    <a href="{{ route('research-grants.create') }}" class="btn btn-success">Add Research Grant</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Grant Provider</th>
            <th>Grant Amount</th>
            <th>Start Date</th>
            <th>Duration (Months)</th>
            <th>Project Leader</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($researchGrants as $grant)
        <tr>
            <td>{{ $grant->id }}</td>
            <td>{{ $grant->title }}</td>
            <td>{{ $grant->grant_provider }}</td>
            <td>{{ $grant->grant_amount }}</td>
            <td>{{ $grant->start_date }}</td>
            <td>{{ $grant->duration_months }}</td>
            <td>{{ $grant->leader->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection