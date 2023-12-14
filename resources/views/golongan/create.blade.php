@extends('layouts.app')

@section('content')
    <h2>Add Golongan</h2>

    <form action="{{ url('golongan') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">KODE</label>
            <input type="text" name="gol_kode" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">NAMA</label>
            <input type="text" name="gol_nama" id="" class="form-control">
        </div>
        <div class="mb-3">
            <input type="submit" value="SAVE" class="btn btn-primary">
        </div>
    </form>
@endsection