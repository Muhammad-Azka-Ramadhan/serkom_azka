<?php

namespace Database\Seeders;

use App\Models\profil_sekolah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilsekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        profil_sekolah::create([
            'nama_sekolah' => 'SMPN 1 Padakembang',
            'kepala_sekolah' => 'Dr. H Ade Dasmana M.Si',
            'logo' => 'logo.jpg',
            'npsn' => '0889888888',
            'alamat' => 'Jl. Cisinga Desa Cisaruni, Kecamatan Padakembang',
            'kontak' => '0898888989',
            'visi_misi' => 'menciptakan smpn 1 padakembang yang harmonis',
            'tahun_berdiri' => '1987',
            'deskripsi' => 'SMPN 1 Padakembang merupakan sekolah yang
            berkomitmen memberikan pendidikan berkualitas
            serta mengembangkan potensi peserta didik
            dalam bidang akademik maupun nonakademik.'
        ]);
    }
}
