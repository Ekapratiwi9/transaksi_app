@foreach ($kategori as $data)
<div class="modal fade" id="updateModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('kategori.update', $data->id) }}" method="POST" >
          @csrf
          @method('PUT')
          <div class="group mb-3">
            <label for="jenis">Jenis Transaksi</label>
            <select class="default-select wide form-control" name="jenis_kategori" >
                    <option value="Pemasukan" {{$data->jenis_kategori == 'Pemasukan' ? 'selected' : ''}}>Pemasukan</option>
                    <option value="Pengeluaran" {{$data->jenis_kategori == 'Pengeluaran' ? 'selected' : ''}}>Pengeluaran</option>
            </select>
          </div>
          <div class="group mb-3">
            <label for="judul_slider">Nama Kategori</label>
            <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" required value="{{$data->nama_kategori}}">
          </div>
          <div class="group mb-3">
            <label for="media">Deskripsi</label><br>
            <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="5" required>{{$data->deskripsi}}</textarea>
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
@endforeach