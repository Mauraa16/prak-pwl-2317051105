@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('matakuliah.create') }}">Tambah Mata Kuliah Baru</a>
    <br><br>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mks as $mk)
            <tr>
                <td>{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" style="text-align:center;">Tidak ada data pengguna</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection