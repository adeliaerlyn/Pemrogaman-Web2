@extends('layouts.app')
@section('Admin', 'active')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12 mb-4">
      <img src="{{ url('images/find.png') }}" class="rounded mx-auto d-block" width="300" alt="">
    </div>

    <div class="col-md-12 card container"><br>
      <form action="{{url('add_data')}}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="row m-2">
          <div class="col-md-4">
            <label for="gambar">Gambar Barang</label>
          </div>
          <div class="col-md-8">
            <input type="file" name="gambar" id="gambar" class="form-control">
          </div>
        </div>
        <div class="row m-2">
          <div class="col-md-4">
            <label for="nama">Nama Barang</label>
          </div>
          <div class="col-md-8">
            <input type="text" name="nama" id="nama" class="form-control">
          </div>
        </div>
        <div class="row m-2">
          <div class="col-md-4">
            <label for="harga">Harga Barang</label>
          </div>
          <div class="col-md-8">
            <input type="number" name="harga" id="harga" class="form-control">
          </div>
        </div>
        <div class="row m-2">
          <div class="col-md-4">
            <label for="stok">Stok Barang</label>
          </div>
          <div class="col-md-8">
            <input type="number" name="stok" id="stok" class="form-control">
          </div>
        </div>
        <div class="row m-2">
          <div class="col-md-4">
            <label for="keterangan">Keterangan Barang</label>
          </div>
          <div class="col-md-8">
            <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
          </div>
        </div><br>
        <div class="row m-2">
          <div class="col-md-6">
          </div>
          <div class="col-md-1">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <div class="col-md-1">
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </div><br>
      </form>
    </div>
    <hr><br><br><br>
    <div class="col-md-12 card container">
      <table class="table centered">
        <tr>
          <td>Gambar</td>
          <td>Nama Barang</td>
          <td>Harga</td>
          <td>Stok</td>
          <td>Action</td>
        </tr>
        @foreach ($barangs as $barang)
        <tr>
          <td><img src="./uploads/{{$barang->gambar}}" alt="" style="width: 100px;"></td>
          <td>{{$barang->nama_barang}}</td>
          <td>{{$barang->harga}}</td>
          <td>{{$barang->stok}}</td>
          <td>
            <a href="{{url('show', $barang->id)}}" class="btn btn-info">Show </a>
            <a href="{{url('show', $barang->id)}}" class="btn btn-primary">Info </a>
            <a href="{{url('show', $barang->id)}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection