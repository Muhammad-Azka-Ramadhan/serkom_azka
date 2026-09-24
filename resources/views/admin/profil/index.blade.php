@extends('admin_app')

@section('title', $data['title'])

@section('content')
<div class="main-content">
    <!-- Judul Halaman -->
    <div class="main-title-wrapper">
        <h2 class="main-title">Profil Sekolah</h2>
        {{-- @foreach ($profilSekolah as $item)
        <a href="{{ route('admin.profil.edit', $item->id) }}" class="primary-default-btn"></a>
        @endforeach --}}
    </div>
    <!-- Informasi Utama -->
    <div class="white-block school-profile">
        <div class="school-profile-header">
            <!-- Logo Sekolah -->
            <div class="school-logo">
                <img src="{{asset('assets/admin/img/logo.png')}}" alt="Logo Sekolah">
            </div>
            <!-- Data Sekolah -->
            <div class="school-data">
                @foreach ($profilSekolah as $item)
                
                <h3>{{ $item->nama_sekolah }}</h3>
                <div class="school-data-grid">
                    <div class="school-data-item">
                        <span>Kepala Sekolah</span>
                        <strong>{{ $item->kepala_sekolah }}</strong>
                    </div>
                    <div class="school-data-item">
                        <span>NPSN</span>
                        <strong>{{ $item->npsn }}</strong>
                    </div>
                    <div class="school-data-item">
                        <span>Tahun Berdiri</span>
                        <strong>{{ $item->tahun_berdiri }}</strong>
                    </div>
                    <div class="school-data-item">
                        <span>Kontak</span>
                        <strong>{{ $item->kontak }}</strong>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Alamat + Foto -->
    <div class="school-two-column">
        <!-- Alamat -->
        <div class="white-block">
            <h3 class="white-block__title">
                Alamat Sekolah
            </h3>
            <p class="school-text">{{ $item->alamat }}</p>
        </div>
        <!-- Foto Sekolah -->
        <div class="white-block">
            <h3 class="white-block__title">
                Foto Sekolah
            </h3>
            <img src="assets/img/foto-sekolah.jpg"
                 alt="Foto Sekolah"
                 class="school-photo">
        </div>
    </div>
    <!-- Visi & Misi -->
    <div class="white-block">
        <h3 class="white-block__title">
            Visi & Misi
        </h3>
        <p class="school-text">{{ $item->visi_misi }}</p>
    </div>
    <!-- Deskripsi -->
    <div class="white-block">
        <h3 class="white-block__title">
            Deskripsi Sekolah
        </h3>
        <p class="school-text">{{ $item->deskripsi }}</p>
    </div>
</div>
@endsection