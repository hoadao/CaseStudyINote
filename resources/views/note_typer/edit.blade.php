@extends('layouts.master')
@section('content')
<h2>Edit a NoteTyper</h2>
<form method="post">
    @csrf
    <input type="text" name="name" placeholder="edit name" required>
    <input type="text" name="description" placeholder="edit desription" required>
    <input type="submit" value="Edit">
</form>
@endsection




