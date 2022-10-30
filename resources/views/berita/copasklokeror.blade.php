<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pisang goreng</title>
    
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
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#projects">Resep</a></li>
                    </ul>
                </div>
            </div>
        </nav>

            <!-- Header -->
        
            <header>
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Ini adalah resepnya</h1>
                    </div>
                </div>
            </div>
        </header>

        <!--isi berita/artikel-->
        
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4"></h2>
                        <p class="text-white-50">Ini adalah contoh sudah matang(jadi)
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/pisang.jpg" alt="..." />
            </div>
        </section>
<div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                                        <div class="post">
                      
                    <div class="post">
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                        </div>
                        @foreach
                        <p>
                            
                        </p>
                        @endforeach
                        <div class="col-sm-6">
                          <div class="row">
                            <div class="col-sm-6"></div>
                            <!-- /.col -->
                            <div class="col-sm-6"></div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                     

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

3 Pemain Kampung yang Kini Menjadi Aset Sepak Bola Indonesia, Nomor 1 Bintang Timnas Indonesia di Piala AFF 2020
1.     Rizky Pellu
             (Rizky Pellu bela Bali United)
Daftar ini akan dimulai dengan Rizky Pellu yang kini bermain untuk Bali United. Gelandang bertahan berumur 29 tahun itu berasal dari Desa Tulehu, Kecamatan Salhutu, Maluku Tengah. Perlu diketahui, Desa Tulehu disebut sebagai penghasil pesepak bola berkualitas di Indonesia.

Pellu sudah malang-melintang di sepak bola Tanah Air. Sebelum Bali United, dia pernah main untuk Persis Solo, Pelita Bandung Raya, Mitra Kukar, dan PSM Makassar. Pada musim lalu, dia membantu Bali United juara Liga 1 2021-2022.
2.     Fachruddin Aryanto 
             (Fachruddin Aryanton dalam konferensi pers)
        Selanjutnya, ada nama Fachruddin Aryanto yang menjadi bek tengah andalan Timnas Indonesia era Shin Tae-yong. Sekadar informasi, Fachruddin berasal dari Desa Ceper, Kecamatan Ceper, Klaten, Jawa Tengah.

Bek tengah berumur 33 tahun itu sudah kenyang pengalaman di sepak bola nasional. Kini, Fachruddin main untuk Madura United. Teranyar, Fachruddin sedang mengikuti pemusatan latihan (TC) Tmnas Indonesia U-23 di Korea Selatan (Korsel).

3.     Irfan Jaya
                  Posisi ketiga ditempati oleh pemain Bali United, Irfan Jaya. Sayap kanan andalan Timnas Indonesia itu berasal dari Desa Bonto Maccini, Kecamatan Sinoa, Bantaeng, Sulawesi Selatan.

Beranjak dari desa, Irfan Jaya mampu mewujudkan mimpinya untuk menjadi pesepak bola profesional. Seperti Rizky Pellu, pemain berumur 25 tahun itu pun baru saja merasakan manisnya menjadi juara Liga 1 2021-2022. Kini, Irfan Jaya tengah mengikuti TC Timnas Indonesia U-23 ke Korsel.



