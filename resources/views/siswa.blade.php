<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Siswa</title>
</head>
<body>

    <h2>Data Siswa</h2>

    <table border="1" cellpading="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>
        @foreach($siswa as $index => $s)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $s['nama'] }}</td>
            <td>{{ $s['kelas'] }}</td>
            <td>{{ $s['jurusan'] }}</td>
        </tr>
        @endforeach

</body>
</html>
