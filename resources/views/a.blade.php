@extends('test')
@section('name')
    khaled
    <a href="{{route('cc',[1,2])}}">sum ans</a>
@endsection

@section('title', 'name')