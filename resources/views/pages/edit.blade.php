@extends('template.second')
@section('content')
{{-- message d'erreur --}}
@if ($errors->any()) 
<div class="alert alert-danger"> 
    <ul> @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> @endforeach 
    </ul> </div> 
@endif
    <h1>Modifier un fichier</h1>
    <form action="/update/{{$edit->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="src" value="{{old("src") ? old("src") :  $edit->src}}">
    <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
    
@endsection