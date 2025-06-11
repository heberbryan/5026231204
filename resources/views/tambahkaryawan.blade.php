@extends('template')

@section('content')
    <h3>Tambah Data karyawan Baru</h3>

    <a href="/karyawan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" method="post" class="form-horizontal">

        @csrf


        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="kodepegawai">
                Kode Pegawai
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="kodepegawai" placeholder="Masukkan Kode Pegawai" name="kodepegawai" required="required"> <br />
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="namalengkap">
                Nama Lengkap
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="namalengkap" placeholder="Masukkan nama lengkap" name="namalengkap" required="required"> <br />
            </div>
        </div>


        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="divisi">
                Divisi
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="divisi" placeholder="Masukkan divisi" name="divisi" required="required"> <br />
            </div>
        </div>


        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="departemen">
                Departemen
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="departemen" placeholder="Masukkan nama departemen" name="departemen" required="required"> <br />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-6">
                <input type="submit" value="Simpan Data" class="btn btn-success">
            </div>
        </div>
    </form>
@endsection