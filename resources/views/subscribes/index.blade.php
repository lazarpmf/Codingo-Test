@extends('layouts/main')



@section('content')

    <br>
    <div class="row">
        <div class="col-8"><h1>Svi subscriberi:</h1></div>
        <div class="col-4"><a href="/prijava" class="btn btn-primary">Nazad</a></div>
    </div>

    <br>
    @if(App\Subscribe::count()>0)
        @foreach($subs as $sub)
            <ul class="list-group">
                <li class="list-group-item">
                    <h3>{{$sub->first_name}}</h3>
                    <a href="/subscribes/{{$sub->id}}">Više...</a>
                    {{--<h3>{{$sub->last_name}}</h3>
                    <hr>
                    <p>{{$sub->email}}</p>--}}
                </li>
            </ul>
        @endforeach
        {{$subs->links()}}
    @else
        <p>Nema subscribera! Budi prvi: <a href="/prijava" class="btn btn-success">Prijavi se!</a></p>
    @endif
@endsection
