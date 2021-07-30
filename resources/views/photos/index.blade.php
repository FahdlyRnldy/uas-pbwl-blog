@extends('layouts.app')

@section('content')
<div class="container">

<h3>Daftar Photos</h3>
    <table class="table table-bordered">
        <tr>
            <th>Tanggal</th>
            <th>Title</th>
            <th>Text</th>
            <th>Post</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <th>{{ $row->date_photos }}</th>
            <th>{{ $row->title_photos }}</th>
            <th>{{ $row->text_photos }}</th>
            <th>{{ $row->id_post }}</th>
        </tr>
        @endforeach
    </table>
</div>
@endsection