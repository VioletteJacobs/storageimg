@extends('template.second')
@section('content')
<h1>
    Bienvenue dans la partie Backend. 
</h1>
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Image</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($files as $item)
            <tr>
              <th scope="row">{{$item ->id}}</th>
              @if(Str::after($item->src, '.')== "jpg" || Str::after($item->src, '.')=="png")
              <td> 
                  <img height="50px" src="{{asset('storage/img/'.$item->src)}}" alt="">
                </td>
                @else
                <td>
                    <p>{{$item->src}}</p>
                </td>
                @endif
            <td>
                <form action="/delete/{{$item->id}}" method="POST">
                    @csrf
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
                </td>
                <td>
                  <a href="/update/{{$item->id}}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                  <a href="/download/{{$item->id}}" class="btn btn-warning">Download</a>
                </td>
  
            </tr>

            @endforeach
        </tbody>
      </table>

</div>
    
@endsection