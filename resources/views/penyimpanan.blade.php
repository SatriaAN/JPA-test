<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
</head>

<body class="antialiased">
    <header>
        <h1 class="head_title">Penyimpanan</h1>
    </header>
    <main>
        <section>
            <button><a href="{{ route('penyimpanan.create') }}">+ Tambah Penyimpanan</a></button>
            <table border="1px solid">
                <tr>
                    <th>No</th>
                    <th>Isian</th>
                    <th>Nama</th>
                    <th>Nomor Hp</th>
                    <th>Alamat</th>
                    <th>Moto Kerja</th>
                    <th>Action</th>
                </tr>
                @foreach ($penyimpanan as $key => $simpan)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $simpan->isian }}</td>
                        <td>{{ $simpan->nama }}</td>
                        <td>{{ $simpan->no_hp }} </td>
                        <td>{{ $simpan->alamat }}</td>
                        <td>{{ $simpan->moto_kerja }}</td>
                        <td style="padding: 1rem">
                            <button><a href="">Edit</a></button>
                            <button><a href="">Delete</a></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </section>

    </main>
</body>

</html>
