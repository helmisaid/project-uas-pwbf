@extends('master.masterkelas')

@section('breadcrumb')
    <li class="breadcrumb-item ">Mahasiswa</li>
    <li class="breadcrumb-item active">Master Kelas</li>
@endsection

@section('main')
    <section class="section">
        <div class="row">
            <div class="col-lg-full">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Master Kelas</h5>
                        <!-- Horizontal Form -->
                        <form action="/submitkls" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="nama_kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nama_kelas" name="nama_kelas">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary float-end">Simpan</button>
                        </form><!-- End Horizontal Form -->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Kelas</h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Kelas</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $kls)
                                    <tr>
                                        <td>
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td>
                                            {{ $kls['nama_kelas'] }}
                                        </td>
                                        <td>
                                            <a href="/editkls/{{ $kls['idkelas'] }}"><button type="button"
                                                    class="btn btn-warning">Update</button></a>
                                            <a href="/hapuskls/{{ $kls['idkelas'] }}"><button type="button"
                                                    class="btn btn-danger">Delete</button></a>
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
    </section>
@endsection
