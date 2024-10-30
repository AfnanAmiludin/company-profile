
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Onix Digital Marketing HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="company/assets/css/fontawesome.css">
    <link rel="stylesheet" href="company/assets/css/templatemo-onix-digital.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/owl.css">
<!--

TemplateMo 565 Onix Digital

https://templatemo.com/tm-565-onix-digital

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <div id="subscribe" class="subscribe">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="inner-content">
                <div class="row">
                <div class="col-lg-10 offset-lg-1" >
                    <h2>Certificate</h2>
                    <form id="subscribe" action="/certificate-api" method="POST" class="row">
                        @csrf
                        <div class="col-8">
                            <input type="text" name="nomor" id="website" placeholder="Your Certificate Number" required="" style="width: 100% !important">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-3 py-3">
                            <button type="submit" id="form-submit" class="main-button float-end mb-4" style="width: 90% !important">Search</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>


    @if(empty($data))         
    <div id="subscribe" class="subscribe">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Data Sertifikat</h4>
                        <p class="card-title-desc">Cari sertifikat berdasarkan nomor sertifikat, contoh: <code>SERTIF01</code>.
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Number Certificate</th>
                                <th>Title</th>
                                <th>Object</th>
                                <th>Results</th>
                                <th>Date</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>Tidak ada data</td>
                                <td>Tidak ada data</td>
                                <td>Tidak ada data</td>
                                <td>Tidak ada data</td>
                                <td>Tidak ada data</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        </div>
    </div>       
    @else
    <div id="subscribe" class="subscribe">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Data Sertifikat</h4>
                        <p class="card-title-desc">Data berdasarkan nomor sertifikat: <code>{{ $data->nomor }}</code>.
                        </p>

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th>Number Certificate</th>
                                <th>Title</th>
                                <th>Object</th>
                                <th>Results</th>
                                <th>Date</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                <td>{{ $data->nomor }}</td>
                                <td>{{ $data->judul }}</td>
                                <td>{{ $data->subject }}</td>
                                <td>{{ $data->hasil }}</td>
                                <td>{{ $data->tanggal }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        </div>
    </div>        
    @endif

    <div class="footer-dec">
        <img src="assets/images/footer-dec.png" alt="">
    </div>

    <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="about footer-item">
            <div class="">
              <a href="#"><img src="assets/images/sms-logo2.png" style="max-width: 90%"></a>
            </div>
            <a href="#">erpcorner8@gmail.com</a>
            <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="services footer-item">
            <h4>Services</h4>
            <ul>
              <li><a href="#">Erp</a></li>
              <li><a href="#">Social Media Managment</a></li>
              <li><a href="#">Website</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="community footer-item">
            <h4>Community</h4>
            <ul>
              <li><a href="#">Digital Marketing</a></li>
              <li><a href="#">Business Ideas</a></li>
              <li><a href="#">Website Checkup</a></li>
              <li><a href="#">Page Speed Test</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>
            <br>
            Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


    <!-- Scripts -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
    // Acc
        $(document).on("click", ".naccs .menu div", function() {
        var numberIndex = $(this).index();

        if (!$(this).is("active")) {
            $(".naccs .menu div").removeClass("active");
            $(".naccs ul li").removeClass("active");

            $(this).addClass("active");
            $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

            var listItemHeight = $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            $(".naccs ul").height(listItemHeight + "px");
            }
        });
    </script>
</body>
</html>