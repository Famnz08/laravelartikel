@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Artikel</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/artikel/update/{{$artikel->id}}">
	@csrf
	@method('put')
    <div class="form-group">
		<label>Nama artikel</label>
	<input class="form-control" type="text" name="nama_artikel" placeholder="Nama Artikel" value="{{$artikel->nama_artikel}}">
	</div>
	<div class="form-group">
		<label>Kategori</label>
	<input class="form-control" type="text" name="kategori" placeholder="Kategori" value="{{$artikel->kategori}}">
	</div>
    <div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>
    @endsection