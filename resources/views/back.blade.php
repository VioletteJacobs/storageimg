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
          </tr>
        </thead>
        <tbody>
            @foreach ($files as $item)
            <tr>
              <th scope="row">{{$item ->id}}</th>
              <td> 
                  <img height="50px" src="{{asset('storage/img/'.$item->src)}}" alt="">
            </td>
  
            </tr>
                
            @endforeach
        </tbody>
      </table>

</div>
    
@endsection