@section('user')

    <div class="panel panel-default cv-user">
        <div class="panel-heading">
            <div class="panel-title">About me</div>
        </div>
        <div class="panel-body">
            <!-- {{dump($user->toArray())}} -->
            <?php $u = $user->toArray();?>
            <h3>{{$u['surname']}} '{{$u['surname']}}' {{$u['lastname']}}</h3>

            <p>
                {{$u['date_birth']}}<br>
                Contact:<br>
                {{$u['telephone']}}
                {{$u['email']}}<br>
                {{$u['address']}}
            </p>

            <p>
                {{$u['work_permit']}}
                {{$u['driver_permit']}}
            </p>
            <!--
            {{$u['name']}}
            {{$u['email']}}
            {{$u['surname']}}
            {{$u['lastname']}}
            {{$u['date_birth']}}
            {{$u['telephone']}}
            {{$u['address']}}
            {{$u['nationality']}}
            {{$u['work_permit']}}
            {{$u['driver_permit']}}
                    -->
        </div>
    </div>



@endsection