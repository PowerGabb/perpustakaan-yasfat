@extends('layouts.main')
@section('content')
<a type="button" class="btn btn-primary" href="/tambah-buku">Tambah Buku</a>
<hr>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <div class="col">
      <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="0%" height="200"  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        <div class="card-body">
          <p class="card-text">Belajar Javascript</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a type="button" class="btn btn-primary" href="/pinjam">Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <svg class="bd-placeholder-img card-img-top" width="0%" height="200"  xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="40%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
        <div class="card-body">
          <p class="card-text">Belajar Javascript</p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a type="button" class="btn btn-primary" href="/pinjam">Pinjam</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection