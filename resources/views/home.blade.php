@extends('layouts.app')

@section('content')
    @foreach($students as $student)

        <p> {{$students->studentName}}</p>

    @endforeach
@endsection
