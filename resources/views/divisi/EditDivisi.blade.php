<form action="{{ route('divisi.update', $divisi->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="mb-3">
    <label for="nama_divisi" class="form-label">Nama Divisi</label>
    <input type="text" name="nama_divisi" class="form-control" id="nama_divisi" value="{{ $divisi->nama_divisi }}" required>
  </div>

  <div class="mb-3">
    <label for="jumlah_anggota" class="form-label">Jumlah Anggota</label>
    <input type="number" name="jumlah_anggota" class="form-control" id="jumlah_anggota" value="{{ $divisi->jumlah_anggota }}" required>
  </div>

  <div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" class="form-select" id="status" required>
      <option value="aktif" {{ $divisi->status == 'aktif' ? 'selected' : '' }}>Aktif</option>
      <option value="non-aktif" {{ $divisi->status == 'non-aktif' ? 'selected' : '' }}>Non-Aktif</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>