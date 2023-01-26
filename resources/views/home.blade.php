@extends('layouts.default')

@section('content')
    @if ($array['age'] > 18)
        <div>
            <div>
                name:  {{$array['name']}}
            </div>
            <div>
                age: {{$array['age']}}
            </div>
            <div>
                position: {{$array['position']}}
            </div>
            <div>
                address: {{$array['address']}}
            </div>
        </div>
    @else
        <div>
            человек слишком молод
        </div>
    @endif
@stop
