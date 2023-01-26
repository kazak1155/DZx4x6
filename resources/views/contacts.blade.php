@extends('layouts.default')

@section('content')
    @if (isset($array['email']))
        <div>
            <div>
                address:  {{$array['address']}}
            </div>
            <div>
                post_code: {{$array['post_code']}}
            </div>
            <div>
                email: {{$array['email']}}
            </div>
            <div>
                phone: {{$array['phone']}}
            </div>
        </div>
    @else
        <div>
            «Адрес электронной почты не указан»
        </div>
    @endif
@stop
