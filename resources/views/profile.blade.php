<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Mahasiswa</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .card {
      background: #fff;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      padding: 30px 40px;
      max-width: 500px;
      text-align: center;
    }

    .card img {
      width: 120px;
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #3498db;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 10px;
      text-align: left;
      font-size: 16px;
    }

    td:first-child {
      font-weight: bold;
      color: #2c3e50;
      width: 100px;
    }

    td:nth-child(2) {
      width: 10px;
      font-weight: bold;
      color: #555;
    }

    td:last-child {
      color: #34495e;
    }
  </style>
</head>
<body>
  <div class="card">
    <img src="/monyet.jpg" alt="Foto Profil">
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{ $nama }}</td>
      </tr>
      <tr>
        <td>NPM</td>
        <td>:</td>
        <td>{{ $npm }}</td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
        <td>{{ $kelas }}</td>
      </tr>
    </table>
  </div>
</body>
</html>