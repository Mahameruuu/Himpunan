@extends('layouts.MainAdmin')

@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Form Layouts</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Periode</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-6">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Periode Form</h5>

            <!-- Periode Form -->
            <form action="{{ route('periode.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" name="tahun" class="form-control" id="tahun" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" class="form-select" id="status" required>
                        <option value="active">Active</option>
                        <option value="non-active">Non-Active</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form><!-- End Periode Form -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
