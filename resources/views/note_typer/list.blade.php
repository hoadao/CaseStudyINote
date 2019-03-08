@extends('layouts.app')
@section('content')
    <h1>Note typer</h1>
    <form class="inotetyper" method="post">
        @csrf
        <input type="text" name="search" placeholder="enter search">
        <input type="submit" value="Search">
    </form>
    <table border="1" cellspacing="0">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>description</td>
        </tr>
        <ul>
            @foreach($notetyper as $key=>$value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->description}}</td>
                    <td><a href="{{route('update', $value->id)}}">Update</a></td>
                    <td><a href="{{route('delete',$value->id)}}">Delete</a></td>
                    <td><a href="{{route('detail',$value->id)}}">Detail</a></td>
                </tr>

            @endforeach
        </ul>
    </table>


@endsection