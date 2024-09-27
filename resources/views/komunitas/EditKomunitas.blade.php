<form action="{{ route('komunitas.update', $komunitas->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="inputName" class="form-label">Nama Komunitas</label>
    <input type="text" name="nama_komunitas" class="form-control" id="inputName" value="{{ $komunitas->nama_komunitas }}" required>
  </div>
  <div class="mb-3">
    <label for="inputDeskripsi" class="form-label">Deskripsi</label>
    <textarea name="deskripsi" class="form-control" id="inputDeskripsi" rows="3" required>{{ $komunitas->deskripsi }}</textarea>
  </div>
  <div class="mb-3">
    <label for="tanggalKegiatan" class="form-label">Tanggal Didirikan</label>
    <input type="date" name="tanggal_didirikan" class="form-control" id="tanggalKegiatan" value="{{ $komunitas->tanggal_didirikan }}" required>
  </div>
  <div class="mb-3">
    <label for="inputFoto" class="form-label">Foto</label>
    <input type="file" name="foto" class="form-control" id="inputFoto" accept="image/*">
    @if($komunitas->foto)
      <img src="{{ asset('storage/' . $komunitas->foto) }}" alt="{{ $komunitas->nama_komunitas }}" width="100">
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
