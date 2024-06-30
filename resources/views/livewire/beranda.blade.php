<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        console.log(csrfToken);
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PEMROGRAMAN WEB LANJUT</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .borderbox {
            border: 1px solid #000;
            padding: 20px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mt-5">NAMA ANGGOTA</h2>
              
        <div class="row">
            <div class="col-md-6">
                <div class="borderbox border-primary">
                    <h2>Informasi Diri</h2>
                    <p>Nama Lengkap : ARVILANTI DEVANI </p>
                    <p>NIM : 22104410075 </p>
                    <p>Jurusan : TEKNIK INFORMATIKA </p>
                    <p>Semester : 4</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="borderbox border-primary">
                    <h2>Informasi Diri</h2>
                    <p>Nama Lengkap : HANIK HATUL HALIMAH </p>
                    <p>NIM : 22104410101</p>
                    <p>Jurusan : TEKNIK INFORMATIKA</p>
                    <p>Semester : 4</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="borderbox border-primary">
                    <h2>Informasi Diri</h2>
                    <p>Nama Lengkap : NUR CINDY INTAN FANDERELLA</p>
                    <p>NIM : 22104410098</p>
                    <p>Jurusan : TEKNIK INFORMATIKA</p>
                    <p>Semester : 4</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="borderbox border-primary">
                    <h2>Informasi Diri</h2>
                    <p>Nama Lengkap : WASI'ATUL JANNAH </p>
                    <p>NIM : 22104410121</p>
                    <p>Jurusan : TEKNIK INFORMATIKA</p>
                    <p>Semester : 4</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="borderbox border-primary">
                    <h2>Informasi Diri</h2>
                    <p>Nama Lengkap : EKA FARDINAL HERGITARESTU</p>
                    <p>NIM : 22104410119</p>
                    <p>Jurusan : TEKNIK INFORMATIKA</p>
                    <p>Semester : 4</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="borderbox border-primary">
                <h2>Token CSRF yang Sedang Aktif</h2>
                <p>{{ csrf_token() }}</p>
            </div>
        </div>

      
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var message = "{{ Session::get('pass-key') }}";
            if (message && message.length > 0) {
                alert(message);
            }
        });
    </script>  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
