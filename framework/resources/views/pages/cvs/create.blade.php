@extends('layouts.app')

@section('content')

    <div class="page-title">
        <h1>Create a new CV</h1>
    </div>


    <div class="row">
        {!! Form::open() !!}

        <div class="panel panel-danger">
            <div class="panel-heading"><div class="panel-title">CV Name</div></div>
            <div class="panel-body">
                <div class='form-group' {!! $errors->has('name') ? 'has-error' : '' !!} >
                    {!! Form::label('name', 'CV name',['class' => 'sr-only']) !!}
                    {!! Form::text('name','My First CV',['required', 'class' => 'form-control', 'placeholder' => 'My First CV']) !!}
                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                </div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">Personal Data</div>
            </div>
            <div class="panel-body">
                <div class="col-md personal-sex">
                    <div class='form-group' {!! $errors->has('sex') ? 'has-error' : '' !!} >
                        <label class='radio-inline'>
                            {!! Form::label('sex', 'M') !!}
                        </label>
                        {!! Form::radio('sex', 'm', ['autofocus', 'required']) !!}

                        <label class='radio-inline'>
                            {!! Form::label('sex', 'M\'am'/*,['class' => 'radio-inline']*/) !!}
                        </label>
                        {!! Form::radio('sex', 'f') !!}

                        {!! $errors->first('sex', '<small class="help-block">:message</small>') !!}
                    </div>
                </div>

                <div class="col-md-2 personal-details">
                    <div class='form-group' {!! $errors->has('surname') ? 'has-error' : '' !!} >
                        {!! Form::label('surname', 'Surname') !!}
                        {!! Form::text('surname','Samuels',['required', 'class' => 'form-control', 'placeholder' => 'Samuels']) !!}
                        {!! $errors->first('surname', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class='form-group' {!! $errors->has('nickname') ? 'has-error' : '' !!} >
                        {!! Form::label('nickname', 'Nickname') !!}
                        {!! Form::text('nickname',$user->name,['class' => 'form-control', 'placeholder' => $user->name]) !!}
                        {!! $errors->first('nickname', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class='form-group' {!! $errors->has('lastname') ? 'has-error' : '' !!} >
                        {!! Form::label('lastname', 'Lastname') !!}
                        {!! Form::text('lastname','Sighmore',['required', 'class' => 'form-control', 'placeholder' => 'Sighmore']) !!}
                        {!! $errors->first('lastname', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class='form-group' {!! $errors->has('date_birth') ? 'has-error' : '' !!} >
                        {!! Form::label('date_birth', 'Date of birth') !!}
                        {!! Form::date('date_birth','22.11.1925',['required', 'class' => 'form-control', 'placeholder' => 'dd.MM.year']) !!}
                        {!! $errors->first('date_birth', '<small class="help-block">:message</small>') !!}
                    </div>
                </div>


                <div class="col-md-2 personal-contact">

                    <div class="personal-contact-pysical">


                        <div class='form-group' {!! $errors->has('address') ? 'has-error' : '' !!} >
                            {!! Form::label('address', 'Address') !!}
                            {!! Form::text('address','Chandler Avenue 45, 2023 Gorgier, Switzerland',['class' => 'form-control', 'placeholder' => 'Chandler Avenue 45, 2023 Gorgier, Switzerland']) !!}
                            {!! $errors->first('address', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class="hidden">
                        <div class='form-group' {!! $errors->has('street') ? 'has-error' : '' !!} >
                            {!! Form::label('street', 'Street') !!}
                            {!! Form::text('street','',['class' => 'form-control', 'placeholder' => 'Chandler Avenue 45']) !!}
                            {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class='form-group' {!! $errors->has('postalCode') ? 'has-error' : '' !!} >
                            {!! Form::label('postalCode', 'Postal Code') !!}
                            {!! Form::text('postalCode','',['class' => 'form-control', 'placeholder' => '12225']) !!}
                            {!! $errors->first('postalCode', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class='form-group' {!! $errors->has('locality') ? 'has-error' : '' !!} >
                            {!! Form::label('city', 'City') !!}
                            {!! Form::text('city','',['class' => 'form-control', 'placeholder' => 'New Laraville']) !!}
                            {!! $errors->first('locality', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class='form-group' {!! $errors->has('country') ? 'has-error' : '' !!} >
                            {!! Form::label('country', 'Country') !!}
                            {!! Form::text('country','',['class' => 'form-control', 'placeholder' => 'Toomuchlinuxland']) !!}
                            {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 personal-contact">
                    <div class="personal-contact-digital">
                        <div class='form-group' {!! $errors->has('mail') ? 'has-error' : '' !!} >
                            {!! Form::label('mail', 'E-Mail') !!}
                            {!! Form::email('mail',$user->email,['required', 'class' => 'form-control', 'placeholder' => $user->email]) !!}
                            {!! $errors->first('mail', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class='form-group' {!! $errors->has('telephone') ? 'has-error' : '' !!} >
                            {!! Form::label('telephone', 'Telephone number') !!}
                            {!! Form::tel('telephone','078/609 21 55',['class' => 'form-control', 'placeholder' => '078/755 82 82']) !!}
                            {!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                    {!! Form::text('job_name','Evil Asshole',['class' => 'form-control', 'placeholder' => 'Evil Mastermind']) !!}
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

    {!! Form::submit('Build my CV!',['class' => 'btn btn-default btn-block']) !!}
    {!! Form::close() !!}
@stop