@section('skills')

    <div class="panel panel-default cv-skills">
        <div class="panel-heading">
            <div class="panel-title">
                My skills
            </div>
        </div>

        <div class="panel-body">
            @foreach($skillSection as $skill)
            @if(count($skill) != 0)
                    <!-- {{dump($skill[0])}} -->

            {{$skill[0]['name']}}
            {{$skill[0]['level']}}
            {{$skill[0]['description']}}
            @endif
            @endforeach
        </div>
    </div>

@endsection