@extends('master.mastermahasiswa')

@section('breadcrumb')
<li class="breadcrumb-item ">Mahasiswa</li>
<li class="breadcrumb-item active">Master Mahasiswa</li>
@endsection

@section('main')
<section class="section">
      <div class="row">
        <div class="col-lg-full">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mahasiswa</h5>
              <!-- Horizontal Form -->
              <form action="/submitmhs" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="nama" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="nim" name="nim">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="no_wa" class="col-sm-2 col-form-label">No Whatsapp</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="no_wa" name="no_wa">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </form><!-- End Horizontal Form -->
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Mahasiswa</h5>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Mahasiswa</th>
                    <th scope="col">NIM</th>
                    <th scope="col">No Whatsapp</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mahasiswa as $mhs)
                  <tr>
                    <td>
                      {{ $loop->index + 1 }}
                    </td>
                    <td>
                      {{ $mhs['nama'] }}
                    </td>
                    <td>
                      {{ $mhs['nim'] }}
                    </td>
                    <td>
                      {{ $mhs['no_wa'] }}
                    </td>
                    <td>
                      <a href="/editmhs/{{$mhs['idmahasiswa']}}"><button type="button" class="btn btn-warning">Update</button></a>
                      <a href="/hapusmhs/{{$mhs['idmahasiswa']}}"><button type="button" class="btn btn-danger">Delete</button></a>
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