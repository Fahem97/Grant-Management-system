@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Academicians</h1>
    <a href="{{ route('academicians.create') }}" class="btn btn-success">Add Academician</a>
</div>
<table class="table table-hover shadow-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Staff Number</th>
            <th>Email</th>
            <th>College</th>
            <th>Department</th>
            <th>Position</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($academicians as $academician)
        <tr>
            <td>{{ $academician->id }}</td>
            <td>{{ $academician->name }}</td>
            <td>{{ $academician->staff_number }}</td>
            <td>{{ $academician->email }}</td>
            <td>{{ $academician->college }}</td>
            <td>{{ $academician->department }}</td>
            <td>{{ $academician->position }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
