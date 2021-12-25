<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'bold' : 'text-secondary'}}" href="/">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Vaccine') ? 'bold' : 'text-secondary'}}" href="/vaccine">VACCINE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Patient') ? 'bold' : 'text-secondary'}}" href="/patient">PATIENT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>