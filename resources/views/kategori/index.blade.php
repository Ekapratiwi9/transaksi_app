@extends('layouts.index')
@section('content')
<div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        Kategori
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"  style="float: right;">
                        Tambah Data
                    </button> 
                    </h5>
                    
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">	
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Jenis Transaksi</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $i=1 @endphp
                        @forelse ($kategori as $data)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $data->jenis_kategori }}</td>
                                <td>{{ $data->nama_kategori }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td class="text-center">
                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#updateModal{{ $data->id }}">
                                Ubah
                                </button>
                                <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                Hapus
                                </button>
                              </td>
                            </tr>
                            @empty
                            <tr>
                            <p>Data tidak tersedia.</p>
                            </tr>
                            
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            @foreach ($kategori as $data)
            <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Delete Data</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p class="text-center">Are you sure want to delete?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="{{ route('kategori.destroy', $data->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger text-white">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
            @endforeach
    @include('kategori.create')
    @include('kategori.update')
@endsection