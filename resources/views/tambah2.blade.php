@extends('template')

@section('content')
    <h3>Tambah Data meja Baru</h3>

    <a href="/meja" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/meja/store" method="post" class="form-horizontal">

        @csrf


        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="merkmeja">
                Merk meja
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="merkmeja" placeholder="Masukkan merk meja" name="merkmeja" required="required"> <br />
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="hargameja">
                Harga
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="hargameja" placeholder="Masukkan harga (contoh: 15000)" name="hargameja" required="required"> <br />
            </div>
        </div>


        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="tersedia">
                Tersedia
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="tersedia" placeholder="Masukkan angka 1 atau 0" name="tersedia" required="required"> <br />
            </div>
        </div>


        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="berat">
                Berat (kg)
            </label>
            <div class="col-sm-6">
                {{-- step="any" digunakan untuk mengizinkan angka desimal/float --}}
                <input class="form-control" type="number" step="any" id="berat" placeholder="Masukkan berat (contoh: 0.5)" name="berat" required="required"> <br />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
@endsection