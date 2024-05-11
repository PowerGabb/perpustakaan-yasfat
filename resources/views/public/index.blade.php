@extends('layouts.main')
@section('content')


    <div class="row">

        @if (Auth::check())
            @if (Auth::user()->role == 'menunggu aktivasi')
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <h4 class="alert-heading">Peringatan!</h4>
                        <p>Akun anda sedang menunggu aktivasi. Silahkan hubungi admin untuk aktivasi akun anda.</p>
                    </div>
                </div>
            @endif
        @endif
        @forelse ($data as $item)
            <div class="col-lg-4 col-md-6 col-12 margin-tb mb-5">
                <div class="card" style="height: 100%">
                    <div class="card-header text-center">
                        <h3 class="text-center card-title">{{ $item->title }}</h3>
                        @foreach ($item->categories as $category)
                            <small class="text-muted text-center ">{{ $category->title }}</small>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src=" 
                        
                        @if ($item->cover) {{ asset('storage/cover/' . $item->cover) }}
                        @else
                            {{ asset('default.png') }} @endif
                        
                        
                        "
                                alt="" class="img-fluid w-50 ">
                        </div>
                        <div class="card-text pt-4">
                            <p>{{ $item->description }}</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between justify-items-center">
                        <a href="/book/{{ $item->id }}" class="btn btn-primary">Detail</a>
                        <div class="text-center">
                            <p>Stock : {{ $item->jumlah }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <h1>Buku Tidak Ditemukan</h1>
        @endforelse
    </div>
@endsection
