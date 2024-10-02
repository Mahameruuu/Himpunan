@extends('layouts.MainAdmin')

@section('content')

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Periode</h5>
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
    <h1>Daftar Periode</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Periode</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Daftar Periode</h5>

            <!-- Add button to create a new Periode -->
            <a href="{{ route('periode.create') }}" class="btn btn-primary mb-3">Tambah Periode</a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tahun</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($periodes as $periode)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $periode->tahun }}</td>
                  <td>
                    <button class="btn toggle-status {{ $periode->status == 'active' ? 'btn-success' : 'btn-danger' }}" data-id="{{ $periode->id }}">
                      <span class="status-text">{{ ucfirst($periode->status) }}</span>
                    </button>
                  </td>
                  <td>
                    <form action="{{ route('periode.destroy', $periode->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- End Table -->

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
    $('.toggle-status').on('click', function(event) {
        event.preventDefault();

        var button = $(this); 
        var periodeId = button.data('id'); 

        $.ajax({
            url: '/periode/' + periodeId + '/status',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}' 
            },
            success: function(response) {
                if (response.success) {                  
                    // Ubah teks status
                    button.find('.status-text').text(response.status);

                    // Ubah kelas tombol sesuai status
                    if (response.status === 'active') {
                        button.removeClass('btn-danger').addClass('btn-success');
                    } else {
                        button.removeClass('btn-success').addClass('btn-danger');
                    }
                } else {
                    alert('Gagal mengubah status: ' + response.message);
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown); 
            }
        });
    });
});


</script>
