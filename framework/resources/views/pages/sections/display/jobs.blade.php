
@section('jobs')

    <div class="panel panel-default cv-work">
        <div class="panel-heading">
            <div class="panel-title">
                Work Experience
            </div>
        </div>

        <div class="panel-body">
            @foreach($workSection as $job)
            @if(count($job) != 0)
                    <!-- {{dump($job[0])}} -->
            <h2> {{$job[0]['title']}} at {{$job[0]['name']}}</h2>
            <h4>Resposabilities: {{$job[0]['description']}}</h4>
            <h6>From {{$job[0]['start_date']}} to {{$job[0]['end_date']}}</h6>

            <!--
                            {{$job[0]['name']}}
            {{$job[0]['location']}}
            {{$job[0]['title']}}
            {{$job[0]['description']}}
            {{$job[0]['start_date']}}
            {{$job[0]['end_date']}}
                    -->
            @endif
            @endforeach
        </div>
    </div>

@endsection