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
              <form action="/submiteditmhs" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputNamaMhs" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNamaMhs" name="nama" value="{{$mahasiswa->nama}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputNIM" name="nim" value="{{$mahasiswa->nim}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="no_wa" class="col-sm-2 col-form-label">No Whatsapp</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="no_wa" name="no_wa" value="{{$mahasiswa->no_wa}}">
                  </div>
                </div>
                <input type="hidden" name="idmahasiswa" value="{{ $mahasiswa->idmahasiswa }}"/>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </form><!-- End Form -->
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection