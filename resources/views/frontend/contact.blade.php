@extends('layout.master')

@section('pageHeader')
    <div class="text-center my-5">
        <h1 class="fw-bolder">Contact Page</h1>
        <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
    </div>
@endsection

@section('content')
   <div>
    <h1>This is contact content area</h1>
    <x-header>
        <span>This is sub Header form Contact page</span>
        <x-slot:title>
            <span>This is Name Slot form contact</span>
        </x-slot:title>
    </x-header>
   </div>
@endsection







