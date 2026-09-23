@extends('admin_app')

@section('title', $data['title'])

@section('content')
<p>halaman siswa</p>

<div class="main-content">

    <!-- Judul + Button Tambah -->
    <div class="main-title-wrapper">
        <h2 class="main-title">Data Siswa</h2>

        <button class="primary-default-btn" type="button">
            + Tambah Siswa
        </button>
    </div>

    <!-- Tabel -->
    <div class="table-wrapper">
        <table class="users-table full-table">
            <thead>
                <tr class="users-table-info">
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tahun Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($siswa as $index =>$item )
                    
                @empty
                    <tr>
                        <td>Belum ada data guru</td>
                    </tr>
                <tr>
                    <td>{{ $siswa->firstItem() + $index}}</td>
                    <td>{{ $item->nisn }}</td>
                    <td>{{ $item->nama__siswa }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->tahun_masuk}}</td>
                    <td>
                        <button type="button" class="action-btn edit-btn">
                            Edit
                        </button>

                        <button type="button" class="action-btn delete-btn">
                            Hapus
                        </button>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection