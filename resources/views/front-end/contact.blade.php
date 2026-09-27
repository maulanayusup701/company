@extends('front-end.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
@endpush
@section('content')
    <main class="content">
        <section class="content-section" style="padding-top: 0;">
            <h2>Kontak Kami</h2>
            <p class="lede">
                Ada pertanyaan seputar pembukuan, perpajakan, atau layanan lainnya?
                Tim kami siap membantu — hubungi lewat form di bawah atau kontak langsung.
            </p>
            <div class="contact-grid">
                <!-- Kolom Info -->
                <div class="contact-info">
                    <ul class="info-list">
                        <li class="info-item">
                            <div class="icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <h4>Alamat</h4>
                                <p>Jl. Contoh Raya No. 12, Purwakarta, Jawa Barat 41111</p>
                            </div>
                        </li>
                        <li class="info-item">
                            <div class="icon"><i class="bi bi-telephone-fill"></i></div>
                            <div>
                                <h4>Telepon</h4>
                                <p>(0264) 123-4567</p>
                            </div>
                        </li>
                        <li class="info-item">
                            <div class="icon"><i class="bi bi-whatsapp"></i></div>
                            <div>
                                <h4>WhatsApp</h4>
                                <p>0812-3456-7890</p>
                            </div>
                        </li>
                        <li class="info-item">
                            <div class="icon"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <h4>Email</h4>
                                <p>halo@akuntansyadlan.id</p>
                            </div>
                        </li>
                        <li class="info-item">
                            <div class="icon"><i class="bi bi-clock-fill"></i></div>
                            <div>
                                <h4>Jam Operasional</h4>
                                <p>Senin – Jumat, 08.00 – 17.00 WIB</p>
                            </div>
                        </li>
                    </ul>

                    <div class="social-row">
                        <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <!-- Kolom Form -->
                <div class="contact-form">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="nama@email.com"
                                    required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="subject">Subjek</label>
                            <input type="text" class="form-control" id="subject" placeholder="Perihal pesan Anda"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="message">Pesan</label>
                            <textarea class="form-control" id="message" rows="5"
                                placeholder="Tulis pertanyaan atau kebutuhan Anda di sini..." required></textarea>
                        </div>

                        <button type="submit" class="btn-send">Kirim Pesan</button>
                    </form>
                </div>

            </div>
        </section>

        <!-- ============ LOKASI ============ -->
        <section class="content-section section-dark">
            <h2>Lokasi Kami</h2>
            <p style="max-width: 36rem;">
                Kunjungi kantor kami langsung di Purwakarta untuk konsultasi tatap muka.
            </p>

            <div class="map-wrap">
                <iframe src="https://maps.google.com/maps?q=Purwakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" allowfullscreen
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    title="Lokasi Kantor Jasa Akuntan Syadlan"></iframe>
            </div>
        </section>

    </main>
@endsection
