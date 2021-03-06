@extends('template.base')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12 my-5">
			<div class="card">
				<div class="card-header">
					Detail Produk
				</div>
				<div class="card-body">
					<div class="jumbotron">
					  <h1 class="display-5">{{$produk->nama}}</h1><hr>
					  <p class="lead"><strong class="text-dark">Harga Rp. {{number_format($produk->harga)}} </strong></p>
					  <p class="lead"><strong class="text-dark">Stok <b>{{$produk->stok}}</b> | Harga Rp. {{number_format($produk->harga)}} </strong></p>
					  <p>Seller : {{$produk->seller->nama}}</p>
					  <p>Kategori : <a href="{{url('admin/kategori', $produk->id_kategori)}}"> {{$produk->kategori->nama}} </a></p>
					   <hr class="my-4">
					  <p>Deskripsi Produk : <br>
					  	{!! nl2br($produk->deskripsi) !!}</p>
					  <a class="btn btn-success btn-sm" href="#" role="button">Masukkan Keranjang</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection