@extends('layouts.MainAdmin')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Anggota</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Anggota</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Anggota Form</h5>

            <!-- Anggota Form -->
            <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="nama" class="form-control" id="inputName" required>
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="inputNPM" class="col-sm-2 col-form-label">NPM</label>
                <div class="col-sm-10">
                  <input type="text" name="npm" class="form-control" id="inputNPM" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputJabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                  <input type="text" name="jabatan" class="form-control" id="inputJabatan" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                  <input type="file" name="foto" class="form-control" id="inputFoto" accept="image/*">
                </div>
              </div>

              <div class="text-center">
                <a href="{{ route('anggota.index') }}" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-primary" style="background-color: #28a745">Submit</button>
                <button type="reset" class="btn btn-secondary" style="background-color: #8b0000">Reset</button>
              </div>
            </form><!-- End Anggota Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
