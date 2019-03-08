@extends('layouts.master')
@section('content')
<h5>Notetyper Name: {{$notetyper->name}}</h5>
<h5>Notetyper Name: {{$notetyper->description}}</h5>

<a href="{{route('index')}}">Quay lại trang danh sách</a>

@endsection