@extends('layouts.app')

@section('content')
    @foreach($students as $student)

        <p class="text-center"> {{$student->studentName}}</p>
        <p class="bg-red"> {{$student->studentEmail}}</p>
        <form action="{{ route('delete', $student->id) }}" method="post">
            @method ('delete')
            @csrf
            <button type="submit" class="rounded-full bg-yellow">Delete</button>
        </form>
        @endforeach


    {{$students->links()}}
@endsection
