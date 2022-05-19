@extends('layouts.app')

@section('content')


<form action="{{ route('home') }}" method="post">
            @method ('get')
            @csrf
            <button type="submit" onclick="return confirm('Are you sure you want to edit{{$student->id}}?')">Edit</button>
        </form>

@endsection