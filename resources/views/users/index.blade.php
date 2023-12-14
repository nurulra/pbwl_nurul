@extends('layouts.app')
@section('content')

<h2>Users</h2>

<a href="{{ url('users/create') }}" class="btn btn-primary mb-3 float-end">+ Add Users</a>

<table class="table table-bordered">
    <tr>
        <th>N0</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>

    @php
        $counter = 1; // Inisialisasi variabel counter
    @endphp

    @foreach ($row as $row)
        <tr>
            <td>{{ $counter++ }}</td>
            <td>{{ $row->name }}</td>
            <td>{{ $row->email }}</td>
            <td><a href="{{ url('users/edit/' . $row->id) }}" class="btn btn-warning">Edit</a></td>
            <td>
                <form action="{{ url('users/' . $row->id) }}" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                </form>
            </td>
        </tr>
    @endforeach
</table>


@endsection