<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            [
                'nip' => '001',
                'nama' => 'Desy Ayurianti',
                'alamat' => 'Jl.aaa Malang',
                'jabatan' => 'Manager',
                'gaji_pokok' => '5500000'
            ], 
            [
                'nip' => '002',
                'nama' => 'Lisa',
                'alamat' => 'Jl.bbb Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
        
            ],
            [
                'nip' => '003',
                'nama' => 'Agung',
                'alamat' => 'Jl.ccc Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
        
            ],
            [
                'nip' => '004',
                'nama' => 'Mawar',
                'alamat' => 'Jl.cc Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
        
            ],
            [
                'nip' => '005',
                'nama' => 'Melati',
                'alamat' => 'Jl.dd Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
        
            ],
            [
                'nip' => '006',
                'nama' => 'Dewi',
                'alamat' => 'Jl.ee Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '3500000'
        
            ],
            [
                'nip' => '007',
                'nama' => 'Ratna ',
                'alamat' => 'Jl.ff Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '3500000'
        
        
            ],
            [
                'nip' => '008',
                'nama' => 'Ica',
                'alamat' => 'Jl.gg Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '3500000'
        
        
            ],
            [
                'nip' => '009',
                'nama' => 'Via',
                'alamat' => 'Jl.hh Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '3500000'
        
        
            ],
            [
                'nip' => '010',
                'nama' => 'Dito',
                'alamat' => 'Jl.ii Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '3500000'
        
        
            ],
            [
                'nip' => '011',
                'nama' => 'Budi',
                'alamat' => 'Jl.jj Malang',
                'jabatan' => 'sales',
                'gaji_pokok' => '3500000'
        
            ],
            [
                'nip' => '012',
                'nama' => 'Rian',
                'alamat' => 'Jl.kk Malang',
                'jabatan' => 'sales',
                'gaji_pokok' => '3500000'
        
            ],
            [
                'nip' => '013',
                'nama' => 'Marni',
                'alamat' => 'Jl.ll Malang',
                'jabatan' => 'sales',
                'gaji_pokok' => '3500000'
        
            ],
            [
                'nip' => '014',
                'nama' => 'Firman',
                'alamat' => 'Jl.mm Malang',
                'jabatan' => 'sales',
                'gaji_pokok' => '3500000'
        
            ],
            [
                'nip' => '015',
                'nama' => 'Nisa',
                'alamat' => 'Jl.nn Malang',
                'jabatan' => 'sales',
                'gaji_pokok' => '3500000'
        
            ],
            [
                'nip' => '016',
                'nama' => 'Slamet',
                'alamat' => 'Jl.oo Malang',
                'jabatan' => 'sales supervisior',
                'gaji_pokok' => '4500000'
        
            ],
            [
                'nip' => '017',
                'nama' => 'Adit',
                'alamat' => 'Jl.pp Malang',
                'jabatan' => 'sales supervisior',
                'gaji_pokok' => '4500000'
        
            ],
            [
                'nip' => '018',
                'nama' => 'Jarwo',
                'alamat' => 'Jl.qq Malang',
                'jabatan' => 'sales supervisior',
                'gaji_pokok' => '4500000'
        
            ],
            [
                'nip' => '019',
                'nama' => 'Slamet',
                'alamat' => 'Jl.rr Malang',
                'jabatan' => 'OB',
                'gaji_pokok' => '1500000'
        
            ],            
            [
                'nip' => '020',
                'nama' => 'Tika',
                'alamat' => 'Jl.ss Malang',
                'jabatan' => 'OB',
                'gaji_pokok' => '1500000'
        
            ],

        ]);
    }
}
