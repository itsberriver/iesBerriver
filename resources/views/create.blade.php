@extends('layouts.app')

@section('content')


<div class="flex justify-center items-center text-white m-0 .p-0 font-bold relative h-20 col-span-2 mt-5 w-full">
        <h2 id="top" class="m-0 absolute z-10 text-4xl md:text-7xl">CREATE</h2>
        <h2 id="bottom" class="absolute z-0 mt-3 text-4xl md:text-7xl">CREATE</h2>
    </div>
    <form action="{{route('store')}}" method="POST" class="flex justify-center col-span-2">
        @csrf 
        <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
            <input type="text" name="studentName" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
        </div>
        <!-- General error: 1364 Field 'studentSurname' doesn't have a default value  -->
        <div class="flex justify-center flex-column w-fit p-9 gap-4 items-center border-1 border-white rounded-3xl md:p-12">
            <input type="text" name="studentSurname" class="rounded-3xl text-center w-64 h-11" placeholder="Name">
        </div>
        <!-- General error: 1364 Field 'grades' doesn't have a default value  -->
        <button type="submit">Creatcreaae</button>
    </form>
@endsection('content')