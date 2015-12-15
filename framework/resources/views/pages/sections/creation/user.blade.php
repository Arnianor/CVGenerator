@section('user')

    <div class="row cv-user">


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

                <div class="col-md-6 personal-details">
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


                <div class="col-md-6 personal-contact">

                    <div class="personal-contact-pysical">

                        <div class='form-group' {!! $errors->has('address') ? 'has-error' : '' !!} >
                            {!! Form::label('address', 'Address') !!}
                            {!! Form::text('address','Chandler Avenue 45, 2023 Gorgier, Switzerland',['class' => 'form-control', 'placeholder' => 'Chandler Avenue 45, 2023 Gorgier, Switzerland']) !!}
                            {!! $errors->first('address', '<small class="help-block">:message</small>') !!}
                        </div>

                    </div>
                </div>

                <div class="col-md-6 personal-contact">
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

    @endsection