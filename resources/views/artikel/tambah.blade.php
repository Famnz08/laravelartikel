@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Artikel</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/artikel/store">
	@csrf
	<div class="form-group">
		<label>Id artikel</label>
	<input class="form-control" type="text" name="id_artikel" placeholder="Id " >
	</div>
	<div class="form-group">
		<label>Nama artikel</label>
	<input class="form-control" type="text" name="nama_artikel" placeholder="Nama Artikel" >
	</div>
	<div class="form-group">
		<label>Kategori</label>
	<input class="form-control" type="text" name="kategori" placeholder="Kategori">
	</div>
	<div class="form-group">
		<label>Artikel</label>
		<input id="body" type="hidden" name="artikel">
  <trix-editor input="body"></trix-editor>
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="tambah">
	</div>
</form>
</div>
@endsection
