@section('user')



        <div class="panel panel-danger">
            <div class="panel-heading"><div class="panel-title">About me</div></div>
            <div class="panel-body">
                {{dump($user->toArray())}}
            </div>
        </div>



    @endsection