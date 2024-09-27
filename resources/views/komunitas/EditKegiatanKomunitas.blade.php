<form action="{{ route('kegiatan_komunitas.update', $kegiatan_komunitas->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  
  <!-- Nama Komunitas (Non-editable) -->
  <div class="mb-3">
    <label for="namaKomunitas" class="form-label">Nama Komunitas</label>
    <input type="text" name="nama_komunitas" class="form-control" id="namaKomunitas" 
           value="{{ $kegiatan_komunitas->komunitas->nama_komunitas ?? 'Nama komunitas tidak ditemukan' }}" readonly>
  </div>
  
  <!-- Nama Kegiatan Komunitas -->
  <div class="mb-3">
    <label for="inputName" class="form-label">Nama Kegiatan Komunitas</label>
    <input type="text" name="nama_kegiatan" class="form-control" id="inputName" value="{{ $kegiatan_komunitas->nama_kegiatan }}" required>
  </div>
  
  <!-- Deskripsi Kegiatan Komunitas -->
  <div class="mb-3">
    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" id="inputDeskripsi" rows="3" required>{{ $kegiatan_komunitas->deskripsi }}</textarea>
  </div>
  
  <!-- Tanggal Dilaksanakan -->
  <div class="mb-3">
    <label for="tanggalKegiatan" class="form-label">Tanggal Dilaksanakan</label>
    <input type="date" name="tanggal_kegiatan" class="form-control" id="tanggalKegiatan" value="{{ $kegiatan_komunitas->tanggal_kegiatan }}" required>
  </div>
  
  <!-- Foto Kegiatan Komunitas -->
  <div class="mb-3">
    <label for="inputFoto" class="form-label">Foto</label>
    <input type="file" name="foto" class="form-control" id="inputFoto" accept="image/*">
    @if($kegiatan_komunitas->foto)
      <img src="{{ asset('storage/' . $kegiatan_komunitas->foto) }}" alt="{{ $kegiatan_komunitas->nama_kegiatan }}" width="100">
    @endif
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
