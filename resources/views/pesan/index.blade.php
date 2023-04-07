@extends('layouts.app')

@section('content')
<div class="container">
    <div class=col-md-12>
        <div class="card">
            {{-- <div class="card-header">
                <h4>{{ $barang->nama_barang }}</h4>
            </div> --}}
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ url('uploads') }}/{{ $barang->gambar}}" class="rounded mx-auto d-block" width="400" alt=""> 
                    </div>
                    <div class="col-md-6 mt-5">
                        <h2>{{ $barang->nama_barang }}</h2>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Harga</td>
                                    <td>:</td>
                                    <td>Rp. {{ number_format($barang->harga)}}</td>
                                </tr>
                                <tr>
                                    <td>Stok</td>
                                    <td>:</td>
                                    <td>{{ number_format($barang->stok)}}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>{{$barang->keterangan}}</td>
                                </tr>
                                <form action="" method="post" >
                                <tr>
                                    <td>Jumlah Pesanan</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" name="jumlah_pesanan" class="form-control" reqiured="">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Masukkan Keranjang</button>
                                    </td>
                                </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 

</div>
@endsection
