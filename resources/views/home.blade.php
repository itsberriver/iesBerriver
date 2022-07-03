@extends('layouts.app')

@section('content')
    @foreach($students as $student)

        <p class="text-center"> {{$student->studentName}}</p>
        <p class="bg-red"> {{$student->studentEmail}}</p>
        <form action="{{ route('delete', $student->id) }}" method="post">
            @method ('delete')
            @csrf
            <button type="submit" onclick="return confirm('Are you sure you want to delete {{$student->studentName}}?')">Delete</button>
        </form>
        <form>
        <form action="{{ route('update', $student->id) }}" method="post">
        @method ('patch')
        @csrf
        <a href="{{ route('edit', $student->id) }}">
            <button type="button">Edit</button>
        </a>
    </form>
        @endforeach
        <form>
        <form action="{{ route('create', $student->id) }}" method="post">
        @method ('patch')
        @csrf
        <a href="{{ route('create') }}">
            <button type="button">Create</button>
        </a>
    </form>

    {{$students->links()}}
@endsection
