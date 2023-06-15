@foreach ($transaksi as $data)
<div class="modal fade" id="updateModal{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="{{ route('transaksi.update', $data->id) }}" method="POST" >
          @csrf
          @method('PUT')
          <div class="group mb-3">
            <label for="jenis">Kategori</label>
            <select class="default-select wide form-control" name="kategori_id" >
              <option value="{{$data->kategori_id}}" disable selected>{{$data->Kategori->nama_kategori}}</option>
              @foreach($kategori as $item)
                    <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
              @endforeach
            </select>
          </div>
          <div class="group mb-3">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" class="form-control" value="{{$data->tanggal_transaksi}}" id="tanggal_transaksi" required>
          </div>
          <div class="group mb-3">
            <label for="nominal">Nominal</label><br>
            <input type="text" name="nominal" class="form-control" value="{{$data->nominal}}" id="nominal" required>
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