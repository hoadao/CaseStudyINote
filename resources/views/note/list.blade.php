<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 08/03/2019
 * Time: 09:41
 */
?>
@extends('layouts.master')
@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thể loại
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Học tập</a>
                            <a class="dropdown-item" href="#">Thể thao</a>
                            <div class="dropdown-divider">Gì gì đó</div>
                            <a class="dropdown-item" href="#">Một cái gì khác</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Nhập tiêu đề cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </nav>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Tiêu đề</th>
            <th scope="col">Nội dung</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @if(count($notes) == 0)
            <tr><td colspan="4">Chưa có Note nào cả!</td></tr>
        @else
            @foreach($notes as $key => $note)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $note->title }}</td>
                    <td>{{ $note->content }}</td>
                    <td><a class="btn btn-info" href="{{route('note.detail', $note->id)}}">Chi tiết</a></td>
                    <td><a class="btn btn-success" href="{{route('note.edit', $note->id)}}">Sửa</a></td>
                    <td><a class="btn btn-danger" href="{{route('note.destroy', $note->id)}}" onclick="return confirm('Bạn chắc chứ?')">Xóa</a></td>
                </tr>
            @endforeach
        @endif
        <a class="btn btn-link" href="{{route('note.create')}}">Thêm mới</a>
        </tbody>
        {{ $notes->appends(request()->query()) }}
    </table>

        <caption>Danh sách các note</caption>
    </div>

@endsection