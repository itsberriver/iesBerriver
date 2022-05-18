@extends('layouts.app')

@section('content')
    @foreach($students as $student)

        <p class="text-center"> {{$student->studentName}}</p>
        <p class="bg-red"> {{$student->studentEmail}}</p>
        
    @endforeach


    {{$students->links()}}
@endsection
