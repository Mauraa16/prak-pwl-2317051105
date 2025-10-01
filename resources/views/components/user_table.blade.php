<style>
    table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
    }
    thead {
        background: #b49c9c;
        color: white;
    }
    th, td {
        padding: 12px 15px;
        text-align: left;
    }
    tbody tr {
        border-bottom: 1px solid #ddd;
    }
    tbody tr:hover {
        background: #fddadaba;
        transition: 0.3s;
    }
    td {
        font-size: 14px;
        color: #333;
    }
</style>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->nim }}</td>
            <td>{{ $user->nama_kelas }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align:center;">Tidak ada data pengguna</td>
        </tr>
        @endforelse
    </tbody>
</table>