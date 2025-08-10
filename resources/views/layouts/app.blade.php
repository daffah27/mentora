<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentora - {{ $title ?? 'Dashboard' }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/compiled/svg/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSJ27u78i4lkPSJdMDBNMFBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vbnMuYWRvYmUuY29tLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogIDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiCiAgICB4bWxuczpneGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIKICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIgogICAgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIgogICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICAgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iCiAgICB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIgogICBleGlmOlBpeGVsWERpbWVuc2lvbj0iMzMiCiAgIGV4aWY6UGl4ZWxZRGltZW5zaW9uPSIzNCIKICAgZXhpZjpDb2xvclNwYWNlPSIxIgogICB0aWZmOkltYWdlV2lkdGg9IjMzIgogICB0aWZmOkltYWdlTGVuZ3RoPSIzNCIKICAgdGlmZjpSZXNvbHV0aW9uVW5pdD0iMiIKICAgdGlmZjpYUmVzb2x1dGlvbj0iOTYuMCIKICAgdGlmZjpZUmVzb2x1dGlvbj0iOTYuMCIKICAgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIKICAgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIgogICB4bXA6TW9kaWZ5RGF0ZT0iMjAyMi0wMy0zMVQxMDo1MDoyMyswMjowMCIKICAgeG1wOk1ldGFkYXRhRGF0ZT0iMjAyMi0wMy0zMVQxMDo1MDoyMyswMjowMCI+CiAgIDx4bXBNTTpIaXN0b3J5PgogICAgPHJkZjpTZXE+CiAgICAgPHJkZjpsaQogICAgICBzdEV2dDphY3Rpb249InByb2R1Y2VkIgogICAgICBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZmZpbml0eSBEZXNpZ25lciAxLjEwLjEiCiAgICAgIHN0RXZ0OndoZW49IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiLz4KICAgIDwvcmRmOlNlcT4KICAgPC94bXBNTTpIaXN0b3J5PgogIDwvcmRmOkRlc2NyaXB0aW9uPgogPC9yZGY6UkRGPgo8L3g6eG1wbWV0YSBwYWNrZXQgZW5kPSJyIj8+VTV7dAAAAYppQ0NDclNHQyBJRUM2MTk2Ni0yLjEAAiSlZJHL0RVFsc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk1m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwNamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl/Az9vj2HERYqPAAAAAElFTkSuQmCC"
        type="image/png">

    <link rel="stylesheet" href="{{ asset('assets/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/compiled/css/app-dark.css') }}">

    <style>
        /* Basic styling for the profile section */
        .sidebar-profile {
            padding: 1.5rem 1.5rem 1rem 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1); /* subtle separator */
            margin-bottom: 1rem; /* Space below the profile section */
        }

        .sidebar-profile img {
            width: 80px; /* Adjust size as needed */
            height: 80px; /* Adjust size as needed */
            border-radius: 50%; /* Makes the image circular */
            object-fit: cover; /* Ensures the image covers the area */
            margin-bottom: 0.5rem;
            border: 2px solid var(--bs-primary); /* A border around the image */
        }

        .sidebar-profile h5 {
            margin-bottom: 0.25rem;
            font-size: 1.1rem;
            color: var(--bs-heading-color);
        }

        .sidebar-profile .btn {
            margin-top: 0.75rem;
            width: 90%; /* Make buttons take more width */
        }

        /* Adjustments for the menu to not clash with the new section */
        .sidebar-menu {
            padding-top: 0; /* Remove top padding if it creates too much space */
        }
    </style>
</head>

<body>
    <script src="{{ asset('assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        <div id="sidebar">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="/dashboard">
                                <img src="{{ asset('assets/compiled/svg/logo.svg') }}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21">
                                <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2"
                                        opacity=".3"></path>
                                    <g transform="translate(-210 -1)">
                                        <path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path>
                                        <circle cx="220.5" cy="11.5" r="4"></circle>
                                        <path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark"
                                    style="cursor: pointer">
                                <label class="form-check-label"></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                aria-hidden="true" role="img" class="iconify iconify--mdi" width="20"
                                height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z">
                                </path>
                            </svg>
                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-profile">
                    <img src="{{ asset('assets/compiled/jpg/1.jpg') }}" alt="Profile Picture">
                    <h5>{{ Auth::user()->name ?? 'Daffah' }}</h5> <a href="/profile" class="btn btn-sm btn-outline-primary mt-2">Lihat Profile</a>

                    {{-- <form action="{{ route('home') }}" method="POST" class="d-inline">
                        @csrf --}}
                        <a href="{{ route('home') }}" class="btn btn-sm btn-danger mt-2">Logout</a>
                    {{-- </form> --}}



                    </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item {{ request()->is('dashboard') ? 'active' : '' }}">
                            <a href="/dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub {{ request()->is('course/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Course Belajar</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item {{ request()->is('course/katalog') ? 'active' : '' }}">
                                    <a href="/course/katalog" class="submenu-link">
                                        <i class="bi bi-book-half"></i> Katalog Kursus
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('course/modul') || request()->is('course/modul/*') ? 'active' : '' }}">
                                    <a href="/course/modul" class="submenu-link">
                                        <i class="bi bi-journal-code"></i> Modul Belajar
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('course/ai-insight') ? 'active' : '' }}">
                                    <a href="/course/ai-insight" class="submenu-link">
                                        <i class="bi bi-robot"></i> AI Insight
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('course/sertifikat-badge') ? 'active' : '' }}">
                                    <a href="/course/sertifikat-badge" class="submenu-link">
                                        <i class="bi bi-patch-check"></i> Sertifikat & Badge
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub {{ request()->is('simulasi-usaha/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-lightbulb"></i>
                                <span>Simulasi Usaha</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item {{ request()->is('simulasi-usaha/studi-kasus') ? 'active' : '' }}">
                                    <a href="/simulasi-usaha/studi-kasus" class="submenu-link">
                                        <i class="bi bi-lightbulb"></i> Studi Kasus & Tantangan
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('simulasi-usaha/komunikasi') ? 'active' : '' }}">
                                    <a href="/simulasi-usaha/komunikasi" class="submenu-link">
                                        <i class="bi bi-chat-dots"></i> Komunikasi & Kolaborasi
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('simulasi-usaha/board-proyek') ? 'active' : '' }}">
                                    <a href="/simulasi-usaha/board-proyek" class="submenu-link">
                                        <i class="bi bi-kanban"></i> Board Proyek Simulasi
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('simulasi-usaha/presentasi-akhir') ? 'active' : '' }}">
                                    <a href="/simulasi-usaha/presentasi-akhir" class="submenu-link">
                                        <i class="bi bi-easel"></i> Presentasi Akhir
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub {{ request()->is('digitalisasi-usaha/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-cpu"></i>
                                <span>Digitalisasi Usaha</span>
                            </a>
                            <ul class="submenu">
                                  <li class="submenu-item {{ request()->is('digitalisasi-usaha/digital-roadmap-builder') ? 'active' : '' }}">
                                    <a href="/digitalisasi-usaha/digital-roadmap-builder" class="submenu-link">
                                        <i class="bi bi-diagram-3"></i> Digital Roadmap Builder (AI)
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('digitalisasi-usaha/ai-digital-diagnostic-tool') ? 'active' : '' }}">
                                    <a href="/digitalisasi-usaha/ai-digital-diagnostic-tool" class="submenu-link">
                                        <i class="bi bi-cpu"></i> AI Digital Diagnostic Tool
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('digitalisasi-usaha/find-your-talent') ? 'active' : '' }}">
                                    <a href="/digitalisasi-usaha/find-your-talent" class="submenu-link">
                                        <i class="bi bi-person-badge"></i> Find Your Talent
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub {{ request()->is('digital-internship/*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-shuffle"></i>
                                <span>Digital Internship</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item {{ request()->is('digital-internship/matching-ai') ? 'active' : '' }}">
                                    <a href="/digital-internship/matching-ai" class="submenu-link">
                                        <i class="bi bi-shuffle"></i> Matching AI
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('digital-internship/your-internship') ? 'active' : '' }}">
                                    <a href="/digital-internship/your-internship" class="submenu-link">
                                        <i class="bi bi-briefcase"></i> Your Internship
                                    </a>
                                </li>
                                <li class="submenu-item {{ request()->is('digital-internship/evaluasi-sertifikat') ? 'active' : '' }}">
                                    <a href="/digital-internship/evaluasi-sertifikat" class="submenu-link">
                                        <i class="bi bi-award"></i> Evaluasi & Sertifikat Magang
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>{{ $title }}</h3>
                            <p class="text-muted">{{ $subtitle }}</p>
                        </div>
                    </div>
                </div>
                <section class="section">
                    @yield('content')
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted text-center">
                    <p>2025 &copy; Mentora</p>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/compiled/js/app.js') }}"></script>
</body>

</html>
