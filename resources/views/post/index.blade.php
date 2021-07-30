@extends('layouts.app')

@section('content')
<div class="container">

<h3>Daftar Post</h3>
<a href="{{ url('/post/create') }}" class="btn btn-primary btn-sm">Tambah Postingan</a>
    <table class="table table-bordered">
        <tr>
            <th>Tanggal</th>
            <th>Slug</th>
            <th>Title</th>
            <th>Text</th>
            <th>Category</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <th>{{ $row->date_post }}</th>
            <th>{{ $row->slug_post }}</th>
            <th>{{ $row->title_post }}</th>
            <th>{{ $row->text_post }}</th>
            <th>{{ $row->id_ctgr }}</th>
        </tr>
        @endforeach
    </table>
</div>
@endsection