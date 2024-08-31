@extends('layouts.MainAdmin')

@section('content')

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Kegiatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Form will be injected here via JavaScript -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Kegiatan List</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Kegiatan</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Daftar Kegiatan</h5>

            <!-- Add button to create a new Kegiatan -->
            <a href="{{ route('kegiatan.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan</a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kegiatan</th>
                  <th>Tanggal</th>
                  <th>Deskripsi</th>
                  <th>Foto</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($kegiatans as $kegiatan)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $kegiatan->nama_kegiatan }}</td>
                  <td>{{ $kegiatan->tanggal }}</td>
                  <td class="description">{{ $kegiatan->deskripsi }}</td>
                  <td>
                    @if($kegiatan->foto)
                      <img src="{{ asset('storage/' . $kegiatan->foto) }}" alt="{{ $kegiatan->nama_kegiatan }}" width="100">
                    @else
                      No Photo
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('kegiatan.edit', $kegiatan->id) }}" class="btn btn-warning btn-edit">Edit</a>
                    <form action="{{ route('kegiatan.destroy', $kegiatan->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table><!-- End Table -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  $(document).ready(function() {
    $('.btn-edit').on('click', function(event) {
      event.preventDefault();
      var url = $(this).attr('href');
      
      // Mengambil konten form edit dari server
      $.get(url, function(data) {
        $('#editModal .modal-body').html(data);
        var editModal = new bootstrap.Modal(document.getElementById('editModal'));
        editModal.show();
      }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error('Error:', textStatus, errorThrown);
      });
    });
  });
</script>
