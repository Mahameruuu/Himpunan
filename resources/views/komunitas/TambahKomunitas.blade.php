@extends('layouts.MainAdmin')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Komunitas</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Komunitas</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Komunitas Form</h5>

            <!-- Komunitas Form -->
            <form action="{{ route('komunitas.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row mb-3">
                <label for="nama_komunitas" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_komunitas" name="nama_komunitas" value="{{ old('nama_komunitas') }}" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ old('deskripsi') }}</textarea>
                </div>
              </div>


              <div class="row mb-3">
                <label for="tanggal_didirikan" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="tanggal_didirikan" name="tanggal_didirikan" value="{{ old('tanggal_didirikan') }}" required>
                </div>
              </div>


              <div class="row mb-3">
                <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
                </div>
              </div>


              <div class="text-center">
                <a href="{{ route('komunitas.index') }}" class="btn btn-primary">Kembali</a>
                <button type="submit" class="btn btn-primary" style="background-color: #28a745">Simpan</button>
                <button type="reset" class="btn btn-secondary" style="background-color: #8b0000">Reset</button>
              </div>
            </form><!-- End Tambah Komunitas Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
