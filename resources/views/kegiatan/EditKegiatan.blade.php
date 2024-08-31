<form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="inputName" class="form-label">Nama Kegiatan</label>
    <input type="text" name="nama_kegiatan" class="form-control" id="inputName" value="{{ $kegiatan->nama_kegiatan }}" required>
  </div>
  <div class="mb-3">
    <label for="tanggalKegiatan" class="form-label">Tanggal</label>
    <input type="date" name="tanggal" class="form-control" id="tanggalKegiatan" value="{{ $kegiatan->tanggal }}" required>
  </div>
  <div class="mb-3">
    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" id="inputDeskripsi" rows="3">{{ $kegiatan->deskripsi }}</textarea>
  </div>
  <div class="mb-3">
    <label for="inputFoto" class="form-label">Foto</label>
    <input type="file" name="foto" class="form-control" id="inputFoto" accept="image/*">
    @if($kegiatan->foto)
      <img src="{{ asset('storage/' . $kegiatan->foto) }}" alt="{{ $kegiatan->nama_kegiatan }}" width="100">
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
