@extends('layouts.app')
@section('content')

<h2>Pelanggan</h2>

<a href="{{ route('pel_create') }}" class="btn btn-primary mb-3 float-end"> Add Pelanggan</a>
{{-- <a href="{{ url('pelanggan/create') }}" class="btn btn-primary mb-3 float-end">+ Add Pelanggan</a> --}}

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>GOLONGAN</th>
        <th>NO PELANGGAN</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO HP</th>
        <th>KTP</th>
        <th>SERI</th>
        <th>METERAN</th>
        <th>AKTIF</th>
        <th>USER</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr> 

    @php
        $counter = 1; // Inisialisasi variabel counter
    @endphp

    @foreach ($rows as $row)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $row->golongan->gol_nama }}</td>
            <td>{{ $row->pel_no }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_hp }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_seri }}</td>
            <td>{{ $row->pel_meteran }}</td>
            <td>{{ $row->pel_aktif }}</td>
            <td>{{ $row->user->name }}</td>
            <td><a href="{{ url('pelanggan/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ route('pel_delete', ['id' => $row->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach

</table>

@endsection