@extends('layouts.admin')

@section('content')
    <div class="container">
        <div id="app">
            <client-search></client-search>
            <hr>
            <select-client-search></select-client-search>
        </div>
    </div>
@endsection

