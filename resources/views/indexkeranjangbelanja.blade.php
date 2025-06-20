@extends('template')

@section('content')
	<h3>Keranjang Belanja</h3>
	<a href="/keranjangbelanja/beli" class="btn btn-primary">Beli</a>
	<br/>

	<table class="table table-striped">
		<tr>
			<th>Kode Pembelian</th>
            <th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $item)
		<tr>
            <td>{{ $item->ID}}</td>
            <td>{{ $item->KodeBarang }}</td>
			<td>{{ $item->Jumlah }}</td>
			<td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
			<td>{{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/batal/{{ $item->ID }}" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Batal</a>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
@endsection