<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand fs-3 fw-bold" href="/">CRUD APP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="/">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/home') ? 'active' : '' }}" aria-current="page"
                        href="/home">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
