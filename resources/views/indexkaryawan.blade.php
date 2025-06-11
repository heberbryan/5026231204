@extends('template')

@section('content')

    <br/>
    <br/>

    <table class="table table-striped">
        <tr>
            <th>Kode</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                            {{-- Mengubah nama menjadi huruf kapital semua --}}
            <td>{{ Str::upper($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                            {{-- Mengubah departemen menjadi huruf kecil semua --}}
            <td>{{ Str::lower($p->departemen) }}</td>
                <td>
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    </style>
    <h3>Data karyawan</h3>
    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah karyawan Baru</a>

    {{ $karyawan->links() }}
@endsection