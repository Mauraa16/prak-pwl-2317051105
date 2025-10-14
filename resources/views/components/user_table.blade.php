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
        white-space: nowrap;
    }
    .btn-edit {
        background: linear-gradient(90deg, #6a4c4c, #b98b73);
        color: #fff;
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 13px;
        margin-right: 6px;
        transition: 0.2s;
    }
    .btn-edit:hover {
        background: linear-gradient(90deg, #b98b73, #6a4c4c);
        transform: scale(1.05);
    }
    .btn-delete {
        background: linear-gradient(90deg, #b63a3a, #e46a6a);
        color: #fff;
        padding: 6px 12px;
        border-radius: 6px;
        border: none;
        font-size: 13px;
        cursor: pointer;
        transition: 0.2s;
    }
    .btn-delete:hover {
        background: linear-gradient(90deg, #e46a6a, #b63a3a);
        transform: scale(1.05);
    }
</style>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th style="text-align:center;">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->nama }}</td>
            <td>{{ $user->nim }}</td>
            <td>{{ $user->nama_kelas }}</td>
            <td style="text-align:center;">
                <a href="{{ route('user.edit', $user->id) }}" class="btn-edit">✏️ Edit</a>

                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete" onclick="return confirm('Yakin ingin menghapus pengguna ini?')">
                        🗑️ Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align:center;">Tidak ada data pengguna</td>
        </tr>
        @endforelse
    </tbody>
</table>