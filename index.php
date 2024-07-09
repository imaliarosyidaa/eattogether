<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php include 'partials/navbar.php'; ?>
    <div class="row container p-5">
        <div class="col-md-6">
            <div id="card" class="card p-5">
                <h2>Welcome Back!</h2>
                <p>Enter your Credentials to access your account</p>
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Remember for 30 days</label>
                        </div>
                        <a href="#" class="text-decoration-none">Forgot password?</a>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Signup</button>
                    </div>
                </form>
                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-outline-danger" type="button">Sign in with Google</button>
                    <button class="btn btn-outline-secondary" type="button">Sign in with Apple</button>
                </div>
                <div class="text-center mt-3">
                    <p>Don't have an account? <a href="signup.php" class="text-decoration-none">Sign up</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img width="600px" height="600px" src="images/eating-salad-12 2.png" alt="" srcset="">
        </div>
    </div>
    <div id="about-us" class="p-5">
        <h2 class="py-5 ps-4">EAT TOGETHER</h2>
        <div class="container row">
            <div class="col-4">
                <h3>CABANG SURABAYA</h3>
                <div class="card">
                    <div class="card-body">
                        Kami selalu siap mendengarkan Anda! Untuk pertanyaan lebih lanjut atau informasi mengenai produk kami, silakan hubungi kami:
                        <ul>
                            Alamat: Jl. Melati No. 10, Surabaya, Indonesia
                            Telepon: +62 8226453787
                            WhatsApp: +62 8227777598
                            Email: eattogether@gmail.com
                            Jam Layanan Pelanggan:
                            Senin - Jumat: 08:00 - 20:00
                            Sabtu: 08:00 - 16:00
                            Minggu: Tutup
                            Hubungi kami di media sosial:
                            Facebook: eat.together
                            Instagram: @eat.together
                            Pinterest: @eat.together
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h3>CABANG SEMARANG</h3>
                <div class="card">
                    <div class="card-body">
                        Kami selalu siap mendengarkan Anda! Untuk pertanyaan lebih lanjut atau informasi mengenai produk kami, silakan hubungi kami:
                        <ul>
                            <li>Alamat: Jl. Pahlawan No. 25, Semarang, Indonesia</li>
                            <li>Telepon: +62 8826661110</li>
                            <li>WhatsApp: +62 881234125</li>
                            <li>Email: eattogether@gmail.com</li>
                            <li>Jam Layanan Pelanggan:
                                <ul>
                                    <li>Senin - Jumat: 08:00 - 20:00</li>
                                    <li>Sabtu: 08:00 - 16:00</li>
                                    <li>Minggu: Tutup</li>
                                </ul>
                            </li>
                            <li>Hubungi kami di media sosial:
                                <ul>
                                    <li>Facebook: eat.together</li>
                                    <li>Instagram: @eat.together</li>
                                    <li>Pinterest: @eat.together</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h3>CABANG KUDUS</h3>
                <div class="card">
                    <div class="card-body">
                        Kami selalu siap mendengarkan Anda! Untuk pertanyaan lebih lanjut atau informasi mengenai produk kami, silakan hubungi kami:
                        <ul>
                            <li>Alamat: Jl. Makmur No. 07, Kudus, Indonesia</li>
                            <li>Telepon: +62 812564235</li>
                            <li>WhatsApp: +62 8111889654</li>
                            <li>Email: eattogether@gmail.com</li>
                            <li>Jam Layanan Pelanggan:
                                <ul>
                                    <li>Senin - Jumat: 08:00 - 20:00</li>
                                    <li>Sabtu: 08:00 - 16:00</li>
                                    <li>Minggu: Tutup</li>
                                </ul>
                            </li>
                            <li>Hubungi kami di media sosial:
                                <ul>
                                    <li>Facebook: eat.together</li>
                                    <li>Instagram: @eat.together</li>
                                    <li>Pinterest: @eat.together</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>