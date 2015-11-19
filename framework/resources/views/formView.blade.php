@extends('template')

@section('content')
	
	{!! Form::open(['url' => 'formulaire/forms']) !!}
		<h3>Données personnelles</h3>
		<div class='form-group' {!! $errors->has('sex') ? 'has-error' : '' !!} >
			<label class='radio-inline' >
				{!! Form::label('sex', 'M') !!}
				{!! Form::radio('sex', 'Mister', ['autofocus', 'required']) !!}
			</label>
			<label class='radio-inline' >
				{!! Form::label('sex', 'Mme') !!}
				{!! Form::radio('sex', 'Miss') !!}
			</label>
				{!! $errors->first('sex', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('firstName') ? 'has-error' : '' !!} >
			{!! Form::label('firstName', 'Prénom') !!}
			{!! Form::text('firstName','',['required', 'class' => 'form-control', 'placeholder' => 'Votre prénom']) !!}
			{!! $errors->first('firstName', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('lastName') ? 'has-error' : '' !!} >
			{!! Form::label('lastName', 'Nom') !!}
			{!! Form::text('lastName','',['required', 'class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
			{!! $errors->first('lastName', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('birthDate') ? 'has-error' : '' !!} >
			{!! Form::label('birthDate', 'Date de naissance') !!}
			{!! Form::date('birthDate','',['required', 'class' => 'form-control', 'placeholder' => 'Votre date de naissance']) !!}
			{!! $errors->first('birthDate', '<small class="help-block">:message</small>') !!}
		</div>
		<h3>Contacts</h3>
		<div class='form-group' {!! $errors->has('street') ? 'has-error' : '' !!} >
			{!! Form::label('street', 'Rue') !!}
			{!! Form::text('street','',['class' => 'form-control', 'placeholder' => 'Votre rue']) !!}
			{!! $errors->first('street', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('streetNumber') ? 'has-error' : '' !!} >	
			{!! Form::label('streetNumber', 'N°') !!}
			{!! Form::number('streetNumber','',['min' => '1', 'class' => 'form-control', 'placeholder' => 'Votre n° de porte']) !!}
			{!! $errors->first('streetNumber', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('postalCode') ? 'has-error' : '' !!} >
			{!! Form::label('postalCode', 'Code postal') !!}
			{!! Form::text('postalCode','',['class' => 'form-control', 'placeholder' => 'Votre code postal']) !!}
			{!! $errors->first('postalCode', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('locality') ? 'has-error' : '' !!} >
			{!! Form::label('locality', 'Localité') !!}
			{!! Form::text('locality','',['class' => 'form-control', 'placeholder' => 'Votre localité']) !!}
			{!! $errors->first('locality', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('country') ? 'has-error' : '' !!} >
			{!! Form::label('country', 'Pays') !!}
			{!! Form::text('country','',['class' => 'form-control', 'placeholder' => 'Votre pays']) !!}
			{!! $errors->first('country', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('mail') ? 'has-error' : '' !!} >
			{!! Form::label('mail', 'E-Mail') !!}
			{!! Form::email('mail','',['required', 'class' => 'form-control', 'placeholder' => 'Votre e-mail']) !!}
			{!! $errors->first('mail', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('telephone') ? 'has-error' : '' !!} >
			{!! Form::label('telephone', 'Téléphone') !!}
			{!! Form::tel('telephone','',['class' => 'form-control', 'placeholder' => 'Votre n° de téléphone fixe']) !!}
			{!! $errors->first('telephone', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('portable') ? 'has-error' : '' !!} >	
			{!! Form::label('portable', 'Portable') !!}
			{!! Form::tel('portable','',['class' => 'form-control', 'placeholder' => 'Votre n° de portable']) !!}
			{!! $errors->first('portable', '<small class="help-block">:message</small>') !!}
		</div>
		<h3>Parcours professionnel</h3>
		<div class='form-group' {!! $errors->has('function') ? 'has-error' : '' !!} >
			{!! Form::label('function', 'Poste') !!}
			{!! Form::text('function','',['class' => 'form-control', 'placeholder' => 'Votre fonction']) !!}
			{!! $errors->first('function', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('enterprise') ? 'has-error' : '' !!} >
			{!! Form::label('enterprise', 'Entreprise') !!}
			{!! Form::text('enterprise','',['class' => 'form-control', 'placeholder' => 'Nom de l\'entreprise']) !!}
			{!! $errors->first('enterprise', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('enterpriseStreet') ? 'has-error' : '' !!} >
			{!! Form::label('enterpriseStreet', 'Rue') !!}
			{!! Form::text('enterpriseStreet','',['class' => 'form-control', 'placeholder' => 'Rue de l\'entreprise']) !!}
			{!! $errors->first('enterpriseStreet', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('enterpriseStreetNumber') ? 'has-error' : '' !!} >
			{!! Form::label('enterpriseStreetNumber', 'N°') !!}
			{!! Form::number('enterpriseStreetNumber','',['min' => '1', 'class' => 'form-control', 'placeholder' => 'N° de porte de l\'entreprise']) !!}
			{!! $errors->first('enterpriseStreetNumber', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('enterprisePostalCode') ? 'has-error' : '' !!} >
			{!! Form::label('enterprisePostalCode', 'Code postal') !!}
			{!! Form::text('enterprisePostalCode','',['class' => 'form-control', 'placeholder' => 'Code postal de l\'entreprise']) !!}
			{!! $errors->first('enterprisePostalCode', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('enterpriseLocality') ? 'has-error' : '' !!} >
			{!! Form::label('enterpriseLocality', 'Localité') !!}
			{!! Form::text('enterpriseLocality','',['class' => 'form-control', 'placeholder' => 'Localité de l\'entreprise']) !!}
			{!! $errors->first('enterpriseLocality', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('enterpriseCountry') ? 'has-error' : '' !!} >
			{!! Form::label('enterpriseCountry', 'Pays') !!}
			{!! Form::text('enterpriseCountry','',['class' => 'form-control', 'placeholder' => 'Pays de l\'entreprise']) !!}
			{!! $errors->first('enterpriseCountry', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('enterpriseBeginDate') ? 'has-error' : '' !!} >
			{!! Form::label('enterpriseBeginDate', 'Date de début') !!}
			{!! Form::date('enterpriseBeginDate','',['class' => 'form-control', 'placeholder' => 'Date de début']) !!}
			{!! $errors->first('enterpriseBeginDate', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('enterpriseEndDate') ? 'has-error' : '' !!} >
			{!! Form::label('enterpriseEndDate', 'Date de fin') !!}
			{!! Form::date('enterpriseEndDate','',['class' => 'form-control', 'placeholder' => 'Date de fin']) !!}
			{!! $errors->first('enterpriseEndDate', '<small class="help-block">:message</small>') !!}
		</div>
		<h3>Parcours académique</h3>
		<div class='form-group' {!! $errors->has('degree') ? 'has-error' : '' !!} >
			{!! Form::label('degree', 'Titre') !!}
			{!! Form::text('degree','',['class' => 'form-control', 'placeholder' => 'Votre titre']) !!}
			{!! $errors->first('degree', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('school') ? 'has-error' : '' !!} >
			{!! Form::label('school', 'École') !!}
			{!! Form::text('school','',['class' => 'form-control', 'placeholder' => 'Votre École/Université']) !!}
			{!! $errors->first('school', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('schoolStreet') ? 'has-error' : '' !!} >
			{!! Form::label('schoolStreet', 'Rue') !!}
			{!! Form::text('schoolStreet','',['class' => 'form-control', 'placeholder' => 'Rue de l\'École/Université']) !!}
			{!! $errors->first('schoolStreet', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('schoolStreetNumber') ? 'has-error' : '' !!} >
			{!! Form::label('schoolStreetNumber', 'N°') !!}
			{!! Form::number('schoolStreetNumber','',['class' => 'form-control', 'placeholder' => 'N° de porte de l\'École/Université']) !!}
			{!! $errors->first('schoolStreetNumber', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('schoolPostalCode') ? 'has-error' : '' !!} >
			{!! Form::label('schoolPostalCode', 'Code Postal') !!}
			{!! Form::text('schoolPostalCode','',['class' => 'form-control', 'placeholder' => 'Code postal de l\'École/Université']) !!}
			{!! $errors->first('schoolPostalCode', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('schoolLocality') ? 'has-error' : '' !!} >
			{!! Form::label('schoolLocality', 'Localité') !!}
			{!! Form::text('schoolLocality','',['class' => 'form-control', 'placeholder' => 'Localité de l\'École/Université']) !!}
			{!! $errors->first('schoolLocality', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('schoolCountry') ? 'has-error' : '' !!} >
			{!! Form::label('schoolCountry', 'Pays') !!}
			{!! Form::text('schoolCountry','',['class' => 'form-control', 'placeholder' => 'Pays de l\'École/Université']) !!}
			{!! $errors->first('schoolCountry', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('degreeBeginDate') ? 'has-error' : '' !!} >
			{!! Form::label('degreeBeginDate', 'Date de début') !!}
			{!! Form::date('degreeBeginDate','',['class' => 'form-control', 'placeholder' => 'Date de début de l\'École/Université']) !!}
			{!! $errors->first('degreeBeginDate', '<small class="help-block">:message</small>') !!}
		</div>
		<div class='form-group' {!! $errors->has('degreeEndDate') ? 'has-error' : '' !!} >
			{!! Form::label('degreeEndDate', 'Date de fin') !!}
			{!! Form::date('degreeEndDate','',['class' => 'form-control', 'placeholder' => 'Date de fin de l\'École/Université']) !!}
			{!! $errors->first('degreeEndDate', '<small class="help-block">:message</small>') !!}
		</div>
		<h3>Langues</h3>
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
		{!! Form::submit('C\'est fini') !!}
	{!! Form::close() !!}
@stop