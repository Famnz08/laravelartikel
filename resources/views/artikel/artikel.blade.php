@extends('layout.layout')
@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/artikel/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Artikel</th>
                    <th>Nama artikel</th>
                    <th>Kategori</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($artikel as $row)
					<tr>
						<td>{{$row->id_artikel}}</td>
						<td>{{$row->nama_artikel}}</td>
						<td>{{$row->kategori}}</td>
						<td><a class="btn btn-primary" href="/artikel/edit/{{$row->id}}">Edit</a>
            <a class="btn btn-danger" href="/artikel/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection