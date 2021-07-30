@extends('layouts.app')

@section('content')
<div class="container">

<h3>Daftar Album</h3>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Text</th>
            <th>Photos</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <th>{{ $row->name_album }}</th>
            <th>{{ $row->text_album }}</th>
            <th>{{ $row->id_photos }}</th>
        </tr>
        @endforeach
    </table>
</div>
@endsection