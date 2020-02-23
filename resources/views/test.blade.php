@extends('layouts.admin')


@section('content')
    <div class="container">
        <div id="app">
            {{--<example-component></example-component>
            <hr/>
            <test-component></test-component>
            <hr/>
            <demo-component></demo-component>--}}
            <client-component></client-component>
        </div>

    </div>


@stop


@section('scripts')

@stop
