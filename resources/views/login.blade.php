<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Cek Dong!</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        html, body {
            height: 100%; /* Penting untuk layout flex full height */
        }
        body {
            background-color: #ffffff; /* Background putih */
            display: flex; /* Aktifkan flexbox */
            flex-direction: column; /* Susun elemen secara vertikal */
        }

        .header-container {
            padding-top: 1rem; /* Padding atas untuk header */
            padding-bottom: 1rem;
        }

        /* Kontainer utama dibuat flex-grow agar mendorong footer ke bawah */
        .main-content {
             flex-grow: 1; /* Ambil sisa ruang vertikal */
             display: flex;
             flex-direction: column;
             justify-content: flex-start; /* Mulai konten dari atas */
             padding-top: 1rem; /* Jarak dari header */
             padding-bottom: 2rem; /* Jarak ke footer */
        }

        .form-container {
            width: 100%;
            max-width: 400px; /* Batas lebar maksimum di layar besar */
            margin-left: auto;
            margin-right: auto;
        }

        /* Styling input group */
        .input-group .form-control {
            border-left: 0;
            padding-left: 0.5rem;
        }
        .input-group-text {
            background-color: transparent;
            border-right: 0;
        }
        .form-control.rounded-pill {
            padding-left: 1rem;
        }
        .input-group.rounded-pill .input-group-prepend .input-group-text {
             border-top-left-radius: 50rem;
             border-bottom-left-radius: 50rem;
        }
         .input-group.rounded-pill .form-control {
             border-top-right-radius: 50rem;
             border-bottom-right-radius: 50rem;
         }

        .login-header {
            font-weight: 500;
        }

        .logo-img {
            max-width: 150px;
            height: auto;
            margin-top: 2rem; /* Margin atas logo disesuaikan */
            margin-bottom: 3rem; /* Margin bawah logo disesuaikan */
        }

        /* Style untuk tombol login agar tidak full width */
        .login-button {
            padding-left: 2.5rem; /* Buat sedikit lebih panjang dari teksnya */
            padding-right: 2.5rem;
        }

        /* Blok Abu-abu di bagian bawah */
        .footer-block {
            background-color: #404040; /* Warna abu-abu gelap (sesuaikan jika perlu) */
            height: 8vh; /* Tinggi blok bawah (sekitar 8% tinggi viewport, sesuaikan) */
            width: 100%;
            margin-top: auto; /* Dorong ke bawah jika konten pendek */
        }
    </style>
</head>
<body>

    <div class="container header-container">
        <div class="d-flex align-items-center">
            <a href="#" class="text-dark" style="text-decoration: none;">
                <i class="fas fa-chevron-left mr-2"></i>
            </a>
            <h5 class="mb-0 login-header">Login as User</h5>
        </div>
    </div>

    <main class="container main-content">
        <div class="form-container">
            <img src="logocekdong.png" alt="Cek Dong Logo" class="d-block mx-auto logo-img">

            <form>
                <div class="form-group">
                    <div class="input-group rounded-pill border">
                        <div class="input-group-prepend">
                            <span class="input-group-text border-0 bg-white"><i class="fas fa-user text-muted"></i></span>
                        </div>
                        <input type="text" class="form-control rounded-pill border-0" id="username" placeholder="Username" required>
                    </div>
                </div>

                <div class="form-group">
                     <div class="input-group rounded-pill border">
                        <div class="input-group-prepend">
                            <span class="input-group-text border-0 bg-white"><i class="fas fa-lock text-muted"></i></span>
                        </div>
                        <input type="password" class="form-control rounded-pill border-0" id="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="text-center my-4">
                     <button type="submit" class="btn btn-dark rounded-pill shadow-sm login-button">Login</button>
                </div>
            </form>

            <div class="text-center">
                <a href="#" class="text-muted" style="font-size: 0.9rem;">Forgot Password</a>
            </div>
        </div>
    </main>

    <div class="footer-block"></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>