@section('skills')

    <div class="page-header">
        <h1>Skills</h1>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Skills</div>
            </div>
            <div class="panel-body">

                <div class='form-group' {!! $errors->has('skill') ? 'has-error' : '' !!} >
                    {!! Form::label('skill', 'Skill') !!}
                    {!! Form::text('skill','C++',['class' => 'form-control', 'placeholder' => 'A skill you possess']) !!}
                    {!! $errors->first('skill', '<small class="help-block">:message</small>') !!}
                </div>

                <div class='form-group' {!! $errors->has('skillDegree') ? 'has-error' : '' !!} >
                    {!! Form::label('skillDegree', 'Description') !!}
                    {!! Form::text('skillDegree','Awesomitude',['class' => 'form-control', 'placeholder' => 'A description of the skill']) !!}
                    {!! $errors->first('skillDegree', '<small class="help-block">:message</small>') !!}
                </div>

                <div class='form-group' {!! $errors->has('skillLevel') ? 'has-error' : '' !!} >
                    {!! Form::label('skillLevel', 'Level') !!}
                    {!! Form::text('skillLevel','100',['class' => 'form-control', 'placeholder' => 'Level of expertise']) !!}
                    {!! $errors->first('skillLevel', '<small class="help-block">:message</small>') !!}
                </div>
            </div>
        </div>
    </div>

@endsection