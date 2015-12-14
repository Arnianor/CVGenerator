@section('hobbies')

    <div class="page-header">
        <h1>Hobbies</h1>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">My Hobbies</div>
            </div>
            <div class="panel-body">

                <div class='form-group' {!! $errors->has('hobby') ? 'has-error' : '' !!} >
                    {!! Form::label('hobby', 'Hobby') !!}
                    {!! Form::text('hobby','I like to go hikking and watching videos of Jessica Nigri.',['class' => 'form-control', 'placeholder' => 'A hobby of yours']) !!}
                    {!! $errors->first('hobby', '<small class="help-block">:message</small>') !!}
                </div>

            </div>
        </div>
    </div>

@endsection