@extends('layouts.app')

@section('content')
<div class="container marketing">


    <!-- Current CVS -->
    @if (count($cvs) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current CVs:
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>CV</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @foreach ($cvs as $cv)
                        <tr>
                            <td class="table-text"><div>{{ $cv->name }}</div></td>

                            <!-- CV Delete Button -->
                            <td>
                                <form action="/task/{{ $cv->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-task-{{ $cv->id }}" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif


    <div class="row">
        <div class="col-lg-4">
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
@endsection