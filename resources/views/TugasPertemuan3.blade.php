<!DOCTYPE html>
<html lang="id">
<head>
  <title>Reservasi Kamar Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>

    .latar-halaman {
      background-color: #fdf6ec;
    }


    .judul-utama {
      color: #7b4f12;
      font-weight: bold;
    }


    .tombol-tampilkan {
      background-color: #7b4f12;
      border: none;
      color: white;
    }


    .tombol-sembunyikan {
      background-color: #c9a84c;
      border: none;
      color: white;
    }


    .tombol-toggle {
      background-color: #5a8a3c;
      border: none;
      color: white;
    }


    .kepala-modal {
      background-color: #7b4f12;
      color: white;
    }


    .kaki-modal {
      background-color: #f5f0e8;
    }
  </style>
</head>


<body class="latar-halaman">

<div class="container mt-5">


  <h2 class="text-center judul-utama">🏨 Hotel Nusantara Merdeka</h2>
  <p class="text-center">
    Selamat datang Para Pejuang! Berikut informasi kamar yang tersedia pada Hotel Nusantara Merdeka untuk Anda pesan hari ini.
  </p>

  <!-- Tiga tombol untuk kontrol modal penggunaan JavaScript -->
  <div class="text-center mt-4">

    <!-- Tombol untuk show -->
    <button class="btn tombol-tampilkan" id="btnTampilkan"> Informasi Kamar</button>

    <!-- Tombol untuk hide -->
    <button class="btn tombol-sembunyikan" id="btnSembunyikan">Close Informasi</button>

    <!-- Tombol untuk toggle -->
    <button class="btn tombol-toggle" id="btnToggle"> Informasi</button>

  </div>



  <div class="modal fade" id="modalKamar">
    <div class="modal-dialog">
      <div class="modal-content">


        <div class="modal-header kepala-modal">
          <h4 class="modal-title">Informasi Kamar Hotel</h4>

          <button class="close text-white" data-dismiss="modal">&times;</button>
        </div>

        <!-- Bagian isi modal-->
        <div class="modal-body">
          <p><b>Tipe Kamar:</b> Kamar Deluxe</p>
          <p><b>Kapasitas:</b> 2 Orang</p>
          <p><b>Harga:</b> Rp 450.000 / malam</p>
          <p><b>Fasilitas:</b> AC, TV, WiFi, Sarapan Gratis</p>
          <p>
            Tamu yang ingin memesan kamar ini dapat menghubungi resepsionis
            atau melakukan pemesanan langsung melalui sistem reservasi hotel.
          </p>
        </div>

        <!-- Bagian footer modal -->
        <div class="modal-footer kaki-modal">

          <button class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>

      </div>
    </div>
  </div>

</div>
<!-- Script JavaScript untuk mengontrol modal -->
<script>

  $(document).ready(function () {


    $("#btnTampilkan").click(function () {
      $("#modalKamar").modal("show");
    });


    $("#btnSembunyikan").click(function () {
      $("#modalKamar").modal("hide");
    });


    $("#btnToggle").click(function () {
      $("#modalKamar").modal("toggle");
    });

  });
</script>

</body>
</html>
