<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="https://pengumuman.fostiums.org/images/icons/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Pengumuman OPREC FOSTI UMS</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/fresh-bootstrap-table.css" rel="stylesheet" />
    <link href="css/demo.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>

    <script src="js/demo/gsdk-switch.js"></script>
    <script src="js/demo/jquery.sharrre.js"></script>
    <script src="js/demo/demo.js"></script>

</head>

<body>
    @if(session()->has('qualified'))
    <section class="login">
        <div class="login_box">
            <div class="solo">
                <h1><b>Congratulation!!!</b></h1>
                <h2 class="solo-qual-h2">{{ $peserta->nama }}</h2>
                <h2>{{ $peserta->nim }}</h2>
                <h2>{{ $peserta->prodi }}</h2>
                <h3 class="solo-qual-h3">Selamat Bergabung Di Keluarga Besar Forum Open Source
                    Teknik Informatika
                </h3>
                <h3>Untuk Informasi Lebih Lanjut Nantinya Akan di Masukkan Ke Dalam Grup</h3>
                <h2 class="solo-qual-h2">Ganbatte Kudasai!!</h2>
            </div>
        </div>
    </section>
    @endif

    @if(session()->has('notQualified'))
    <section class="login">
        <div class="login_box">
            <div class="solo">
                <h1><b>Mohon Maaf Kamu Belum Diterima</b></h1>
                <h2 class="solo-noqual-h2">{{ $peserta->nama }}</h2>
                <h2>{{ $peserta->nim }}</h2>
                <h2>{{ $peserta->prodi }}</h2>
                <h3 class="solo-noqual-h3">Jangan Patah Semangat, Jangan Menyerah</h3>
                <h3>Mungkin Semester Depan Kita Bisa Bersama-sama di FOSTI UMS</h3>
                <h3>Terima Kasih Telah Berpartisipasi Di Open Recruitment FOSTI UMS</h3>
                <h2 class="solo-noqual-h2">Ganbatte!!</h2>
            </div>
        </div>
    </section>
    @endif

    @if(session()->has('error'))
    <section class="login">
        <div class="login_box">
            <div class="solo">
                <h1><b>Mohon Maaf NIM Tidak Terdaftar</b></h1>
                <h3 class="solo-error-h3">Mungkin Kesalahan NIM atau Besar Kecil Huruf</h3>
                <h3>Bisa Di Coba Kembali Ya</h3>
                <h3>Terima Kasih</h3>
                <h2 class="solo-error-h2">FOSTI 2022</h2>
            </div>
        </div>
    </section>
    @endif
</body>

</html>