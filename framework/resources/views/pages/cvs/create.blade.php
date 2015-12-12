@extends('layouts.app')

@section('content')

    <div class="page-title">
        <h1>Create a new CV</h1>
    </div>


    <div class="row">
        {!! Form::open() !!}

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
                        {!! Form::radio('sex', 'Mister', ['autofocus', 'required']) !!}

                        <label class='radio-inline'>
                            {!! Form::label('sex', 'M\'am'/*,['class' => 'radio-inline']*/) !!}
                        </label>
                        {!! Form::radio('sex', 'Miss') !!}

                        {!! $errors->first('sex', '<small class="help-block">:message</small>') !!}
                    </div>
                </div>

                <div class="col-md-2 personal-details">
                    <div class='form-group' {!! $errors->has('firstName') ? 'has-error' : '' !!} >
                        {!! Form::label('firstName', 'Surname') !!}
                        {!! Form::text('firstName','',['required', 'class' => 'form-control', 'placeholder' => 'Roger']) !!}
                        {!! $errors->first('firstName', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class='form-group' {!! $errors->has('lastName') ? 'has-error' : '' !!} >
                        {!! Form::label('lastName', 'Lastname') !!}
                        {!! Form::text('lastName','',['required', 'class' => 'form-control', 'placeholder' => 'Sighmore']) !!}
                        {!! $errors->first('lastName', '<small class="help-block">:message</small>') !!}
                    </div>

                    <div class='form-group' {!! $errors->has('birthDate') ? 'has-error' : '' !!} >
                        {!! Form::label('birthDate', 'Date of birth') !!}
                        {!! Form::date('birthDate','',['required', 'class' => 'form-control', 'placeholder' => 'dd.MM.year']) !!}
                        {!! $errors->first('birthDate', '<small class="help-block">:message</small>') !!}
                    </div>
                </div>


                <div class="col-md-2 personal-contact">

                    <div class="personal-contact-pysical">

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

                <div class="col-md-3 personal-contact">
                    <div class="personal-contact-digital">
                        <div class='form-group' {!! $errors->has('mail') ? 'has-error' : '' !!} >
                            {!! Form::label('mail', 'E-Mail') !!}
                            {!! Form::email('mail','',['required', 'class' => 'form-control', 'placeholder' => 'roger.sighmore@hotmail.com']) !!}
                            {!! $errors->first('mail', '<small class="help-block">:message</small>') !!}
                        </div>

                        <div class='form-group' {!! $errors->has('telephone') ? 'has-error' : '' !!} >
                            {!! Form::label('telephone', 'Telephone number') !!}
                            {!! Form::tel('telephone','',['class' => 'form-control', 'placeholder' => '078/755 82 82']) !!}
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
                                <div class='form-group' {!! $errors->has('function') ? 'has-error' : '' !!} >
                                    {!! Form::label('function', 'Job Title',['class' => 'sr-only']) !!}
                                    {!! Form::text('function','',['class' => 'form-control', 'placeholder' => 'Evil Mastermind']) !!}
                                    {!! $errors->first('function', '<small class="help-block">:message</small>') !!}
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

                                <div class="form-group" {!! $errors->has('enterpriseBeginDate') ? 'has-error' : '' !!}{!! $errors->has('enterpriseEndDate') ? 'has-error' : '' !!} >
                                    {!! Form::label('enterpriseBeginDate', 'Began on the') !!}
                                    {!! Form::date('enterpriseBeginDate','',['class' => 'form-control', 'placeholder' => '25.11.1200']) !!}
                                    {!! $errors->first('enterpriseBeginDate', '<small class="help-block">:message</small>') !!}

                                    {!! Form::label('enterpriseEndDate', 'End date') !!}
                                    {!! Form::date('enterpriseEndDate','',['class' => 'form-control', 'placeholder' => 'Present']) !!}
                                    {!! $errors->first('enterpriseEndDate', '<small class="help-block">:message</small>') !!}
                                </div>
                                <!--
                                <div class='form-group' {!! $errors->has('enterpriseBeginDate') ? 'has-error' : '' !!} >
                                    {!! Form::label('enterpriseBeginDate', 'Began on the') !!}
                                {!! Form::date('enterpriseBeginDate','',['class' => 'form-control', 'placeholder' => '25.11.1200']) !!}
                                {!! $errors->first('enterpriseBeginDate', '<small class="help-block">:message</small>') !!}
                                        </div>
                                        <div class='form-group' {!! $errors->has('enterpriseEndDate') ? 'has-error' : '' !!} >
                                    {!! Form::label('enterpriseEndDate', 'End date') !!}
                                {!! Form::date('enterpriseEndDate','',['class' => 'form-control', 'placeholder' => 'Present']) !!}
                                {!! $errors->first('enterpriseEndDate', '<small class="help-block">:message</small>') !!}
                                        </div>
                                        -->
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
                            {!! Form::text('enterprise','',['class' => 'form-control', 'placeholder' => 'Aperture Science']) !!}
                            {!! $errors->first('enterprise', '<small class="help-block">:message</small>') !!}
                        </div>

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
                                    {!! Form::text('degree','',['class' => 'form-control', 'placeholder' => 'Bachelor of Science of Installing  all applications in C:\\']) !!}
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
                                    {!! Form::date('degreeBeginDate','',['class' => 'form-control', 'placeholder' => 'dd.MM.year']) !!}
                                    {!! $errors->first('degreeBeginDate', '<small class="help-block">:message</small>') !!}
                                </div>

                                <div class='form-group' {!! $errors->has('degreeEndDate') ? 'has-error' : '' !!} >
                                    {!! Form::label('degreeEndDate', 'End') !!}
                                    {!! Form::date('degreeEndDate','',['class' => 'form-control', 'placeholder' => 'dd.MM.year']) !!}
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
                            {!! Form::text('school','',['class' => 'form-control', 'placeholder' => 'Show this text bitch']) !!}
                            {!! $errors->first('school', '<small class="help-block">:message</small>') !!}
                        </div>

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
                    {!! Form::text('language','',['class' => 'form-control', 'placeholder' => 'Langue connue']) !!}
                    {!! $errors->first('language', '<small class="help-block">:message</small>') !!}
                </div>

                <div class='form-group' {!! $errors->has('languageDegree') ? 'has-error' : '' !!} >
                    {!! Form::label('languageDegree', 'Diplôme') !!}
                    {!! Form::text('languageDegree','',['class' => 'form-control', 'placeholder' => 'Diplôme de langue']) !!}
                    {!! $errors->first('languageDegree', '<small class="help-block">:message</small>') !!}
                </div>

                <div class='form-group' {!! $errors->has('languageLevel') ? 'has-error' : '' !!} >
                    {!! Form::label('languageLevel', 'Niveau européen') !!}
                    {!! Form::text('languageLevel','',['class' => 'form-control', 'placeholder' => 'Niveau européen de la langue']) !!}
                    {!! $errors->first('languageLevel', '<small class="help-block">:message</small>') !!}
                </div>
            </div>
        </div>
    </div>

    {!! Form::submit('Build my CV!',['class' => 'btn btn-default btn-block']) !!}
    {!! Form::close() !!}
@stop