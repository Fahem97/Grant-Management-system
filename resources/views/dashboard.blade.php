@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>Welcome to the Dashboard</h1>
    <a href="{{ route('logout') }}" class="btn btn-danger mt-3">Logout</a>
</div>
@endsection