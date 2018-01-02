@extends('public.layout')

@section('title', 'hello,uncle.cyan')

@section('header')
    @parent
    <style>
        body{
           background: #000;
        }

    </style>
@endsection

@section('body')
    @parent
    <div class="row row-centered">
        <div class="well col-md-6 col-centered">
            <h1>Welcome，cyan</h1>
        </div>
    </div>
@endsection

@section('footer')
    @parent`
@endsection