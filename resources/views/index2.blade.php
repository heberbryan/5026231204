@extends('template')

@section('content')

    </style>
    <h3>Data meja</h3>
    <a href="/meja/tambah" class="btn btn-primary"> + Tambah meja Baru</a>
    <br/>
    <br/>

    <p>Cari Data meja :</p>
	<form action="/meja/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari meja .." >
		<input type="submit" value="CARI" class="btn btn-info">
	</form>

	<br/>


    <br />
    <br />

    <table class="table table-striped">
        <tr>
            <th>merk</th>
            <th>harga</th>
            <th>Tersedia</th>
            <th>Berat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($meja as $p)
            <tr>
                <td>{{ $p->merkmeja }}</td>
                <td>{{ $p->hargameja }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/meja/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
                    <a href="/meja/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $meja->links() }}
@endsection