@extends('template.main')
@section('content')
    <h1 class="text-center">Bienvenue</h1>
    <div class="container">
        <div>
            <h1>Photos</h1>
            @foreach($doc as $item)

                @if(Str::after($item->src, '.')== "jpg" || Str::after($item->src, '.')=="png")
                    <p>{{$item->src}}</p>
                @endif
                
            @endforeach

        </div>
        <div>
            <h1>Fichiers</h1>
            @foreach ($doc as $item)
                @if (Str::after($item->src, '.')== "pdf" || Str::after($item->src, '.')=="doc")
                    
                <p>{{$item->src}}</p>
                    
                @endif
                
            @endforeach

        </div>
    </div>
@endsection