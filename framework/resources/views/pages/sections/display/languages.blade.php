@section('languages')

    <div class="panel panel-default cv-languages">
        <div class="panel-heading">
            <div class="panel-title">
                Languages
            </div>
        </div>

        <div class="panel-body">
            @foreach($languageSection as $language)
            @if(count($language) != 0)
                    <!-- {{dump($language[0])}} -->

            <h2> I speak {{$language[0]['name']}}, with a kownledge level of {{$language[0]['level']}}</h2>
            <h4>And obtained the following certification: {{$language[0]['creditation']}}</h4>
            <!--
                            {{$language[0]['name']}}
            {{$language[0]['level']}}
            {{$language[0]['creditation']}}
                    -->
            @endif
            @endforeach
        </div>
    </div>

@endsection