@extends('layouts.frontend')



@section('sidebar')
    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    @include('shared.header')
@endsection