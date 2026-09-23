<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        siswa::create([
            'nisn'  => '0087922980',
            'nama_siswa' => 'Ahmad Faisal',
            'jenis_kelamin' => 'Laki-laki',
            'tahun_masuk' => '2025'
        ]);
    }
}
