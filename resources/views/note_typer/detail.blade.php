{{--@if(!isset($notetyper))--}}
    {{--<p class="text-danger"> Khong co danh sach chu y nao</p>--}}
{{--@elseif--}}
<h5>Notetyper Name: {{$notetyper->name}}</h5>
<h5>Notetyper Name: {{$notetyper->description}}</h5>

<a href="{{route('index')}}">Quay lại trang danh sách</a>

syntax error, unexpected ':', expecting