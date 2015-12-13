@extends('layouts.app')

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

        @if($showWork)
            <div class="panel panel-default cv-work">
                <div class="panel-heading">
                    <div class="panel-title">
                        Work Experience
                    </div>
                </div>

                <div class="panel-body">
                    @foreach($workSection as $job)
                        @if(count($job) != 0)
                            {{dump($job[0])}}
                        @endif
                    @endforeach
                </div>
            </div>
        @endif

        @if($showSkills)
            <div class="panel panel-default cv-skills">
                <div class="panel-heading">
                    <div class="panel-title">
                        Skills
                    </div>
                </div>

                <div class="panel-body">
                    @foreach($skillSection as $skill)
                        @if(count($skill) != 0)
                            {{dump($skill[0])}}
                        @endif
                    @endforeach
                </div>
            </div>
        @endif

        @if($showLangauges)
            <div class="panel panel-default cv-languages">
                <div class="panel-heading">
                    <div class="panel-title">
                        Languages
                    </div>
                </div>

                <div class="panel-body">
                    @foreach($languageSection as $language)
                        @if(count($language) != 0)
                            {{dump($language[0])}}
                        @endif
                    @endforeach
                </div>
            </div>
        @endif

        @if($showHobbies)
            <div class="panel panel-default cv-hobbies">
                <div class="panel-heading">
                    <div class="panel-title">
                        My Hobbies
                    </div>
                </div>

                <div class="panel-body">
                    @foreach($hobbySection as $hobby)
                        @if(count($hobby) != 0)
                            {{dump($hobby[0])}}
                        @endif
                    @endforeach
                </div>
            </div>
        @endif

        @if($showEducation)
            <div class="panel panel-default cv-education">
                <div class="panel-heading">
                    <div class="panel-title">
                        My Education and Certification
                    </div>
                </div>

                <div class="panel-body">
                    @foreach($educationSection as $education)
                        @if(count($education) != 0)
                            {{dump($education[0])}}
                        @endif
                    @endforeach
                </div>
            </div>
        @endif


    </article>

@endsection