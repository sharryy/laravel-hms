@extends('layouts.master')

@section('title') Add Student @endsection

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @livewire('student.add')
    </div>
@endsection
