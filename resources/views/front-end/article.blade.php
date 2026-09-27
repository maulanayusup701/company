@extends('front-end.layouts.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/article.css') }}">
@endpush
@section('content')
    <main class="content">
        <h2>Artikel</h2>
        <p class="lede">
            Tulisan seputar pembukuan, perpajakan, dan pengelolaan keuangan usaha, ditulis tim
            Kantor Jasa Akuntan Syadlan untuk membantu pelaku usaha di Purwakarta.
        </p>

        <div class="article-grid">

            <article class="article-card featured">
                <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&q=80"
                    alt="Tips Pembukuan Sederhana untuk UMKM">
                <div class="article-body">
                    <span class="article-tag">UMKM</span>
                    <h3>Tips Pembukuan Sederhana untuk UMKM</h3>
                    <p>
                        Panduan mencatat kas masuk dan keluar, memisahkan uang usaha dari uang
                        pribadi, dan menyusun laporan bulanan tanpa perlu latar belakang akuntansi.
                    </p>
                    <div class="article-meta">
                        <span>18 Sep 2026 · 5 menit baca</span>
                        <a href="#" class="readmore">Baca Selengkapnya →</a>
                    </div>
                </div>
            </article>

            <article class="article-card">
                <img src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=600&q=80"
                    alt="Konsep Teknologi Informasi dalam Akuntansi">
                <div class="article-body">
                    <span class="article-tag">Teknologi</span>
                    <h3>Konsep Teknologi Informasi dalam Akuntansi</h3>
                    <p>
                        Bagaimana software akuntansi membantu pencatatan real-time dan mengurangi
                        kesalahan input dibanding pembukuan manual.
                    </p>
                    <div class="article-meta">
                        <span>5 Sep 2026</span>
                        <a href="#" class="readmore">Baca →</a>
                    </div>
                </div>
            </article>

            <article class="article-card">
                <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&q=80"
                    alt="Kewajiban Pajak Tahunan bagi Usaha Kecil">
                <div class="article-body">
                    <span class="article-tag">Pajak</span>
                    <h3>Kewajiban Pajak Tahunan bagi Usaha Kecil</h3>
                    <p>
                        Jenis pajak yang wajib dilaporkan pelaku usaha kecil, batas waktu pelaporan,
                        dan cara menghindari denda keterlambatan.
                    </p>
                    <div class="article-meta">
                        <span>29 Agu 2026</span>
                        <a href="#" class="readmore">Baca →</a>
                    </div>
                </div>
            </article>

            <article class="article-card">
                <img src="https://images.unsplash.com/photo-1554774853-b415df9eeb92?w=600&q=80"
                    alt="Perbedaan Kas dan Akrual">
                <div class="article-body">
                    <span class="article-tag">Pembukuan</span>
                    <h3>Kas vs Akrual: Mana yang Cocok untuk Usaha Anda?</h3>
                    <p>
                        Perbedaan dua metode pencatatan ini dan dampaknya pada laporan laba rugi
                        usaha kecil dan menengah.
                    </p>
                    <div class="article-meta">
                        <span>20 Agu 2026</span>
                        <a href="#" class="readmore">Baca →</a>
                    </div>
                </div>
            </article>

            <article class="article-card">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&q=80"
                    alt="Regulasi Pajak Terbaru">
                <div class="article-body">
                    <span class="article-tag">Regulasi</span>
                    <h3>Rangkuman Perubahan Regulasi Pajak Terbaru</h3>
                    <p>
                        Poin-poin perubahan aturan pajak yang perlu diketahui pemilik usaha agar
                        tetap patuh.
                    </p>
                    <div class="article-meta">
                        <span>10 Agu 2026</span>
                        <a href="#" class="readmore">Baca →</a>
                    </div>
                </div>
            </article>

            <article class="article-card">
                <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?w=600&q=80"
                    alt="Menyusun Anggaran Usaha">
                <div class="article-body">
                    <span class="article-tag">UMKM</span>
                    <h3>Menyusun Anggaran Usaha untuk Tahun Depan</h3>
                    <p>
                        Langkah menyusun anggaran dari data penjualan dan pengeluaran tahun
                        berjalan, bukan sekadar tebakan.
                    </p>
                    <div class="article-meta">
                        <span>2 Agu 2026</span>
                        <a href="#" class="readmore">Baca →</a>
                    </div>
                </div>
            </article>

        </div>

        <div class="pagination-row">
            <a href="#"><i class="bi bi-chevron-left"></i></a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#"><i class="bi bi-chevron-right"></i></a>
        </div>
    </main>
@endsection
