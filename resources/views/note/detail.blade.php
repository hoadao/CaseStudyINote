<?php
/**
 * Created by PhpStorm.
 * User: hoa
 * Date: 08/03/2019
 * Time: 13:07
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
        <div class="title">
            <h5>Thông tin chi tiết:</h5>
        </div>

        <div class="row">
            @if(!isset($note))
                <p class="text-danger">Không có thông tin về note</p>
            @else
                <div class="col-12">
                    <div class="card text-left" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $note->title }}:</h5>
                            <p class="card-text">{{ $note->content }}</p>

                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
