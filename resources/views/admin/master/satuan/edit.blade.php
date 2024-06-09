@extends('master.mastermahasiswa')
@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-full">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Satuan</h5>
                        <!-- Horizontal Form -->
                        <form action="{{ route('satuan.update', $satuan->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="nama_satuan" class="col-sm-2 col-form-label">Nama Satuan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_satuan" name="nama_satuan"
                                        value="{{ $satuan->nama_satuan }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Simpan</button>
                        </form><!-- End Horizontal Form -->
                    </div>
                </div>
            </div>
        </div>
        <section>
        @endsection
