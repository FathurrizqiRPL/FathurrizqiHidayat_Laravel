<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <table border="1">
            <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>umur</th>
            <th>Kelas</th>
            <th>Hobi</th>
        </tr>
        @foreach($siswa as $s)
        <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->nama }}</td>
            <td>{{ $s->alamat }}</td>
            <td>{{ $s->tanggal_lahir }}</td>
            <td>{{ $s->jenis_kelamin }}</td>
            <td>{{ $s->umur }}</td>
            <td>{{ $s->kelas }}</td>
            <td>{{ $s->hobi }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
