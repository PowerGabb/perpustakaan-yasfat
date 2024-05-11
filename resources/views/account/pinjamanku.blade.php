@extends('layouts.main')
@section('content')
    

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Pinjamanku</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Buku</th>
                                <th>Status</th>
                                <th>Tgl Pinjam</th>
                                <th>Tgl Kembali</th>
                                <th>Tgl Wajib Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->book->title }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->rent_at }}</td>
                                <td>{{ $item->return_at }}</td>
                                <td>{{ $item->rent_time_limit }}</td>
                            </tr>
                            @empty
                                <td colspan="6"><p class="text-center text-danger">No Data</p></td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection