<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bola</title>
    
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/fontawesome-free/css/all.min.css'); }}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');}}">
  <link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');}}">
  <link rel="stylesheet" href="{{ URL::asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css');}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('adminlte/dist/css/adminlte.min.css');}}">
</head>
<body>

            <!-- Header -->
        

        <!--isi berita/artikel-->
        
        <section class="about-section text-center" id="tentang">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4"></h2>
                        @foreach($isi as $i)
                        <p>
                          {{$i->created_at}}
                        </p>
                        @endforeach
                        <p class="text-white-50">Ini adalah contoh salah satu stadion di Indonesia
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/bola.jpeg" alt="..." />
            </div>
        </section>
<div class="card-body">
                <div class="tab-content">
                <img class="img-fluid" src="assets/img/stadion.jpg" alt="..." />
                  <div class="active tab-pane" id="activity">
                                        <div class="post">
                         <div class="container">   
                        
                          @foreach($isi as $isi)
                        <?= $isi->artikel ?>
                        @endforeach
                        </div>
                          <div class="row">
                            <div class="col -lg mt-3">

                            </div>
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                        <form class="form-horizontal" action="bola/store" method="POST">
                      @csrf
                      <div class="form-group row">
	                    	<label>Nama artikel</label>
                        <div class="col-sm-10">
	                    	<select class="form-control" name="id_artikel">
	                    		<option>Silahkan dipilih</option>
	                    		@foreach($comment as $row)
	                    		<option value="{{$row->id_artikel}}">{{$row->nama_artikel}}</option>
	                    		@endforeach
	                    	</select>
                        </div>
	                    </div>
                      
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="name" name="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Comment</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" class="comment" placeholder="Comment" name="comment">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                    <textarea name="" id="" cols="180" rows="10">
                        @foreach($comment as $comment)
                        
                            {{$comment->name}}
                            {{$comment->comment}}
                        
                        @endforeach
                    </textarea>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    
        <script src="{{ URL::asset('adminlte/plugins/jquery/jquery.min.js');}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js');}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ URL::asset('adminlte/plugins/datatables/jquery.dataTables.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/jszip/jszip.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/pdfmake/pdfmake.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/pdfmake/vfs_fonts.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js');}}"></script>
<script src="{{ URL::asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js');}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('adminlte/dist/js/adminlte.min.js');}}"></script>
</body>
</html>