<!DOCTYPE html>
<html>
<head>
<title>PERPUSTAKAAN CILEBUT</title> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
   <font color="#00CCCG"><h3 align="center"><?php echo $this->session->flashdata('message');?></h3></font> 
    <!-- ################################################################################################ -->
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-sign-in"></i> <a href="perpus/loginn">Login</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">PERPUSTAKAAN CILEBUT</a></h1>
    </div>
    <div id="search" class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="search" value="" placeholder="Search Here&hellip;">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a class="drop" href="#">Profil</a>
        <ul>
          <li><a href="pages/gallery.html">Riwayat</a></li>
          <li><a href="pages/full-width.html">Visi & Misi</a></li>
          <li><a href="pages/sidebar-left.html">Struktur Organisasi</a></li>
        </ul>
      </li>
      <li><a class="drop" href="pages/gallery.html">Gallery</a>
        <ul>
          <li><a href="#">Anggota</a></li>
          <li><a class="drop" href="#">Buku</a>
            <ul>
              <li><a href="#"></a>Kategori</li>
              <li><a href="#"></a>Judul</li>
              <li><a href="#"></a>Pengarang</li>
            </ul>
          </li>
          <li><a href="#">Kegiatan</a></li>
        </ul>
      </li>
      <li><a href="#">Service</a></li>
      <li><a href="#">Location</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded" style="background-image:url('images/perpus17.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div class="overlay inspace-30 btmspace-30">
        <h2 class="heading">Anda Bingung Mencari Buku??</h2>
        <p></p>
      </div>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">Ya</a></li>
          <li><a class="btn inverse" href="#">Tidak</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h2 class="heading">KOLEKSI UNGGULAN</h2>
      <p>Kami menyediakan beragam koleksi buku terlengkap dan terupdate</p>
    </div>
    <article class="one_third first btmspace-50">
      <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-500px rightspace-10"></i> <a href="#">Matematika</a></h3>
      <p>Saat Anda belajar matematika, maka lobus frontal dan parietal akan bekerja lebih aktif. Lobus frontal sendiri terletak di daerah dahi Anda dan berfungsi untuk&hellip;</p>
      <footer><a href="#">Read More &raquo;</a></footer>
    </article>
    <article class="one_third btmspace-50">
      <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-adjust rightspace-10"></i> <a href="#">Astronomi</a></h3>
      <p> Ilmu astronomi mempelajari angkasa, benda langit, dan fenomena alam. Banyak yang beranggapan perlu waktu dan kelas khusus, semacam kuliah di kampus&hellip;</p>
      <footer><a href="#">Read More &raquo;</a></footer>
    </article>
    <article class="one_third btmspace-50">
      <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-leaf rightspace-10"></i> <a href="#">Biologi</a></h3>
      <p>Guys,belajar Biologi itu penting loh! Mau tahu kenapa? Alasannya adalah karena Biologi merupakan ilmu yang mengkaji tentang kehidupan dan mengajarkan kita&hellip;</p>
      <footer><a href="#">Read More &raquo;</a></footer>
    </article>
    <article class="one_third first">
      <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-leanpub rightspace-10"></i> <a href="#">Sains</a></h3>
      <p>Proses mempelajari science dengan benar akan melatih kita menggunakan prinsip-prinsip logika dalam mengevaluasi apakah informasi yang kita peroleh itu benar atau&hellip;</p>
      <footer><a href="#">Read More &raquo;</a></footer>
    </article>
    <article class="one_third">
      <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-legal rightspace-10"></i> <a href="#">Hukum</a></h3>
      <p>Siapa bilang belajar hukum itu susah dan membosankan? Kesan formalitas dan stigma harus menghafal undang-undang bagi mahasiswa hukum agaknya harus ditinjau&hellip;</p>
      <footer><a href="#">Read More &raquo;</a></footer>
    </article>
    <article class="one_third">
      <h3 class="font-x1 btmspace-30"><i class="fa fa-2x fa-pied-piper-alt rightspace-10"></i> <a href="#">Sejarah</a></h3>
      <p>Belajar sejarah gak harus disekolahan loh guys! Sejarah itu penting. Sejarah mengajarkan kepada kita tentang apa yang terjadi masa lalu,sekaligus memberitahu kita&hellip;</p>
      <footer><a href="#">Read More &raquo;</a></footer>
    </article>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('images/kegiatan4.jpg');">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <article class="center">
      <h2 class="font-x3 uppercase">Ingin Bergabung Dengan Kami? </h2>
      <p class="btmspace-50"></p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn inverse" href="#">Ya</a></li>
          <li><a class="btn" href="#">Tidak Sekarang</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="center btmspace-50">
      <h1 class="heading">BERITA TERKINI</h1>
      <p></p>
    </div>
    <ul class="nospace group">
      <li class="one_third first">
        <article class="element">
          <figure><img src="images/Kegiatan9.jpg" alt="">
            <figcaption><a href="#"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="excerpt">
            <h6 class="heading">Sumbangan Buku</h6>
            <time datetime="2018-12-18">18<sup>th</sup>Desember 2018</time>
            <p>Kepala Perpustakaan Nasional Muhammad Syarif&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="element">
          <figure><img src="images/kegiatan10.jpg" alt="">
            <figcaption><a href="#"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="excerpt">
            <h6 class="heading">Super Showbiz Perempuan </h6>
            <time datetime="2018-12-24">24<sup>th</sup> Desember 2018</time>
            <p>Presiden kelima RI Megawati Soekarnoputri&hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="element">
          <figure><img src="images/kegiatan12.jpg" alt="">
            <figcaption><a href="#"><i class="fa fa-eye"></i></a></figcaption>
          </figure>
          <div class="excerpt">
            <h6 class="heading">Kompetensi Tenaga Perpustakaan</h6>
            <time datetime="2018-12-25">25<sup>th</sup> Desember 2018</time>
            <p>Standardisasi person atau sumber daya manusia &hellip;</p>
            <footer><a href="#">Read More &raquo;</a></footer>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
      <div class="wrapper row4 bgded overlay" style="background-image:url('images/baca6.jpg');">
      <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="cta" class="group">
      <div class="one_third first"><i class="fa fa-map-marker"></i>
        <p>Find us</p>
        <p><a href="www.google.com/maps/@37.0625,-95.67">Google Maps</a></p>
      </div>
      <div class="one_third"><i class="fa fa-phone"></i>
        <p>Call us</p>
        <p>+628511111035</p>
      </div>
      <div class="one_third"><i class="fa fa-envelope-o"></i>
        <p>Email us</p>
        <p><a href="www.yahoo.com"></a>perpustakaanclbt@yahoo.com</p>
      </div>
       </div>
       <!-- ################################################################################################ -->
   <div class="group">
      <div class="one_quarter first">
        <h6 class="title">Syarat & Ketentuan</h6>
        <p>Setiap anggota Perpustakaan  dan telah memiliki nomor anggota yang sah, berhak meminjam buku di perpustakaan kami.</p>
        <p>Untuk menjadi anggota Perpustakaan Cilebut,silahkan lakukan pendaftaran secara online melalui form pendaftaran.</p>
      </div>
      <div class="one_quarter">
        <h6 class="title">Direktori</h6>
        <ul class="nospace linklist">
          <li><a href="#">Perpustakaan Nasional</a></li>
          <li><a href="#">Perpustakaan Online</a></li>
          <li><a href="#">Perpustakaan Daerah</a></li>
          <li><a href="#">Centre Of Excellence</a></li>
        </ul>
      </div>
      <div class="one_quarter">
        <h6 class="title">Umum</h6>
        <ul class="nospace linklist">
          <li><a href="#">Keanggotaan</a></li>
          <li><a href="#">E-Resources</a></li>
          <li><a href="#">Laporan Pelanggaran</a></li>
          <li><a href="#">Call Centre 24jam </a></li>
        </ul>
      </div>
      <div class="one_quarter">
                    <h6 class="title">Daftar Member</h6>
                    <?php echo form_open('perpus/member'); ?>
                    <label for="nik">Masukan NIK<span class="required"></span></label><input type="text" id="nik" name="nik" class="form-control" placeholder="" required="required" onfocus="this.style.color='#000'">
                    <label for="nama">Masukan Nama<span class="required"></span></label><input type="text" id="nama" name="nama" class="form-control" placeholder="" required="required"  onfocus="this.style.color='#000'">
                    <label for="no_hp">Masukan No.Hp<span class="required"></span></label><input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="" required="required"  onfocus="this.style.color='#000'">
                    <label for="email">Masukan Email<span class="required"></span></label><input type="email" id="email" name="email" class="form-control" placeholder="" required="required"  onfocus="this.style.color='#000'">
                    <label for="alamat">Masukan ALamat<span class="required"></span></label><input type="text" id="alamat" name="alamat" class="form-control" placeholder="" required="required"  onfocus="this.style.color='#000'">
                     <div class="text-center"><br>
                      <?php echo form_submit( 'submit', 'Daftar' , 'class = "btn btn-primary"'); ?>
                      </div>
                      <?php echo form_close(); ?>
            </article>
          </div>
          </li>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="social" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="title">Social Media</h6>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
        <li><a class="faicon-youtube" href="#"><i class="fa fa-youtube"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <div class="one_half">
      <h6 class="title">Newsletter subscription</h6>
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input type="text" value="" placeholder="Type Email Here&hellip;">
          <button class="fa fa-share" type="submit" title="Submit"><em>Submit</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">@Copyright &copy; 2018 - All Rights Reserved - <a href="index.php">Perpustakaan Cilebut</a></p>
    </a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
