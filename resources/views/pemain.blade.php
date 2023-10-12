@include('header')

@extends('footer')

@section('table')

<table border="1px" class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama Pemain</th>
            <th>No Punggung</th>
            <th>Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_pemain as $pemain)
            <tr>
                <td>{{ $pemain->id}}</td>
                <td>{{ $pemain->nama_pemain}}</td>
                <td>{{ $pemain->no_punggung}}</td>
                <td>{{ $pemain->posisi}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

