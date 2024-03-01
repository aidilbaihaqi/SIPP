<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin SIPP',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123')
        ]);

        \App\Models\Gugatan::create([
            'nomor_perkara' => '01/Pdt.P/GGT/2023/PN Nga',
            'klasifikasi_perkara' => 'Perceraian',
            'penggugat' => 'Udin Markocop',
            'kuasahukum_penggugat' => 'Mr. xxx',
            'tergugat' => 'Aliyah Markencit',
            'kuasahukum_tergugat' => 'Mrs.yyy',
            'status_perkara' => 'belum selesai',
            'lama_proses' => '2 hari',
            'tanggal_sidang' => '2023-05-10',
            'jam' => '09:00:00 s/d Selesai',
            'agenda' => 'Sidang Pertama',
            'ruangan' => 'Ruang Sidang Cakra II',
            'hasil_sidang' => 'Udin dan Aliyah belum bercerai secara sah'
        ]);

        \App\Models\Gugatan::create([
            'nomor_perkara' => '02/Pdt.P/GGT/2023/PN Nga',
            'klasifikasi_perkara' => 'Perceraian',
            'penggugat' => 'Udin Markocop',
            'kuasahukum_penggugat' => 'Mr. xxx',
            'tergugat' => 'Aliyah Markencit',
            'kuasahukum_tergugat' => 'Mrs.yyy',
            'status_perkara' => 'selesai',
            'lama_proses' => '2 hari',
            'tanggal_sidang' => '2023-05-10',
            'jam' => '09:00:00 s/d Selesai',
            'agenda' => 'Sidang Pertama',
            'ruangan' => 'Ruang Sidang Cakra II',
            'hasil_sidang' => 'Udin dan Aliyah bercerai secara sah'
        ]);

        \App\Models\Permohonan::create([
            'nomor_perkara' => '01/Pdt.P/PMH/2023/PN Nga',
            'klasifikasi_perkara' => 'Permohonan Ganti Nama',
            'pemohon' => 'Aril Haviezhan',
            'kuasahukum_pemohon' => '',
            'termohon' => '',
            'kuasahukum_termohon' => '',
            'status_perkara' => 'belum selesai',
            'lama_proses' => '1 hari',
            'tanggal_sidang' => '2023-05-14',
            'jam' => '09:00:00 s/d Selesai',
            'agenda' => 'Sidang Pertama',
            'ruangan' => 'Ruang Sidang Cakra I',
            'hasil_sidang' => 'nama belum dapat diganti'
        ]);

        \App\Models\Permohonan::create([
            'nomor_perkara' => '02/Pdt.P/PMH/2023/PN Nga',
            'klasifikasi_perkara' => 'Permohonan Ganti Nama',
            'pemohon' => 'Aril Haviezhan',
            'kuasahukum_pemohon' => '',
            'termohon' => '',
            'kuasahukum_termohon' => '',
            'status_perkara' => 'selesai',
            'lama_proses' => '1 hari',
            'tanggal_sidang' => '2023-05-14',
            'jam' => '09:00:00 s/d Selesai',
            'agenda' => 'Sidang Pertama',
            'ruangan' => 'Ruang Sidang Cakra I',
            'hasil_sidang' => 'nama sudah terganti menjadi aril gans'
        ]);
    }
}
