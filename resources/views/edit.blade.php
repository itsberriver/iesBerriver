@extends('layouts.app')

@section('content')


<form action="{{ route('home') }}" method="post">
            @method ('get')
            @csrf
            <button type="submit" onclick="return confirm('Are you sure you want to edit{{$student-> studentName}}?')">Edit</button>

            <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
                <input type="text" name="studentName" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
            </div>
            <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
                <input type="text" name="studentSurname" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
            </div>
            <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
                <input type="text" name="grades" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
            </div>
            <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
                <input type="text" name="avergege" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
            </div>
            <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
                <input type="text" name="makeUpTest" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
            </div>
            <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
                <input type="text" name="attendence" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
            </div>
        </form>

@endsection

