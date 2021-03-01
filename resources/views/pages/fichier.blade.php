@extends('template.second')
@section('content')
    <h1>Ajouter un fichier</h1>
    <form action="/files" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="src">
    <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    
@endsection
