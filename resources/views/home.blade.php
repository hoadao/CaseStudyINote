@extends('layouts.master')
{{--@extends('layouts.master')--}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trang chủ</div>
                <div class="card-body">
                    <a class="btn btn-success" href="{{ route('note.index') }}">Danh sách Notes</a>
                    <br/>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Thím đã đăng nhập!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
