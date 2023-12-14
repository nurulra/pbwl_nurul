@extends('layouts.app')

@section('content')
<h2>Add Pelanggan</h2>

<form action="{{ route('pel_store') }}" method="POST" class="mt-3">
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
        <label for="pel_no">No Pelanggan:</label>
        <input type="text" name="pel_no" class="form-control" placeholder="Masukkan No Pelanggan" required>
    </div>
    <div class="mb-3">
        <label for="pel_nama">Nama Pelanggan:</label>
        <input type="text" name="pel_nama" class="form-control" placeholder="Masukkan Nama Pelanggan" required>
    </div>
    <div class="mb-3">
        <label for="pel_alamat">Alamat:</label>
        <input type="text" name="pel_alamat" class="form-control" placeholder="Masukkan Alamat" required>
    </div>
    <div class="mb-3">
        <label for="pel_hp">No HP:</label>
        <input type="text" name="pel_hp" class="form-control" placeholder="Masukkan No HP" required>
    </div>
    <div class="mb-3">
        <label for="pel_ktp">KTP:</label>
        <input type="text" name="pel_ktp" class="form-control" placeholder="Masukkan No KTP" required>
    </div>
    <div class="mb-3">
        <label for="pel_seri">Seri:</label>
        <input type="text" name="pel_seri" class="form-control" placeholder="Masukkan No Seri" required>
    </div>
    <div class="mb-3">
        <label for="pel_meteran">Meteran:</label>
        <input type="text" name="pel_meteran" class="form-control" placeholder="Masukkan No Meteran" required>
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
        <input type="submit" value="SAVE" class="btn btn-primary">
    </div>
</form>


@endsection