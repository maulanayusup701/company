<aside class="sidebar">
    @unless (request()->routeIs('article.index'))
        <h6>Artikel</h6>
        <ul>
            <li><a href="{{ route('article.index') }}">Konsep Teknologi Informasi</a></li>
            <li><a href="{{ route('article.index') }}">Tips Pembukuan UMKM</a></li>
            <li><a href="{{ route('article.index') }}">Dst...</a></li>
        </ul>
    @endunless

    <a href="{{ route('event.index') }}" class="{{ request()->routeIs('event.*') ? 'active' : '' }}">
        <i class="bi bi-calendar-event"></i> Event
    </a>
    <a href="{{ route('gallery.index') }}" class="{{ request()->routeIs('gallery.*') ? 'active' : '' }}">
        <i class="bi bi-images"></i> Gallery
    </a>
    <a href="{{ route('klien.index') }}" class="{{ request()->routeIs('klien.*') ? 'active' : '' }}">
        <i class="bi bi-people"></i> Foto Klien Kami
    </a>
    <a href="{{ route('signin') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>

    <div class="sign-group">
        <a href="{{ route('signin') }}">Sign in</a>
        <a href="{{ route('signup') }}" class="sign-up">Sign up</a>
    </div>
</aside>
