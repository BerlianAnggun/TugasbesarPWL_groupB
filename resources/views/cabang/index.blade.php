<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Toko Cabang</title>
</head>
<body>

    <h1>Daftar Toko Cabang</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Toko</th>
                <th>Nama Cabang</th>
                <th>Alamat Cabang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cabangs as $cabang)
                <tr>
                    <td>{{ $cabang->id }}</td>
                    <td>{{ $cabang->toko->nama }}</td>
                    <td>{{ $cabang->nama }}</td>
                    <td>{{ $cabang->alamat }}</td>
                    <td>
                        <a href="{{ route('cabang.show', $cabang->id) }}">Detail</a>
                        <a href="{{ route('cabang.edit', $cabang->id) }}">Edit</a>
                        <form action="{{ route('cabang.destroy', $cabang->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('cabang.create') }}">Tambah Cabang</a>

</body>
</html>
