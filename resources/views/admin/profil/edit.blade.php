@extends('admin_app')

@section()
<div class="main-content">

    <!-- Header -->
    <div class="main-title-wrapper">
        <div>
            <h2 class="main-title">Edit Profil Sekolah</h2>
            <p class="page-subtitle">
                Perbarui informasi dan identitas sekolah
            </p>
        </div>
    </div>


    <!-- Data Utama -->
    <div class="white-block profile-form-card">

        <div class="form-section-header">
            <div>
                <h3>Informasi Utama</h3>
                <p>Informasi dasar sekolah</p>
            </div>
        </div>

        <div class="form-grid">

            <div class="form-group">
                <label for="nama_sekolah">
                    Nama Sekolah
                </label>

                <input
                    type="text"
                    id="nama_sekolah"
                    name="nama_sekolah"
                    value="SMPN 1 Padakembang"
                    placeholder="Masukkan nama sekolah"
                >
            </div>


            <div class="form-group">
                <label for="kepala_sekolah">
                    Kepala Sekolah
                </label>

                <input
                    type="text"
                    id="kepala_sekolah"
                    name="kepala_sekolah"
                    value="Nama Kepala Sekolah"
                    placeholder="Masukkan nama kepala sekolah"
                >
            </div>


            <div class="form-group">
                <label for="npsn">
                    NPSN
                </label>

                <input
                    type="text"
                    id="npsn"
                    name="npsn"
                    value="20212345"
                    placeholder="Masukkan NPSN"
                >
            </div>


            <div class="form-group">
                <label for="tahun_berdiri">
                    Tahun Berdiri
                </label>

                <input
                    type="number"
                    id="tahun_berdiri"
                    name="tahun_berdiri"
                    value="1985"
                    placeholder="Masukkan tahun berdiri"
                >
            </div>


            <div class="form-group">
                <label for="kontak">
                    Kontak
                </label>

                <input
                    type="text"
                    id="kontak"
                    name="kontak"
                    value="081234567890"
                    placeholder="Masukkan nomor kontak"
                >
            </div>


            <div class="form-group">
                <label for="alamat">
                    Alamat
                </label>

                <textarea
                    id="alamat"
                    name="alamat"
                    rows="4"
                    placeholder="Masukkan alamat sekolah"
                >Jl. Raya Padakembang No. 123, Kecamatan Padakembang, Kabupaten Tasikmalaya, Jawa Barat.</textarea>
            </div>

        </div>

    </div>


    <!-- Logo & Foto -->
    <div class="school-form-media-grid">

        <!-- Logo -->
        <div class="white-block profile-form-card">

            <div class="form-section-header">
                <div>
                    <h3>Logo Sekolah</h3>
                    <p>Ganti logo sekolah</p>
                </div>
            </div>

            <div class="image-upload-box">

                <div class="image-preview logo-preview">
                    <img
                        src="assets/img/logo-sekolah.png"
                        alt="Logo Sekolah"
                    >
                </div>

                <div class="image-upload-content">

                    <label
                        for="logo"
                        class="upload-button"
                    >
                        Pilih Logo
                    </label>

                    <input
                        type="file"
                        id="logo"
                        name="logo"
                        accept="image/*"
                    >

                    <span>
                        Format JPG, PNG atau WEBP
                    </span>

                </div>

            </div>

        </div>


        <!-- Foto -->
        <div class="white-block profile-form-card">

            <div class="form-section-header">
                <div>
                    <h3>Foto Sekolah</h3>
                    <p>Ganti foto sekolah</p>
                </div>
            </div>

            <div class="image-upload-box">

                <div class="image-preview school-photo-preview">
                    <img
                        src="assets/img/foto-sekolah.jpg"
                        alt="Foto Sekolah"
                    >
                </div>

                <div class="image-upload-content">

                    <label
                        for="foto"
                        class="upload-button"
                    >
                        Pilih Foto
                    </label>

                    <input
                        type="file"
                        id="foto"
                        name="foto"
                        accept="image/*"
                    >

                    <span>
                        Format JPG, PNG atau WEBP
                    </span>

                </div>

            </div>

        </div>

    </div>


    <!-- Visi & Misi -->
    <div class="white-block profile-form-card">

        <div class="form-section-header">
            <div>
                <h3>Visi & Misi</h3>
                <p>Visi dan misi sekolah</p>
            </div>
        </div>

        <div class="form-group">

            <label for="visi_misi">
                Visi & Misi
            </label>

            <textarea
                id="visi_misi"
                name="visi_misi"
                rows="7"
                placeholder="Masukkan visi dan misi sekolah"
            >Terwujudnya peserta didik yang beriman, berkarakter, berprestasi, dan mampu menghadapi perkembangan zaman.

Menyelenggarakan pendidikan yang berkualitas, mengembangkan potensi peserta didik, serta membentuk karakter yang baik.</textarea>

        </div>

    </div>


    <!-- Deskripsi -->
    <div class="white-block profile-form-card">

        <div class="form-section-header">
            <div>
                <h3>Deskripsi Sekolah</h3>
                <p>Deskripsi singkat mengenai sekolah</p>
            </div>
        </div>

        <div class="form-group">

            <label for="deskripsi">
                Deskripsi
            </label>

            <textarea
                id="deskripsi"
                name="deskripsi"
                rows="7"
                placeholder="Masukkan deskripsi sekolah"
            >SMPN 1 Padakembang merupakan sekolah yang berkomitmen memberikan pendidikan berkualitas serta mengembangkan potensi peserta didik dalam bidang akademik maupun nonakademik.</textarea>

        </div>

    </div>


    <!-- Tombol -->
    <div class="form-action">

        <button
            type="button"
            class="secondary-btn"
        >
            Batal
        </button>

        <button
            type="submit"
            class="primary-default-btn"
        >
            Simpan Perubahan
        </button>

    </div>

</div>
@endsection