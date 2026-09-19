<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN Bojongsari | @yield('title')</title>
      <link rel="shortcut icon" href="{{asset('assets/admin/img/svg/logo.svg')}}" type="image/x-icon">
      <link rel="stylesheet" href="{{asset('assets/admin/css/style.min.css')}}">
</head>
<body>
    <div class="page-flex">
        <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <a href="/" class="logo-wrapper" title="Home">
                    <span class="sr-only">Home</span>
                    <span class="icon logo" aria-hidden="true"></span>
                    <div class="logo-text">
                        <span class="logo-title">SDN Bojongsari</span>
                        <span class="logo-subtitle">Dashboard</span>
                    </div>
                </a>
                {{-- <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle" aria-hidden="true"></span>
                </button> --}}
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.siswa') }}" class="nav-link {{ request()->routeIs('admin.siswa') ? 'active' : '' }}">Kelola Siswa</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.guru') }}" class="nav-link {{ request()->routeIs('admin.guru') ? 'active' : '' }}">Kelola Guru</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.galeri') }}" class="nav-link {{ request()->routeIs('admin.galeri') ? 'active' : '' }}">Galeri</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.berita') }}" class="nav-link {{ request()->routeIs('admin.berita') ? 'active' : '' }}">Berita</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.eskul') }}" class="nav-link {{ request()->routeIs('admin.eskul') ? 'active' : '' }}">Ekstrakurikuler</a>
                    </li>
                    <li>
                      <a href="{{ route('admin.profil') }}" class="nav-link {{ request()->routeIs('admin.profil') ? 'active' : '' }}">Profil Sekolah</a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>

    @yield('content')
    </div>
    
</body>
</html>