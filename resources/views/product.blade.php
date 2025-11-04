@extends('layouts.masterlayout')
@section('title', 'hal produk')
@section('content')
<h1>
    {{$product['id']}}
    {{$product['barang']}}
    {{$product['harga']}}
</h1>
@endsection