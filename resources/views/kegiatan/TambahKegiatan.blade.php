@extends('layouts.MainAdmin')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Kegiatan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Kegiatan Form</h5>

            <!-- Kegiatan Form -->
            <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="row mb-3">
                <label for="inputName" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                <div class="col-sm-10">
                  <input type="text" name="nama_kegiatan" class="form-control" id="inputName" required>
                </div>
              </div>
              
              <div class="row mb-3">
                <label for="tanggalKegiatan" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" name="tanggal" class="form-control" id="tanggalKegiatan" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputDeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea name="deskripsi" class="form-control" id="inputDeskripsi" rows="3"></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                  <input type="file" name="foto" class="form-control" id="inputFoto" accept="image/*">
                </div>
              </div>

              <div class="text-center">
                <a href="{{ route('kegiatan.index') }}" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-primary" style="background-color: #28a745">Submit</button>
                <button type="reset" class="btn btn-secondary" style="background-color: #8b0000">Reset</button>
              </div>
            </form><!-- End Kegiatan Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
