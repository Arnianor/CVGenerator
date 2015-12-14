@section('languages')

    <div class="page-header">
        <h1>Languages</h1>
    </div>

    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Languages</div>
            </div>
            <div class="panel-body">

                <div class='form-group' {!! $errors->has('language') ? 'has-error' : '' !!} >
                    {!! Form::label('language', 'Langue') !!}
                    {!! Form::text('language','Romanian',['class' => 'form-control', 'placeholder' => 'Langue connue']) !!}
                    {!! $errors->first('language', '<small class="help-block">:message</small>') !!}
                </div>

                <div class='form-group' {!! $errors->has('languageDegree') ? 'has-error' : '' !!} >
                    {!! Form::label('languageDegree', 'Diplôme') !!}
                    {!! Form::text('languageDegree','Awesomitude',['class' => 'form-control', 'placeholder' => 'Diplôme de langue']) !!}
                    {!! $errors->first('languageDegree', '<small class="help-block">:message</small>') !!}
                </div>

                <div class='form-group' {!! $errors->has('languageLevel') ? 'has-error' : '' !!} >
                    {!! Form::label('languageLevel', 'Niveau européen') !!}
                    {!! Form::text('languageLevel','100',['class' => 'form-control', 'placeholder' => 'Niveau européen de la langue']) !!}
                    {!! $errors->first('languageLevel', '<small class="help-block">:message</small>') !!}
                </div>
            </div>
        </div>
    </div>

@endsection