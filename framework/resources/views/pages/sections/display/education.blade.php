@section('education')
    <div class="page-header">
        <h1>Academic History</h1>
    </div>

    <div class="row">
        <div class="panel panel-primary education-section">

            <div class="panel-heading">
                <div class="panel-title">
                    Education and Certification
                </div>
            </div>

            <div class="panel-body">

                <div class="row">
                    <div class="col-md-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Certification Title
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class='form-group' {!! $errors->has('degree') ? 'has-error' : '' !!} >
                                    {!! Form::text('degree','Bachelor of Awesome',['class' => 'form-control', 'placeholder' => 'Bachelor of Science of Installing  all applications in C:\\']) !!}
                                    {!! $errors->first('degree', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">Timeline</div>
                            </div>
                            <div class="panel-body form-inline">

                                <div class='form-group' {!! $errors->has('degreeBeginDate') ? 'has-error' : '' !!} >
                                    {!! Form::label('degreeBeginDate', 'Beginning') !!}
                                    {!! Form::date('degreeBeginDate','11.01.2000',['class' => 'form-control', 'placeholder' => 'dd.MM.year']) !!}
                                    {!! $errors->first('degreeBeginDate', '<small class="help-block">:message</small>') !!}
                                </div>

                                <div class='form-group' {!! $errors->has('degreeEndDate') ? 'has-error' : '' !!} >
                                    {!! Form::label('degreeEndDate', 'End') !!}
                                    {!! Form::date('degreeEndDate','11.01.2010',['class' => 'form-control', 'placeholder' => 'dd.MM.year']) !!}
                                    {!! $errors->first('degreeEndDate', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Academic Institution Information
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class='form-group' {!! $errors->has('school') ? 'has-error' : '' !!} >
                            {!! Form::label('school', 'School/University/Academic place name') !!}
                            {!! Form::text('school','HE-Argh',['class' => 'form-control', 'placeholder' => 'Show this text bitch']) !!}
                            {!! $errors->first('school', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class='form-group' {!! $errors->has('schoolAddress') ? 'has-error' : '' !!} >
                            {!! Form::label('schoolAddress', 'Address') !!}
                            {!! Form::text('schoolAddress','Aperture laboratiories, Av of Sunshine 24, 40000 Marstrasse, Germany' ,['class' => 'form-control', 'placeholder' => 'Rue de l\'entreprise']) !!}
                            {!! $errors->first('schoolAddress', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="hidden">
                            <div class='form-group' {!! $errors->has('schoolStreet') ? 'has-error' : '' !!} >
                                {!! Form::label('schoolStreet', 'Rue') !!}
                                {!! Form::text('schoolStreet','',['class' => 'form-control', 'placeholder' => 'Maximum Underground 26']) !!}
                                {!! $errors->first('schoolStreet', '<small class="help-block">:message</small>') !!}
                            </div>


                            <div class='form-group' {!! $errors->has('schoolPostalCode') ? 'has-error' : '' !!} >
                                {!! Form::label('schoolPostalCode', 'Postal code') !!}
                                {!! Form::text('schoolPostalCode','',['class' => 'form-control', 'placeholder' => '12533']) !!}
                                {!! $errors->first('schoolPostalCode', '<small class="help-block">:message</small>') !!}
                            </div>

                            <div class='form-group' {!! $errors->has('schoolLocality') ? 'has-error' : '' !!} >
                                {!! Form::label('schoolLocality', 'City') !!}
                                {!! Form::text('schoolLocality','',['class' => 'form-control', 'placeholder' => 'Honolulu']) !!}
                                {!! $errors->first('schoolLocality', '<small class="help-block">:message</small>') !!}
                            </div>

                            <div class='form-group' {!! $errors->has('schoolCountry') ? 'has-error' : '' !!} >
                                {!! Form::label('schoolCountry', 'Country') !!}
                                {!! Form::text('schoolCountry','',['class' => 'form-control', 'placeholder' => 'Hawaii']) !!}
                                {!! $errors->first('schoolCountry', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection