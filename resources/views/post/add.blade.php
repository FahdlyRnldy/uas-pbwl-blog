@extends('layouts.app')

@section('content')

<div class="container">

<h3>Tambah Postingan</h3>
<form action="{{ url('/post') }}" method="POST">
@csrf
    <table>
        <div class="form-group">
            <label for="">TITLE</label>
            <input type="text" name="title_post" class="form-control">
        </div>
        <div class="form-group">
            <label for="">TEKS</label>
            <textarea name="text_post" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <tr>
            <td></td>
            <td><input type="submit" value="SIMPAN" class="btn btn-primary"></td>
        </tr>
    </table>
</form>
</div>
@endsection