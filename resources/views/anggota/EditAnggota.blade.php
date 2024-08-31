<form action="{{ route('anggota.update', $anggota->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  
  <div class="mb-3">
    <label for="inputName" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="inputName" value="{{ $anggota->nama }}" required>
  </div>

  <div class="mb-3">
    <label for="inputNPM" class="form-label">NPM</label>
    <input type="text" name="npm" class="form-control" id="inputNPM" value="{{ $anggota->npm }}" required>
  </div>

  <div class="mb-3">
    <label for="inputJabatan" class="form-label">Jabatan</label>
    <input type="text" name="jabatan" class="form-control" id="inputJabatan" value="{{ $anggota->jabatan }}" required>
  </div>

  <div class="mb-3">
    <label for="inputFoto" class="form-label">Foto</label>
    <input type="file" name="foto" class="form-control" id="inputFoto" accept="image/*">
    @if($anggota->foto)
      <div class="mt-2">
        <img src="{{ asset('storage/' . $anggota->foto) }}" alt="{{ $anggota->nama }}" width="100">
      </div>
    @endif
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
