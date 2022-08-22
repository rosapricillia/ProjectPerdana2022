<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PT. TOR GANDA</title>
        <link rel="icon" type="image/x-icon" href="assets/img/logotorganda.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    </head>
    <body>
        <header>
            <h1 class="site-heading text-faded d-none d-lg-block">
                <img src="assets/img/logotorganda.png">
                <span class="site-heading-lower">PT. TOR GANDA</span>
            </h1>
        </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">PT. TOR GANDA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="about.php">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Products</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="contact.php">Contact</a></li>
                        <li class="nav-item px-lg-4 active"><a class="nav-link text-uppercase" href="career.php">CAREER</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section cta-1 full">
            <div class="container row">
                    <div class="bg-faded mx-auto">
                    <h3>Form Lamaran Pekerjaan</h3>
                      <form class="form-horizontal g-3" method="post" action="lamaran.php">
                        <div class="row mb-3 ">
                          <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" id="Name" name="name" required>
                        </div>
                        </div>
                        <div class="row mb-3 ">
                        <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-5">

                        <!--div class="form-check form-check-inline">
                           <input type="radio" id="contactChoice1"
                           name="jeniskelamin" value="laki-laki">
                          <label for="contactChoice1">Laki-Laki</label>

                          <input type="radio" id="contactChoice2"
                           name="jeniskelamin" value="perempuan">
                          <label for="contactChoice2">Perempuan</label>
                        </div-->

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenisk" id="flexRadioDefault1" value="laki-laki">
                          <label class="form-check-label" for="flexRadioDefault1">
                            Laki-Laki
                          </label>
                          <input class="form-check-input" type="radio" name="jenisk" id="flexRadioDefault2" value="perempuan">
                          <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                          </label>
                        </div>

                        </div>
                        </div>
                        <div class="row mb-3">
                          <label for="Email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-4">
                            <input type="email" class="form-control" id="Email" name="email" required>
                          </div>
                        </div>
                        <div class="row mb-3">
                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-2">
                        <input type="tel" id="phone" name="phone" pattern="[0-9]{12}" required>
                      </div>
                      </div>
                      <div class="row mb-3">
                      <label for="inputPhone" class="col-sm-2 col-form-label">Agama</label>
                      <div class="col-sm-1">
                      <div class="form-floating">
                      <select class="form-select" id="floatingSelect" name="agama" aria-label="Floating label select example">
                        <option value="kristen" selected="">Kristen</option>
                        <option value="islam">Islam</option>
                        <option value="hindu">Hindu</option>
                        <option value="buddha">Buddha</option>
                        <option value="konghucu">Konghucu</option>
                      </select>
                      </div>
                      </div>
                      </div>
                      <div class="row mb-3">
                      <label for="Address" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-5">
                      <div class="form-floating">
                      <textarea class="form-control" id="Address" name="address"></textarea>
                      </div>
                      </div>
                      </div>
                      <div class="row mb-3">
                      <label for="campus" class="col-sm-2 col-form-label">Asal Kampus</label>
                      <div class="col-sm-2">
                      <input list="asalkampus" id="asalkampuschoice" name="asalkampus" />
                      <datalist id="asalkampus">
                          <option value="Universitas Indonesia">
                          <option value="Universitas Gadjah Mada">
                          <option value="Institut Teknologi Bandung">
                          <option value="Universitas Airlangga">
                          <option value="Universitas Sumatera Utara">
                          <option value="Universitas Negeri Medan">
                      </datalist>                    
                      </div>
                      </div>
                      <div class="row mb-3">
                      <label for="fakultaschoice" class="col-sm-2 col-form-label">Fakultas</label>
                      <div class="col-sm-2">
                      <input list="fakultas" id="fakultaschoice" name="fakultas" />
                      <datalist id="fakultas">
                          <option value="Kedokteran">
                          <option value="Keperawatan">
                          <option value="Farmasi">
                          <option value="Psikologi">
                          <option value="Ilmu Komputer dan Teknologi Informasi">
                          <option value="Matematika dan Ilmu Pengetahuan Alam">
                      </datalist>              
                      </div>
                      </div>
                      <div class="row mb-3">
                      <label for="prodichoice" class="col-sm-2 col-form-label">Prodi</label>
                      <div class="col-sm-2">
                      <input list="prodi" id="prodichoice" name="prodi" />
                      <datalist id="prodi">
                          <option value="Matematika">
                          <option value="Biologi">
                          <option value="Fisika">
                          <option value="Kimia">
                          <option value="Statistika">
                          <option value="Teknik Informatika">
                          <option value="Metrologi dan Instrumentasi">
                      </datalist>                  
                      </div>
                      </div>
                      <div class="row mb-3">
                      <label for="quantity" class="col-sm-2 col-form-label">IPK</label>
                      <div class="col-sm-2">
                      <input type="text" class="form-control" id="quantity" name="ipk" required>
                      </div>
                      </div>
                      <div class="row mb-3">
                      <label for="quantity" class="col-sm-2 col-form-label">Tahun lulus</label>
                      <div class="col-sm-1">
                      <div class="form-floating">
                      <select class="form-select" id="floatingSelect" name="tahun" aria-label="Floating label select example">
                        <option value="2017" selected="">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                      </select>
                      </div>
                      </div>
                      </div>
                      <button
                          class="btn btn-primary send-button"
                          id="submit"
                          type="submit"
                          value="SEND">
                          <span class="send-text">SUBMIT</span>
                        </button>
                      </form>
                    </div>
                  </div>
                </section>


                
                 <?php
                        include 'koneksi.php';
                        $tempid="";
                        if(isset($_POST['submit'])){
                          $nama = $_POST['nama'];
                          $email = $_POST['email_pengirim'];
                          $komentar = $_POST['komentar'];
                          $date = date("F J, Y, g:i a");
                          $sql = mysqli_query ($connect, "INSERT INTO komentar(nama, email, komentar, date) VALUES ('$nama', '$email', '$komentar', NOW())");
                        } 
                      
                       ?>

                <section class="page-section cta-1">
                  <div class="container row">
                      <div class="bg-faded">
                      <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">ADD COMMENT</span>
                      </h2>
                      <form action="career.php" method="post">
                            <div class="mb-3">
                              <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                              <input type="text" class="form-control" name="nama" required>
                            </div>

                          <div class="mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <input type="email" class="form-control" name="email_pengirim" required>
                          </div>

                          <div class="mb-3">
                            <label for="inputComment" class="col-sm-2 col-form-label">Comment</label>
                            <textarea class="form-control" name="komentar" required></textarea>
                          </div>

                          <button type="submit" value="Submit" name="submit" class="btn btn-primary"> Submit
                          </button>
                          <hr>
                          <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">Comment :</span>
                          </h2>
                      </form>
                      <?php 
                       include 'koneksi.php';
                        $query = mysqli_query ($connect, "SELECT * FROM komentar ORDER BY date DESC");
                        while($d = mysqli_fetch_array($query)){
                          echo "<table>";
                          echo "<tr><td><b>$d[nama] : </b></td></tr>";
                          echo "<tr><td><i>Email : $d[email]</i></td></tr>";
                          echo "<tr><td><i>Komentar : $d[komentar]</i></td></tr>";
                          echo "<tr><td align=right>$d[date]</td></tr></table>";
                          echo "<td><a href='delete.php?id=$d[id]'>Delete</a></td><hr>";


                        }
                        ?>
  
                     </div>
                  </div>
              </section>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2-fix" href="https://web.facebook.com/torganda.co.id?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2-fix1" href="https://www.youtube.com/channel/UCb5unHWY1PhKkBjDPrkW1kQ"><i class="fab fa-youtube"></i></a>
                    <a class="mx-2-fix2" href="https://www.instagram.com/torganda.co.id/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Your Website 2022</p></div>
        </footer>
    </body>
</html>
