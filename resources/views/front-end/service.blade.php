<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layanan | Kantor Jasa Akuntan Syadlan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@400;600;700&family=Epilogue:wght@600;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
</head>

<body>
    <div class="page-wrapper">
        @include('front-end.layouts.components.header')
        <div class="body-row">
            @include('front-end.layouts.components.sidebar')

            <main class="content">

                <section class="content-section">
                    <h2>Layanan</h2>
                    <p class="lede">
                        Lima bidang layanan yang kami tangani langsung, mulai dari pembukuan harian hingga
                        sistem informasi bisnis, untuk pelaku usaha di Purwakarta.
                    </p>
                </section>

                <section class="content-section">

                    <div class="service-row">
                        <div class="service-img">
                            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&q=80"
                                alt="Pembukuan Harian">
                        </div>
                        <div class="service-text">
                            <span class="service-num">Layanan 01</span>
                            <h3>Pembukuan Harian</h3>
                            <p>Pencatatan transaksi harian usaha Anda, disusun rapi dan siap dijadikan dasar
                                laporan bulanan.</p>
                            <ul>
                                <li>Input transaksi kas, bank, dan piutang/utang</li>
                                <li>Rekonsiliasi bank bulanan</li>
                                <li>Laporan keuangan bulanan siap baca</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-row reverse">
                        <div class="service-img">
                            <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80"
                                alt="Perpajakan">
                        </div>
                        <div class="service-text">
                            <span class="service-num">Layanan 02</span>
                            <h3>Perpajakan</h3>
                            <p>Perencanaan dan pelaporan pajak, dari SPT bulanan hingga tahunan, sesuai
                                regulasi yang berlaku.</p>
                            <ul>
                                <li>Perhitungan PPh dan PPN</li>
                                <li>Pelaporan SPT Masa dan Tahunan</li>
                                <li>Pendampingan saat pemeriksaan pajak</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-row">
                        <div class="service-img">
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80"
                                alt="Konsultasi Manajemen">
                        </div>
                        <div class="service-text">
                            <span class="service-num">Layanan 03</span>
                            <h3>Konsultasi Manajemen</h3>
                            <p>Pendampingan dalam pengambilan keputusan keuangan, dari arus kas hingga rencana
                                ekspansi usaha.</p>
                            <ul>
                                <li>Analisis arus kas dan proyeksi keuangan</li>
                                <li>Evaluasi struktur biaya usaha</li>
                                <li>Pendampingan penyusunan rencana bisnis</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-row reverse">
                        <div class="service-img">
                            <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?w=600&q=80"
                                alt="Audit Internal">
                        </div>
                        <div class="service-text">
                            <span class="service-num">Layanan 04</span>
                            <h3>Audit Internal</h3>
                            <p>Pemeriksaan pembukuan dan proses keuangan internal, untuk memastikan kepatuhan
                                dan tata kelola yang tertib.</p>
                            <ul>
                                <li>Pemeriksaan kepatuhan pencatatan keuangan</li>
                                <li>Identifikasi celah pengendalian internal</li>
                                <li>Rekomendasi perbaikan proses</li>
                            </ul>
                        </div>
                    </div>

                    <div class="service-row">
                        <div class="service-img">
                            <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=600&q=80"
                                alt="Sistem Informasi Akuntansi">
                        </div>
                        <div class="service-text">
                            <span class="service-num">Layanan 05</span>
                            <h3>Sistem Informasi Akuntansi</h3>
                            <p>Pendampingan penerapan software akuntansi, supaya pencatatan dan laporan bisa
                                diakses real-time.</p>
                            <ul>
                                <li>Setup software akuntansi sesuai kebutuhan usaha</li>
                                <li>Pelatihan tim internal klien</li>
                                <li>Pendampingan pasca-implementasi</li>
                            </ul>
                        </div>
                    </div>

                </section>

                <section class="content-section section-dark">
                    <h2>Alur Kerja Sama</h2>
                    <p style="max-width: 34rem;">
                        Prosesnya sederhana, dari konsultasi awal hingga laporan rutin Anda terima setiap
                        bulan.
                    </p>

                    <div class="flow-grid">
                        <div class="flow-card">
                            <span class="flow-step">01</span>
                            <h3>Konsultasi Awal</h3>
                            <p>Diskusi kebutuhan dan kondisi keuangan usaha Anda saat ini.</p>
                        </div>
                        <div class="flow-card">
                            <span class="flow-step">02</span>
                            <h3>Penawaran Layanan</h3>
                            <p>Kami susun paket layanan dan biaya sesuai skala usaha.</p>
                        </div>
                        <div class="flow-card">
                            <span class="flow-step">03</span>
                            <h3>Pengerjaan</h3>
                            <p>Tim kami mulai menangani pembukuan, pajak, atau kebutuhan lain.</p>
                        </div>
                        <div class="flow-card">
                            <span class="flow-step">04</span>
                            <h3>Laporan Rutin</h3>
                            <p>Anda menerima laporan berkala beserta penjelasannya.</p>
                        </div>
                    </div>
                </section>

                <section class="content-section">
                    <h2>Pertanyaan Umum</h2>

                    <div class="accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <h3 class="accordion-header" style="font-size: inherit; margin: 0;">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    Apakah layanan bisa disesuaikan dengan skala usaha kecil?
                                </button>
                            </h3>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Bisa. Kami melayani mulai dari usaha perorangan hingga badan usaha, dengan
                                    paket pembukuan dan pelaporan yang disesuaikan volume transaksi Anda.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" style="font-size: inherit; margin: 0;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    Apakah data keuangan usaha kami aman?
                                </button>
                            </h3>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Kerahasiaan data klien adalah prioritas kami. Setiap dokumen dan laporan
                                    keuangan hanya diakses oleh tim yang menangani akun Anda.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" style="font-size: inherit; margin: 0;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Berapa lama proses onboarding pembukuan?
                                </button>
                            </h3>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Umumnya 1–2 minggu setelah dokumen keuangan awal diserahkan, tergantung
                                    kondisi pembukuan yang sudah ada sebelumnya.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" style="font-size: inherit; margin: 0;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    Apakah bisa hanya menggunakan satu layanan saja, misalnya pajak?
                                </button>
                            </h3>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tentu. Kelima layanan kami dapat diambil secara terpisah maupun sebagai
                                    paket lengkap, sesuai kebutuhan bisnis Anda.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content-section">
                    <h2>Konsultasikan Kebutuhan Anda</h2>
                    <p class="lede">
                        Diskusikan kebutuhan pembukuan dan perpajakan usaha Anda dengan tim kami.
                    </p>
                    <a href="#" class="cta-btn">Konsultasikan Sekarang</a>
                </section>

            </main>
        </div>
        @include('front-end.layouts.components.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
