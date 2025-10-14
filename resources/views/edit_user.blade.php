<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - {{ $user->nama }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff8f8;
            margin: 40px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: #fefefe;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0px 3px 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #5d4b4b;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: #b49c9c;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #9a8686;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #7b6868;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Edit Data User</h2>
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama" value="{{ old('nama', $user->nama) }}" required>

        <label for="nim">NPM:</label>
        <input type="text" name="nim" id="nim" value="{{ old('nim', $user->nim) }}" required>

        <label for="kelas_id">Kelas:</label>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $k)
                <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                    {{ $k->nama_kelas }}
                </option>
            @endforeach
        </select>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <a href="{{ url('/user') }}" class="back-link">← Kembali ke daftar user</a>
</div>
</body>
</html>
