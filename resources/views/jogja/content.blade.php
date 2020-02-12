<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a>FunTav@gmail.com</a>
        <i class="icofont-phone"></i> 08214567890
      </div>
      <div class="social-links float-right">
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="/view"><span>FunTav</span></a></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Beranda <i class="la la-angle-down"></i></a></li>
          <li class="drop-down"><a href="">Paket Tour</a>
            <ul class="float-left">
              <li><a href="#">Paket Internasional</a></li>
              <li><a href="#">Paket Domestik</a></li>
            </ul>
          </li>
          <li><a href="#">Spesial Paket Tour</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#services">Kontak Kami</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="login">Masuk</a></li>
          <li><a class="buttondaftar" href="register" style="color: #0064d2;">Daftar</a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->
  
  <section id="destination" class="destination">
    <div class="container">
      <div class="row no-gutters">
        <div class="tourbox ">
          <div class="boxview">
             <img src="assets/img/destinasi/pic1.jpg" class="img-fluid" alt="">
          </div>
          <div class="boxdetail">
            <h2>Tour Yogyakarta</h2> 
            <a><i class="icofont-google-map"></i>Yogyakarta</a>
            <a><i class="icofont-clock-time">5D3N</i></a>
            <div class="range">
              <strong class="price">Rp 3.850.000</strong> 
              <strong class="small">/ pax</strong>
            </div>
            <input id="datetour" type="date" name="date" placeholder="Tanggal Perjalanan" class="hasDatepicker">
            <script type="text/javascript">
              var today = new Date().toISOString().split('T')[0];
              document.getElementsByName("date")[0].setAttribute('min', today);
            </script>
            <div class="jumdiv">
                  <button type="button" class="btn-number" data-type="minus" data-field="guest"><i class="icofont-minus" style="margin: 0"></i></button>
                  <input type="text" id="guest" name="guest" class="input-number" value="1" min="1" max="100">
                  <button type="button" class="btn-number" data-type="plus" data-field="guest"><i class="icofont-minus" style="margin: 0"></i></button>
            </div>
            <a href="#pesantour" class="pesan" onclick="guestinput()">
              <button class="tomb" data-toggle="modal" data-target="#modalForm"><i class="icofont-ui-check"></i></i> Pesan Sekarang!</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Us Section -->