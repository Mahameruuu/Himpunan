@extends('layouts.MainAdmin')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Divisi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Tambah Divisi</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Divisi Form</h5>

                <form action="{{ route('divisi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label for="nama_divisi" class="form-label">Nama Divisi</label>
                    <input type="text" name="nama_divisi" class="form-control" id="nama_divisi" required>
                </div>

                <div class="row mb-3">
                    <label for="jumlah_anggota" class="form-label">Jumlah Anggota</label>
                    <input type="number" name="jumlah_anggota" class="form-control" id="jumlah_anggota" required>
                </div>

                <div class="row mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-select" id="status" required>
                    <option value="aktif">Aktif</option>
                    <option value="non-aktif">Non-Aktif</option>
                    </select>
                </div>

                <div class="text-center">
                    <a href="{{ route('divisi.index') }}" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-primary" style="background-color: #28a745">Submit</button>
                    <button type="reset" class="btn btn-secondary" style="background-color: #8b0000">Reset</button>
                </div>
                </form>
            </div>  
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
