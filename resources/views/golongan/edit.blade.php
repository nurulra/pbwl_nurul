@extends('layouts.app')

@section('content')
    <h2>Edit Golongan</h2>

    <form action="{{ url('golongan/' . $row->id) }}" method="post">
        <input type="hidden" name="_method" value="PATCH">
        @csrf
        <div class="mb-3">
            <label for="">KODE</label>
            <input type="text" name="gol_kode" id="" class="form-control" value="{{ $row->gol_kode }}">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="gol_nama" id="" class="form-control" value="{{ $row->gol_nama }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection
