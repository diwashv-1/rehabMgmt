@extends('layouts.admin')

@section('content')
    <div class="container">
        <div id="app">
            <client-expenses></client-expenses>
            <client-expenses-view></client-expenses-view>
            <client-expenses-modal></client-expenses-modal>
        </div>
    </div>
@endsection
