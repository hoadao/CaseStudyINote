<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 08/03/2019
 * Time: 13:22
 */
?>
@extends('layouts.master')
@section('title','Sửa thông tin trong note')
@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('note.index')}}">Quay lại <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Trang chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Thể loại
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Thể loại 1</a>
                            <a class="dropdown-item" href="#">Thể loại 2</a>
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
        <div class="col-12 col-md-12">
            <div class="row">
                <div class="col-12"><h1>Chỉnh sửa Note</h1></div>
                <div class="col-12">
                    <form method="post" action="{{ route('note.update', $note->id) }}">
                        @csrf
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" class="form-control" name="title" value="{{ $note->title }}" required>
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <input type="text" class="form-control" name="content" value="{{ $note->content }}" required>
                        </div>
                        <div class="form-group">
                            <label>Thể loại</label>
                            <input type="text" class="form-control" name="type" value="">
                        </div>
                        <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
                        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
