@extends('layouts.app')

@include('pages.sections.display.user')
@include('pages.sections.display.jobs')
@include('pages.sections.display.hobbies')
@include('pages.sections.display.education')
@include('pages.sections.display.skills')
@include('pages.sections.display.languages')

<?php
function sentenceCase($s)
{
    $ret = '';
    $str = strtolower($s);
    $cap = true;

    for ($x = 0; $x < strlen($str); $x++)
    {
        $letter = substr($str, $x, 1);
        if ($letter == "." || $letter == "!" || $letter == "?")
        {
            $cap = true;
        } elseif ($letter != " " && $cap == true)
        {
            $letter = strtoupper($letter);
            $cap = false;
        }

        $ret .= $letter;
    }

    return $ret;
}
?>

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/cvs.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/templates/professional.css') }}">

    <header class="page-header">
        <h1>{{$cv->name}}</h1>
    </header>

    <article>

        <?php
        if (count($workSection) != 0)
        {
            $showWork = true;
        } else
        {
            $showWork = false;
        }
        if (count($languageSection) != 0)
        {
            $showLangauges = true;
        } else
        {
            $showLangauges = false;
        }
        if (count($educationSection) != 0)
        {
            $showEducation = true;
        } else
        {
            $showEducation = false;
        }
        if (count($hobbySection) != 0)
        {
            $showHobbies = true;
        } else
        {
            $showHobbies = false;
        }
        if (count($skillSection) != 0)
        {
            $showSkills = true;
        } else
        {
            $showSkills = false;
        }

        ?>
        <div class="row">
            @yield('user')
        </div>

        @if($showWork)
            <div class="row">
                @yield('jobs')
            </div>
        @endif

        @if($showSkills)
            <div class="row">
                @yield('skills')
            </div>
        @endif

        @if($showLangauges)
            <div class="row">
                @yield('languages')
            </div>
        @endif

        @if($showHobbies)
            <div class="row">
                @yield('hobbies')
            </div>
        @endif

        @if($showEducation)
            <div class="row">
                @yield('education')
            </div>
        @endif


    </article>

@endsection