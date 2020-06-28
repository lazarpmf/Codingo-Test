@extends('layouts/main')


@section('content')

    <br>
    <div class="row">
        <div class="col-8"><h1>Informacije o korisniku:</h1></div>
        <div class="col-4"><a href="/subscribes" class="btn btn-primary">Nazad</a></div>
    </div>
    <br>
    <div class="container">
        <div class="list-group">
            <table class="list-group-item">
                <tr><td>
                        <h2>Ime: </h2>
                    </td>
                    <td>
                        <h2 style="text-align: center">{{$sub->first_name}}</h2>
                    </td></tr>
            </table>
            <table class="list-group-item">
                <tr><td>
                        <h2>Prezime: </h2>
                    </td>
                    <td>
                        <h2>{{$sub->last_name}}</h2>
                    </td></tr>
            </table>
            <table class="list-group-item">
                <tr><td>
                        <h2>Email: </h2>
                    </td>
                    <td>
                        <h2>{{$sub->email}}</h2>
                    </td></tr>
            </table>

        </div>
    </div>

@endsection
