@extends('layouts.app')

@section('content')
<style>
    .card {
        background: #fff;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(200, 180, 180, 0.6);
        width: 90%;
        max-width: 800px;
        margin: 40px auto;
    }
    h2 {
        text-align: center;
        font-weight: bold;
        color: #6a4c4c;
        margin-bottom: 20px;
    }
</style>

<div class="card">
    <h2>Daftar Pengguna</h2>
    @include('components.user_table', ['users' => $users])
</div>
@endsection