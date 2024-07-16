{{-- <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Comics</span>
    </a>

    <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link">Home Page</a></li>
        <li class="nav-item"><a href="{{ route('comics.index') }}" class="nav-link dark">Comics</a></li>
        <li class="nav-item"><a href="{{ route('comics.index') }}" class="nav-link">Comics</a></li>
        <li class="nav-item"><a href="{{ route('comics.index') }}" class="nav-link">Comics</a></li>
        <li class="nav-item"><a href="{{ route('comics.index') }}" class="nav-link">Comics</a></li>

        <a href="{{ route('comics.index') }}" class="nav-link text-white">
            Torna alla home
        </a>  --}}
{{-- </ul>
{{-- </header> --}}

<header>
    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="{{ route('home') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
                <span class="fs-4">Comics Dc</span>
            </a>

            <ul class="nav nav-pills">
                {{-- <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li> --}}
                <li class="nav-item"><a href="/" class="nav-link text-dark">Home</a></li>
                <li class="nav-item"><a href="{{ route('comics.index') }}" class="nav-link text-dark"> Lista dei Fumetti
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('comics.create') }}" class="nav-link text-dark">
                        Crea il tuo fumetto
                    </a>
                </li>

            </ul>
        </header>
    </div>
</header>
