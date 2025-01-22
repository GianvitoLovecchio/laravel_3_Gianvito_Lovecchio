
<nav class="navbar navbar-expand-lg bg-info bg-gradient">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'homepage') fw-bold active text-primary-emphasis fs-5 @endif" aria-current="page" href="{{ Route('homepage') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'articoli') fw-bold active text-primary-emphasis fs-5 @endif" aria-current="page" href="{{ Route('articoli') }}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Route::currentRouteName() == 'contatti') fw-bold active text-primary-emphasis fs-5 @endif" aria-current="page" href="{{ Route('contatti') }}">Contattaci</a>
                </li>
            </ul>

        </div>
    </nav>
