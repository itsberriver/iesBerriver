@extends('layouts.app')

@section('content')
    @foreach($students as $student)

        <p> {{$student->studentName}}</p>

    @endforeach
@endsection
