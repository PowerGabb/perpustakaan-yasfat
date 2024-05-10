@extends('layouts.main')
@section('content')
<a type="button" class="btn btn-primary" href="/tambah-buku">Tambah Buku</a>
<hr>
<div class="card-body">
    <div class="table-responsive">
        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length"
                                aria-controls="dataTable"
                                class="custom-select custom-select-sm form-control form-control-sm">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                        role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending" style="width: 64.75px;">Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-label="Position: activate to sort column ascending"
                                    style="width: 80.6094px;">Status</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-label="Office: activate to sort column ascending"
                                    style="width: 55.7969px;">Tanggal Pinjam</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-label="Age: activate to sort column ascending"
                                    style="width: 30.1719px;">Tanggal kembali</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-label="Start date: activate to sort column ascending"
                                    style="width: 67.8594px;">Batas Pinjam</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-label="Start date: activate to sort column ascending"
                                    style="width: 67.8594px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td class="sorting_1">Rahman</td>
                                <td>Dipinjam</td>
                                <td>01/01/2022</td>
                                <td>02/01/2022</td>
                                <td>03/01/2022</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            <tr class="even">
                                <td class="sorting_1">Edison</td>
                                <td>Dipinjam</td>
                                <td>04/03/2022</td>
                                <td>07/03/2022</td>
                                <td>06/03/2022</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                            <tr class="odd">
                                <td class="sorting_1">Rahmat</td>
                                <td>Dikembalikan</td>
                                <td>01/01/2022</td>
                                <td>02/01/2022</td>
                                <td>03/01/2022</td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

@endsection