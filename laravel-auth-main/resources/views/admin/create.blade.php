@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <form action="{{route('projects.store')}}" method="POST"></form>

    </div>
@endsection