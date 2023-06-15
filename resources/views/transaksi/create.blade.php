
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="group mb-3">
            <label for="jenis">Kategori</label>
            <select class="default-select wide form-control" name="kategori_id" >
              @foreach($kategori as $data)
                    <option value="{{$data->id}}" >{{$data->nama_kategori}}</option>
              @endforeach
            </select>
          </div>
          <div class="group mb-3">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" class="form-control" id="tanggal_transaksi" required>
          </div>
          <div class="group mb-3">
            <label for="nominal">Nominal</label><br>
            <input type="text" name="nominal" class="form-control" id="nominal" required>
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




