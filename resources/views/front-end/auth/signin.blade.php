<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Kantor Jasa Akuntan Syadlan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@400;600;700&family=Epilogue:wght@600;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>

<body>

    <div class="page-wrapper">

        <div class="sticky-top-group">
            @include('front-end.layouts.components.header')
        </div>

        <div class="body-row">
            @include('front-end.layouts.components.sidebar')

            <main class="content">
                <div class="auth-wrap">
                    <div class="auth-card">
                        <h2>Masuk</h2>
                        <p class="sub">Masuk untuk mengakses laporan dan layanan Anda.</p>

                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="nama@email.com"
                                    required>
                            </div>

                            <div class="mb-2">
                                <label class="form-label" for="password">Kata Sandi</label>
                                <div class="password-field">
                                    <input type="password" class="form-control" id="password" placeholder="••••••••"
                                        required>
                                    <button type="button" class="toggle-eye" aria-label="Tampilkan kata sandi"
                                        onclick="const p=document.getElementById('password'); p.type = p.type==='password' ? 'text' : 'password'; this.querySelector('i').classList.toggle('bi-eye'); this.querySelector('i').classList.toggle('bi-eye-slash');">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label" for="remember">Ingat saya</label>
                                </div>
                                <a href="#" class="link-brass" style="font-size: 12.5px;">Lupa kata sandi?</a>
                            </div>

                            <button type="submit" class="btn-login">Masuk</button>
                        </form>

                        <div class="divider">atau</div>

                        <button type="button" class="btn-google">
                            <i class="bi bi-google"></i> Masuk dengan Google
                        </button>

                        <p class="signup-note">
                            Belum punya akun? <a href="register.html" class="link-brass">Daftar</a>
                        </p>
                    </div>
                </div>
            </main>
        </div>

        @include('front-end.layouts.components.footer')

    </div>

</body>

</html>
