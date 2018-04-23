@extends('zalogowany.historia')

@section('wys')

<table class="table table-hover">
    @foreach($zamowienias as $site)
    <tr>
        <td>{{$site->id}}</td>
        <td>{{$site->osoba}}</td>
        <td>{{$site->adres}}</td>
        <td>{{$site->numer}}</td>
        <td>{{$site->created_at}}</td>
        <td><button class="btn btn-primary">Usuń</button></td>
    </tr>
    @endforeach
</table>

@endsection