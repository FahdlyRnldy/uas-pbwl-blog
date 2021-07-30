@extends('layouts.app')

@section('content')
<div class="container">

<h3>Daftar Category</h3>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Text</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <th>{{ $row->name_ctgr }}</th>
            <th>{{ $row->text_ctgr }}</th>
        </tr>
        @endforeach
    </table>
</div> 
@endsection