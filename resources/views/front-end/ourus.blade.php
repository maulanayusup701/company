<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang — Kantor Jasa Akuntan Syadlan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Serif+4:wght@400;600;700&family=Epilogue:wght@600;800&family=Inter:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ourus.css') }}">
</head>

<body>

    <div class="page-wrapper">

        @include('front-end.layouts.components.header')

        <!-- ================= BODY ================= -->
        <div class="body-row">

            @include('front-end.layouts.components.sidebar')

            <!-- Content -->
            <main class="content">
                <h2>Tentang Kami</h2>
                <p class="lede">
                    Kantor jasa akuntan yang berdiri di Purwakarta untuk mendampingi pelaku usaha
                    mengelola pembukuan, laporan keuangan, dan kewajiban perpajakan secara profesional.
                </p>

                <!-- ============ PROFIL ============ -->
                <section class="content-section">
                    <div class="profile-grid">
                        <div>
                            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800&q=80"
                                alt="Profil Konsultan Syadlan">
                        </div>
                        <div>
                            <h2>Profil Kami</h2>
                            <p>
                                <strong>Kantor Jasa Akuntan Syadlan</strong> adalah kantor jasa akuntan yang
                                berkedudukan di Purwakarta, Jawa Barat. Kami hadir untuk membantu pelaku usaha —
                                dari UMKM hingga perusahaan — dalam mengelola pembukuan, laporan keuangan,
                                perpajakan, dan konsultasi manajemen secara profesional.
                            </p>
                            <p>
                                Dengan tim yang berpengalaman dan bersertifikat, kami berkomitmen memberikan
                                layanan yang akurat, tepat waktu, dan sesuai standar akuntansi yang berlaku
                                di Indonesia.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- ============ PENDIRI ============ -->
                <section class="content-section section-dark">
                    <div class="profile-grid">
                        <div>
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=800&q=80"
                                alt="Pendiri" style="object-position: top;">
                        </div>
                        <div>
                            <h2>Pendiri</h2>
                            <p
                                style="font-family: 'Source Serif 4', serif; font-size: 19px; color: white; margin-top: 8px;">
                                Syadlan
                            </p>
                            <p>
                                Pendiri Kantor Jasa Akuntan Syadlan, berlatarbelakang akuntan profesional
                                dengan pengalaman mendampingi berbagai skala usaha di Purwakarta dan
                                sekitarnya.
                            </p>
                            <p>
                                Berkomitmen menghadirkan layanan akuntansi yang jujur, transparan, dan
                                berorientasi pada kebutuhan klien.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- ============ PARTNER ============ -->
                <section class="content-section">
                    <h2>Partner</h2>
                    <p style="max-width: 36rem;">
                        Selain pendiri, kantor kami didampingi oleh partner yang memimpin langsung bidang
                        pembukuan, perpajakan, dan konsultasi manajemen — memastikan setiap layanan tetap
                        ditangani oleh tenaga ahli di bidangnya masing-masing.
                    </p>

                    <div class="partner-grid">
                        <div class="partner-card">
                            <img src="https://i.pravatar.cc/150?img=12" alt="Partner 1">
                            <h4>Andi Wijaya</h4>
                            <p class="role">Partner — Perpajakan</p>
                            <p>Menangani perencanaan dan pelaporan pajak korporasi &amp; pribadi.</p>
                        </div>
                        <div class="partner-card">
                            <img src="https://i.pravatar.cc/150?img=32" alt="Partner 2">
                            <h4>Siti Nurhaliza</h4>
                            <p class="role">Partner — Pembukuan</p>
                            <p>Memimpin tim pembukuan untuk klien UMKM dan perusahaan menengah.</p>
                        </div>
                        <div class="partner-card">
                            <img src="https://i.pravatar.cc/150?img=8" alt="Partner 3">
                            <h4>Budi Hartono</h4>
                            <p class="role">Partner — Konsultasi Manajemen</p>
                            <p>Mendampingi klien dalam pengambilan keputusan keuangan strategis.</p>
                        </div>
                        <div class="partner-card">
                            <img src="https://i.pravatar.cc/150?img=45" alt="Partner 4">
                            <h4>Dewi Anggraini</h4>
                            <p class="role">Partner — Audit Internal</p>
                            <p>Memastikan kepatuhan dan tata kelola keuangan klien tetap terjaga.</p>
                        </div>
                    </div>
                </section>

                <!-- ============ NILAI-NILAI ============ -->
                <section class="content-section section-dark">
                    <h2>Nilai yang Kami Pegang</h2>
                    <p style="max-width: 36rem;">
                        Nilai-nilai ini yang menjadi dasar setiap laporan dan konsultasi yang kami berikan
                        kepada klien.
                    </p>

                    <div class="values-grid">
                        <div class="value-card">
                            <h3>Profesional</h3>
                            <p>Setiap pekerjaan ditangani sesuai standar akuntansi dan kode etik profesi yang berlaku.
                            </p>
                        </div>
                        <div class="value-card">
                            <h3>Jujur &amp; Transparan</h3>
                            <p>Kami menjelaskan setiap angka dalam laporan dengan bahasa yang mudah dipahami klien,
                                bukan hanya istilah akuntansi.</p>
                        </div>
                        <div class="value-card">
                            <h3>Berorientasi Klien</h3>
                            <p>Layanan disesuaikan dengan kondisi dan skala usaha masing-masing klien, bukan solusi yang
                                dipukul rata.</p>
                        </div>
                    </div>
                </section>

                <!-- ============ VISI & MISI ============ -->
                <section class="content-section">
                    <div class="visi-misi-grid">
                        <div>
                            <h2>Visi</h2>
                            <p>
                                Menjadi kantor jasa akuntan terpercaya di Purwakarta dan sekitarnya yang
                                membantu pelaku usaha mengelola keuangan bisnis secara profesional,
                                transparan, dan berkelanjutan.
                            </p>
                        </div>
                        <div>
                            <h2>Misi</h2>
                            <ul>
                                <li>Menyediakan layanan pembukuan dan laporan keuangan yang akurat dan tepat waktu.</li>
                                <li>Membantu klien memahami kondisi keuangan bisnisnya dengan bahasa yang mudah
                                    dipahami.</li>
                                <li>Mendampingi klien dalam pemenuhan kewajiban perpajakan sesuai regulasi terbaru.</li>
                                <li>Mengembangkan kompetensi tim secara berkelanjutan melalui pelatihan dan sertifikasi.
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <!-- ============ KENAPA MEMILIH KAMI ============ -->
                <section class="content-section section-dark">
                    <h2>Kenapa Memilih Jasa Kantor Akuntan Kami?</h2>
                    <p style="max-width: 36rem;">
                        Alasan pelaku usaha di Purwakarta mempercayakan pembukuan dan perpajakannya
                        kepada kami.
                    </p>

                    <div class="why-grid">
                        <div class="why-card">
                            <h3>Berizin Resmi</h3>
                            <p>Berizin resmi dari Kementerian Keuangan — kami adalah KJA terdaftar dan berizin resmi,
                                yang menjamin legalitas dan profesionalisme layanan.</p>
                        </div>
                        <div class="why-card">
                            <h3>Berpengalaman &amp; Bersertifikat</h3>
                            <p>Tim kami terdiri dari akuntan yang memiliki sertifikasi seperti Akuntan Profesional
                                (Ak.), Chartered Accountant (CA), ASEAN CPA, dan lainnya.</p>
                        </div>
                        <div class="why-card">
                            <h3>Solusi Praktis</h3>
                            <p>Kami menyediakan solusi yang praktis dan aplikatif, sesuai dengan tantangan bisnis di era
                                saat ini.</p>
                        </div>
                        <div class="why-card">
                            <h3>Layanan Lengkap &amp; Terintegrasi</h3>
                            <p>Meliputi jasa pembukuan, penyusunan laporan keuangan, perpajakan, audit internal, sistem
                                informasi akuntansi, hingga konsultasi manajemen.</p>
                        </div>
                        <div class="why-card">
                            <h3>Pendekatan Personal</h3>
                            <p>Setiap klien kami perlakukan secara personal, dengan fokus pada solusi yang sesuai dengan
                                kondisi usaha masing-masing.</p>
                        </div>
                        <div class="why-card">
                            <h3>Dukungan Teknologi</h3>
                            <p>Kami menggunakan software akuntansi terpercaya serta memberikan pelatihan agar klien
                                dapat mengakses laporan secara real-time.</p>
                        </div>
                    </div>
                </section>

                <!-- ============ LEGALITAS ============ -->
                <section class="content-section">
                    <h2>Legalitas</h2>
                    <p style="max-width: 40rem;">
                        Konsultan Syadlan beroperasi sebagai <strong>Kantor Jasa Akuntansi (KJA)</strong>
                        yang dipimpin oleh akuntan bergelar <strong>Ak., CA</strong>. Seluruh layanan
                        pembukuan, pelaporan keuangan, dan konsultasi perpajakan dikerjakan sesuai standar
                        dan kode etik profesi akuntan yang berlaku di Indonesia.
                    </p>
                </section>

            </main>

        </div>

        @include('front-end.layouts.components.footer')

    </div>

</body>

</html>
