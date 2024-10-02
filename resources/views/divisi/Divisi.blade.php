@extends('layouts.MainAdmin')

@section('content')

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Anggota</h5>
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
    <h1>Anggota List</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Anggota</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Daftar Divisi</h5>

            <a href="{{ route('divisi.create') }}" class="btn btn-primary mb-3">Tambah Divisi</a>

            <table class="table datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Divisi</th>
                  <th>Jumlah Anggota</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach($divisis as $divisi)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $divisi->nama_divisi }}</td>
                  <td>{{ $divisi->jumlah_anggota }}</td>
                  <td>
                    @if($divisi->status == 'aktif')
                      <span class="bg-success text-white px-2 py-1 rounded">{{ ucfirst($divisi->status) }}</span>
                    @else
                      <span class="bg-danger text-white px-2 py-1 rounded">{{ ucfirst($divisi->status) }}</span>
                    @endif
                  </td>
                  <td>
                    <a href="{{ route('divisi.edit', $divisi->id) }}" class="btn btn-warning btn-edit">Edit</a>
                    <form action="{{ route('divisi.destroy', $divisi->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
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

