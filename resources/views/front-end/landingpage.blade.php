@extends('front-end.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/landingpage.css') }}">
@endpush
@section('content')
    <main class="content">

        <!-- ============ HERO ============ -->
        <section class="content-section hero-section" style="padding-top: 0;">
            <div class="hero-grid">
                <div>
                    <span class="hero-eyebrow">Kantor Jasa Akuntan Terpercaya</span>
                    <h1 class="hero-title">Kelola Pembukuan &amp; Pajak Usaha Anda dengan Tenang</h1>
                    <p class="hero-lede">
                        Kantor Jasa Akuntan Syadlan mendampingi pelaku usaha di Purwakarta mengelola
                        pembukuan, laporan keuangan, dan kewajiban perpajakan secara profesional,
                        akurat, dan tepat waktu.
                    </p>
                    <div class="hero-cta-row">
                        <a href="{{ route('contact.index') }}" class="cta-btn">Konsultasikan Sekarang</a>
                        <a href="{{ route('service.index') }}" class="cta-btn-outline">Lihat Layanan</a>
                    </div>
                </div>
                <div class="hero-img">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=80"
                        alt="Kantor Jasa Akuntan Syadlan">
                </div>
            </div>
        </section>

        <!-- ============ LAYANAN SINGKAT ============ -->
        <section class="content-section">
            <h2>Layanan Kami</h2>
            <p class="lede">
                Lima bidang layanan yang kami tangani langsung, dari pembukuan harian hingga sistem
                informasi akuntansi.
            </p>

            <div class="landing-service-grid">
                <a href="{{ route('service.index') }}" class="landing-service-card">
                    <i class="bi bi-journal-text"></i>
                    <h3>Pembukuan Harian</h3>
                    <p>Pencatatan transaksi rapi, siap dijadikan dasar laporan bulanan.</p>
                </a>
                <a href="{{ route('service.index') }}" class="landing-service-card">
                    <i class="bi bi-receipt"></i>
                    <h3>Perpajakan</h3>
                    <p>Perencanaan dan pelaporan pajak sesuai regulasi yang berlaku.</p>
                </a>
                <a href="{{ route('service.index') }}" class="landing-service-card">
                    <i class="bi bi-graph-up-arrow"></i>
                    <h3>Konsultasi Manajemen</h3>
                    <p>Pendampingan pengambilan keputusan keuangan usaha Anda.</p>
                </a>
                <a href="{{ route('service.index') }}" class="landing-service-card">
                    <i class="bi bi-clipboard-check"></i>
                    <h3>Audit Internal</h3>
                    <p>Pemeriksaan kepatuhan dan tata kelola keuangan yang tertib.</p>
                </a>
            </div>
        </section>

        <!-- ============ KENAPA MEMILIH KAMI ============ -->
        <section class="content-section section-dark">
            <h2>Kenapa Memilih Kami?</h2>
            <p style="max-width: 36rem;">
                Alasan pelaku usaha di Purwakarta mempercayakan pembukuan dan perpajakannya
                kepada kami.
            </p>

            <div class="why-grid">
                <div class="why-card">
                    <h3>Berizin Resmi</h3>
                    <p>Terdaftar sebagai KJA dan berizin resmi dari Kementerian Keuangan.</p>
                </div>
                <div class="why-card">
                    <h3>Berpengalaman &amp; Bersertifikat</h3>
                    <p>Tim kami memiliki sertifikasi Ak., CA, ASEAN CPA, dan lainnya.</p>
                </div>
                <div class="why-card">
                    <h3>Layanan Lengkap</h3>
                    <p>Pembukuan, pajak, audit internal, hingga konsultasi manajemen.</p>
                </div>
                <div class="why-card">
                    <h3>Pendekatan Personal</h3>
                    <p>Setiap klien kami tangani sesuai kondisi usahanya masing-masing.</p>
                </div>
            </div>
        </section>

        <!-- ============ ARTIKEL TERBARU ============ -->
        <section class="content-section">
            <h2>Artikel Terbaru</h2>
            <p class="lede">
                Tulisan seputar pembukuan, perpajakan, dan pengelolaan keuangan usaha.
            </p>

            <div class="landing-article-grid">
                <a href="{{ route('article.index') }}" class="landing-article-card">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&q=80"
                        alt="Tips Pembukuan Sederhana untuk UMKM">
                    <div>
                        <h3>Tips Pembukuan Sederhana untuk UMKM</h3>
                        <span>Baca selengkapnya →</span>
                    </div>
                </a>
                <a href="{{ route('article.index') }}" class="landing-article-card">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80"
                        alt="Kewajiban Pajak Tahunan bagi Usaha Kecil">
                    <div>
                        <h3>Kewajiban Pajak Tahunan bagi Usaha Kecil</h3>
                        <span>Baca selengkapnya →</span>
                    </div>
                </a>
                <a href="{{ route('article.index') }}" class="landing-article-card">
                    <img src="https://images.unsplash.com/photo-1554774853-b415df9eeb92?w=600&q=80" alt="Kas vs Akrual">
                    <div>
                        <h3>Kas vs Akrual: Mana yang Cocok untuk Usaha Anda?</h3>
                        <span>Baca selengkapnya →</span>
                    </div>
                </a>
            </div>
        </section>

        <!-- ============ CTA PENUTUP ============ -->
        <section class="content-section">
            <h2>Konsultasikan Kebutuhan Anda</h2>
            <p class="lede">
                Diskusikan kebutuhan pembukuan dan perpajakan usaha Anda dengan tim kami.
            </p>
            <a href="{{ route('contact.index') }}" class="cta-btn">Konsultasikan Sekarang</a>
        </section>

    </main>
@endsection
