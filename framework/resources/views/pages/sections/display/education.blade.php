@section('education')
    <div class="panel panel-default cv-education">
        <div class="panel-heading">
            <div class="panel-title">
                My Education and Certification
            </div>
        </div>

        <div class="panel-body">
            @foreach($educationSection as $education)
            @if(count($education) != 0)
                    <!-- {{dump($education[0])}} -->

            <h2> {{$education[0]['title']}} at {{$education[0]['name']}}</h2>
            <h4>Activities: {{$education[0]['description']}}</h4>
            <h6>From {{$education[0]['start_date']}} to {{$education[0]['end_date']}}</h6>
            <!--
                            {{$education[0]['name']}}
            {{$education[0]['location']}}
            {{$education[0]['title']}}
            {{$education[0]['description']}}
            {{$education[0]['start_date']}}
            {{$education[0]['end_date']}}
                    -->
            @endif
            @endforeach
        </div>
    </div>

@endsection