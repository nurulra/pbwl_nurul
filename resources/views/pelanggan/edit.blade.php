@extends('layouts.app')

@section('content')
    <h2>Edit Golongan</h2>

  <form action="{{ route('pel_update', ['id' => $row->id]) }}" method="POST">
    {{-- <form action="{{ url('golongan/' . $row->id) }}" method="post"> --}}
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="mb-3">
            <label for="id">Golongan:</label>
            <select class="form-select" id="id" name="gol_id" required>
                @foreach ($golongans as $golongan )
                    <option value="{{$golongan->id}}">{{$golongan->gol_nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="">No Pelanggan</label>
            <input type="text" name="pel_no" id="" class="form-control" value="{{ $row->pel_no }}">
        </div>
        <div class="mb-3">
            <label for="">Nama Pelanggan</label>
            <input type="text" name="pel_nama" id="" class="form-control" value="{{ $row->pel_nama }}">
        </div>
        <div class="mb-3">
            <label for="">Alamat</label>
            <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $row->pel_alamat }}">
        </div>
        <div class="mb-3">
            <label for="">No Hp</label>
            <input type="text" name="pel_hp" id="" class="form-control" value="{{ $row->pel_hp }}">
        </div>
        <div class="mb-3">
            <label for="">KTP</label>
            <input type="text" name="pel_ktp" id="" class="form-control" value="{{ $row->pel_ktp }}">
        </div>
        <div class="mb-3">
            <label for="">Seri</label>
            <input type="text" name="pel_seri" id="" class="form-control" value="{{ $row->pel_seri }}">
        </div>
        <div class="mb-3">
            <label for="">Meteran</label>
            <input type="text" name="pel_meteran" id="" class="form-control" value="{{ $row->pel_meteran }}">
        </div>
        <div class="mb-3">
            <label for="pel_aktif">Aktif:</label>
            <select name="pel_aktif" class="form-select" required>
                <option value="">Pilih Status</option>
                <option value="Y">Aktif</option>
                <option value="N">Non Aktif</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="id">User:</label>
            <select class="form-select" id="id" name="user_id" required>
                @foreach ($users as $user )
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
@endsection