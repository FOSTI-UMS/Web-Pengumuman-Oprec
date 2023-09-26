<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Pengumuman OPREC FOSTI UMS</title>

  <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/fresh-bootstrap-table.css" rel="stylesheet" />
  <!-- <link href="css/demo.css" rel="stylesheet" /> -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
  <script src="js/demo/gsdk-switch.js"></script>
  <script src="js/demo/jquery.sharrre.js"></script>
  <script src="js/demo/demo.js"></script>
</head>

<body>
  <section class="login">
    <div class="login_box">
      <div class="left">
        <div class="contact">
          <form action="{{ route('search') }}" method="POST">
            @csrf
            <img src="img/logo.png" width="200px" class="logo">
            <h3><b>NIM</b></h3>
            <input type="text" name="nim" placeholder="Masukkan NIM disini" required>
            <button class="submit">Cek</button>
          </form>
        </div>
      </div>
      <div class="right">
        <img src="img/foss.png" width="300px" class="center padding-top-img">
      </div>
    </div>
  </section>
</body>

</html>