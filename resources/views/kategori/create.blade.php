
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="group mb-3">
            <label for="jenis">Jenis Transaksi</label>
            <select class="default-select wide form-control" name="jenis_kategori" >
                    <option value="Pemasukan" >Pemasukan</option>
                    <option value="Pengeluaran" >Pengeluaran</option>
            </select>
          </div>
          <div class="group mb-3">
            <label for="judul_slider">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required>
          </div>
          <div class="group mb-3">
            <label for="media">Deskripsi</label><br>
            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>