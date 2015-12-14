@section('jobs')
    <div class="page-header">
        <h1>Professional Experience</h1>
    </div>

    <div class="row">
        <div class="panel panel-primary job-section">
            <div class="panel-heading">
                <div class="panel-title">Job Information</div>
            </div>
            <div class="panel-body">

                <div class="row">
                    <div class="col-md-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title">Job Title</div>
                            </div>
                            <div class="panel-body">
                                <div class='form-group' {!! $errors->has('job_name') ? 'has-error' : '' !!} >
                                    {!! Form::label('job_name', 'Job Title',['class' => 'sr-only']) !!}
                                    {!! Form::text('job_name','Evil Genius',['class' => 'form-control', 'placeholder' => 'Evil Mastermind']) !!}
                                    {!! $errors->first('job_name', '<small class="help-block">:message</small>') !!}
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
                                <div class='form-group' {!! $errors->has('enterpriseBeginDate') ? 'has-error' : '' !!} >
                                    {!! Form::label('enterpriseBeginDate', 'Began on the') !!}
                                    {!! Form::date('enterpriseBeginDate','25.11.1200',['class' => 'form-control', 'placeholder' => '25.11.1200']) !!}
                                    {!! $errors->first('enterpriseBeginDate', '<small class="help-block">:message</small>') !!}
                                </div>
                                <div class='form-group' {!! $errors->has('enterpriseEndDate') ? 'has-error' : '' !!} >
                                    {!! Form::label('enterpriseEndDate', 'End date') !!}
                                    {!! Form::date('enterpriseEndDate','25.11.1900',['class' => 'form-control', 'placeholder' => 'Present']) !!}
                                    {!! $errors->first('enterpriseEndDate', '<small class="help-block">:message</small>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="panel panel-default job-company">
                    <div class="panel-heading">
                        <div class="panel-title">Company Information</div>
                    </div>
                    <div class="panel-body job-company-info">
                        <div class='form-group' {!! $errors->has('enterprise') ? 'has-error' : '' !!} >
                            {!! Form::label('enterprise', 'Company') !!}
                            {!! Form::text('enterprise','Aperture Science',['class' => 'form-control', 'placeholder' => 'Aperture Science']) !!}
                            {!! $errors->first('enterprise', '<small class="help-block">:message</small>') !!}
                        </div>



                        <div class='form-group' {!! $errors->has('enterpriseAddress') ? 'has-error' : '' !!} >
                            {!! Form::label('enterpriseAddress', 'Address') !!}
                            {!! Form::text('enterpriseAddress','Aperture laboratiories, Av of Sunshine 24, 40000 Marstrasse, Germany' ,['class' => 'form-control', 'placeholder' => 'Rue de l\'entreprise']) !!}
                            {!! $errors->first('enterpriseAddress', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="hidden">
                            <div class='form-group' {!! $errors->has('enterpriseStreet') ? 'has-error' : '' !!} >
                                {!! Form::label('enterpriseStreet', 'Street') !!}
                                {!! Form::text('enterpriseStreet','',['class' => 'form-control', 'placeholder' => 'Rue de l\'entreprise']) !!}
                                {!! $errors->first('enterpriseStreet', '<small class="help-block">:message</small>') !!}
                            </div>

                            <div class='form-group' {!! $errors->has('enterprisePostalCode') ? 'has-error' : '' !!} >
                                {!! Form::label('enterprisePostalCode', 'Code postal') !!}
                                {!! Form::text('enterprisePostalCode','',['class' => 'form-control', 'placeholder' => 'Code postal de l\'entreprise']) !!}
                                {!! $errors->first('enterprisePostalCode', '<small class="help-block">:message</small>') !!}
                            </div>

                            <div class='form-group' {!! $errors->has('enterpriseLocality') ? 'has-error' : '' !!} >
                                {!! Form::label('enterpriseLocality', 'City') !!}
                                {!! Form::text('enterpriseLocality','',['class' => 'form-control', 'placeholder' => 'Cheyenne Mountain level 95, FEV Laboratory']) !!}
                                {!! $errors->first('enterpriseLocality', '<small class="help-block">:message</small>') !!}
                            </div>

                            <div class='form-group' {!! $errors->has('enterpriseCountry') ? 'has-error' : '' !!} >
                                {!! Form::label('enterpriseCountry', 'Country') !!}
                                {!! Form::text('enterpriseCountry','',['class' => 'form-control', 'placeholder' => 'Hawaii']) !!}
                                {!! $errors->first('enterpriseCountry', '<small class="help-block">:message</small>') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection