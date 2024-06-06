<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simpulilmu</title>
    <link rel="stylesheet" href="{{ asset('css/bab.css') }}" />
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h1>Simpulilmu</h1>
            <nav>
                <ul>
                    <li>
                    <a href="{{ route('user.jenjang') }}" style="text-decoration: none; color: white;">Jenjang</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <header>
            <form action="{{ route('search') }}" method="GET" style="display: inline;">
                    <input type="text" name="query" class="search-bar" placeholder="Search" />
                    <button type="submit" class="search-button">
                        <svg viewBox="0 0 24 24" width="24" height="24">
                            <circle cx="11" cy="11" r="8" stroke="black" stroke-width="2" fill="none"></circle>
                            <line x1="17" y1="17" x2="21" y2="21" stroke="black" stroke-width="2"></line>
                        </svg>
                    </button>
                </form>
            </header>
            <div class="subjects">
                @foreach ($materi as $m)
                <div class="subject">
                    <a href="{{ route('materi', ['id' => $m->id]) }}">
                        <div class="subject-img"></div>
                    </a>
                    <p>{{ $m->judul_materi }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
