<div class="sticky-top-group">

    <header class="page-header">
        <div>
            <div class="logo-box">
                <span class="dot dot-1"></span>
                <span class="dot dot-2"></span>
                <span class="dot dot-3"></span>
                <span class="dot dot-4"></span>
                <i class="bi bi-calculator-fill"></i>
            </div>
            <div class="logo-label">Logo</div>
        </div>
        <div>
            <h1 class="company-name">Kantor Jasa Akuntan Syadlan</h1>
            <p class="company-tag">Jasa Akuntansi &amp; Perpajakan Profesional, Purwakarta</p>
        </div>
    </header>

    <nav class="main-nav">
        <a href="{{ route('landingpage') }}" class="{{ request()->routeIs('landingpage') ? 'active' : '' }}">Home</a>
        <a href="{{ route('service.index') }}" class="{{ request()->routeIs('service.*') ? 'active' : '' }}">Service</a>
        <a href="{{ route('article.index') }}" class="{{ request()->routeIs('article.*') ? 'active' : '' }}">Artikel</a>
        <a href="{{ route('contact.index') }}" class="{{ request()->routeIs('contact.*') ? 'active' : '' }}">Kontak</a>
        <a href="{{ route('ourus.index') }}" class="{{ request()->routeIs('ourus.*') ? 'active' : '' }}">Tentang
            Kami</a>
    </nav>

</div>
