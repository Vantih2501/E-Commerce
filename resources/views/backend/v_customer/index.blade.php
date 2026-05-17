@extends('backend.v_layouts.app')
@section('content')
{{-- Content Awal --}}

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-tittle">{{ $judul }} <br><br></h5>
                <div class="table-responsive">
                    <table id="zero_config" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </th>
                        <tbody>
                            @foreach ($index as $row)
                            <tr>
                               <td>{{ $loop->iteration }}</td> 
                               <td>{{ $row->user->nama }}</td> 
                               <td>{{ $row->user->email }}</td>         
                               <td>
                                    <a href="#" class="btn btn-warning btn-sm me-1">
                                        <i class="fas fa-eye"></i> Detail
                                    </a>

                                    <a href="#" class="btn btn-info btn-sm me-1">
                                        <i class="far fa-edit"></i> Ubah
                                    </a>

                                    <form method="POST" action="#" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>         
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
