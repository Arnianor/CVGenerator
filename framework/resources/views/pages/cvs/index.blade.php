@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ URL::asset('assets/css/cvs.css') }}">
    <div class="container marketing cv">
        <?php $centerOnPage = false ?>

        <!-- Current CVS -->
        <div class="row">
            @if (count($cvs) > 0)
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current CVs:
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table">

                                <thead></thead>
                                <tbody>
                                <!-- Get all the user's CVs. -->
                                @foreach ($cvs as $cv)
                                    <tr>
                                        <td class="table-text">
                                            <div>{{ $cv->name }}</div>
                                        </td>

                                        <div class="btn-group btn-group-justified">
                                            <!-- CV Show Button -->
                                            <td>
                                                <form action="/cv/{{$cv->id}}" method="get">
                                                    {{csrf_field()}}
                                                    {{method_field('SHOW')}}

                                                    <button type="submit" id="show-cv-{{$cv->id}}"
                                                            class="btn btn-primary">
                                                        <i class="fa fa-btn fa-eye">Show</i>
                                                    </button>

                                                </form>
                                            </td>

                                            <!-- CV Delete Button -->
                                            <td>
                                                <form action="/cv/{{ $cv->id }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                                    <button type="submit" id="delete-cv-{{ $cv->id }}"
                                                            class="btn btn-danger">
                                                        <i class="fa fa-btn fa-trash"></i>Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </div>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @else
                <?php $centerOnPage = true ?>
                @endif

                        <!-- Create a brand new CV -->
                @if($centerOnPage)
                    <div class="col-md">
                @else
                    <div class="col-md-6">
                @endif
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Want to make a brand new one?
                                </div>
                            </div>
                            <div class="panel-body">
                                <div>
                                    <!--
                                    <img width="140" height="140" class="img-circle" alt="Generic placeholder image" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
                                    -->
                                    <span class="glyphicon glyphicon-education" aria-hidden="true"></span>

                                    <h2>New CV</h2>

                                    <p>Build a new professional-'ish' looking CV.</p>

                                    <p><a class="btn btn-default" role="button" href="cv">Let's go.</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection