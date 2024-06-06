<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Simpulilmu</title>
        <link rel="stylesheet" href="{{ asset('css/materi.css') }}" />
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
                    <input
                        type="text"
                        class="search-bar"
                        placeholder="Search"
                    />
                    <button class="search-button">
                        <svg viewBox="0 0 24 24" width="24" height="24">
                            <circle
                                cx="11"
                                cy="11"
                                r="8"
                                stroke="black"
                                stroke-width="2"
                                fill="none"
                            ></circle>
                            <line
                                x1="17"
                                y1="17"
                                x2="21"
                                y2="21"
                                stroke="black"
                                stroke-width="2"
                            ></line>
                        </svg>
                    </button>
                </header>
                <div class="subjects">
                    <p>
                    {{ $materi->isi_materi }}
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
