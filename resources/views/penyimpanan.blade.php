    @extends('layout')

    @section('content')
        <header>
            <h1 class="text-center my-5">Penyimpanan</h1>
        </header>
        <main>
            <section>
                <a class="btn btn-primary mb-3" href="{{ route('penyimpanan.create') }}">+ Tambah Penyimpanan</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Isian</th>
                            <th>Nama</th>
                            <th>Nomor Hp</th>
                            <th>Alamat</th>
                            <th>Moto Kerja</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider table-divider-color">
                        @foreach ($penyimpanan as $key => $simpan)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $simpan->isian }}</td>
                                <td>{{ $simpan->nama }}</td>
                                <td>{{ $simpan->no_hp }} </td>
                                <td>{{ $simpan->alamat }}</td>
                                <td>{{ $simpan->moto_kerja }}</td>
                                <td style="padding: 1rem">
                                    <form action="{{ route('penyimpanan.delete', ['id' => $simpan->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a class="btn btn-sm btn-outline-warning mx-3"
                                            href="{{ url('/ubah/' . $simpan->id) }}">Edit</a>
                                        <button class="btn btn-sm btn-outline-danger " type="submit"
                                            value="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </main>
    @endSection
