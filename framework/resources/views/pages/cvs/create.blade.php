@extends('layouts.app')

        <!-- Include code for sections. -->
@include('pages.sections.creation.languages')
@include('pages.sections.creation.education')
@include('pages.sections.creation.hobbies')
@include('pages.sections.creation.jobs')
@include('pages.sections.creation.languages')
@include('pages.sections.creation.skills')
@include('pages.sections.creation.user')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/cvs.css') }}">
    <div class="page-title">
        <h1>Create a new CV</h1>
    </div>

    {!! Form::open() !!}

    @yield('user')

    @yield('jobs')

    @yield('skills')

    @yield('languages')

    @yield('education')

    @yield('hobbies')

    {!! Form::submit('Build my CV!',['class' => 'btn btn-default btn-block']) !!}
    {!! Form::close() !!}
@stop

