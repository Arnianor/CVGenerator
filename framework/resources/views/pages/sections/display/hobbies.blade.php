@section('hobbies')

    <div class="panel panel-default cv-hobbies">
        <div class="panel-heading">
            <div class="panel-title">
                My Hobbies
            </div>
        </div>

        <div class="panel-body">
            @foreach($hobbySection as $hobby)
            @if(count($hobby) != 0)
                    <!-- {{dump($hobby[0])}} -->
            <h2>{{$hobby[0]['text']}}</h2>
            @endif
            @endforeach
        </div>
    </div>

@endsection