@extends('master.mastermahasiswa')
@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-full">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Satuan</h5>
                        <a href="{{ route('satuan.create') }}"class="btn btn-primary float-end">Tambah Satuan</a>
                        <br /><br />
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Satuan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($satuans as $satuan)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            {{ $satuan->nama_satuan }}
                                        </td>
                                        <td>
                                            <form action="{{ route('satuan.destroy', $satuan->id) }}" method="POST">
                                                <a class="btn btn-warning float-end"
                                                    href="{{ route('satuan.edit', $satuan->id) }}">Update</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger float-end">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Bordered Table -->
                    </div>
                </div>
            </div>
        </div>
        <section>
        @endsection
