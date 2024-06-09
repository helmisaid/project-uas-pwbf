@extends('master.mastermahasiswa')

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
              <form action="/submiteditkls" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputNamaKelas" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNamaMhs" name="nama_kelas" value="{{$kelas->nama_kelas}}">
                  </div>
                </div>
                </div>
                <input type="hidden" name="idkelas" value="{{ $kelas->idkelas }}"/>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </form><!-- End Form -->
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection