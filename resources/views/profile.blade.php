<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #b49c9cff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 215, 215, 1);
            text-align: center;
            width: 300px;
        }
        .avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 1px solid #999;
            margin: 0 auto 20px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f9f9f9;
        }
        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .info-box {
            background: #fddadaba;
            padding: 12px;
            border-radius: 6px;
            margin: 8px 0;
            font-size: 16px;
            font-weight: bold;
        }
        .label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 4px;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <!-- Avatar -->
        <div class="avatar">
            <img src="{{ asset($foto) }}" alt="Foto Profil">
        </div>

        <!-- Info -->
        <div class="info-box">
            <span class="label">Nama</span>
            {{ $nama }}
        </div>
        <div class="info-box">
            <span class="label">Kelas</span>
            {{ $kelas }}
        </div>
        <div class="info-box">
            <span class="label">NPM</span>
            {{ $npm }}
        </div>
    </div>
</body>
</html>