@extends('layouts.admin')

@section('content')
    <div class="container">
        <div id="app">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <client-expenses></client-expenses>
                </div>
                <div class="col-lg-6 col-md-12">
                    <client-expenses-view></client-expenses-view>
                </div>
            </div>
        </div>
    </div>
@endsection
