<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TELUTIZEN
        DB::table('users')->insert([
            'nama' => 'Muhammad Ayyub Ramli',
            'nim' => 1202201296,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Laki - laki',
            'email' => 'ayyub@student.telkomuniversity.ac.id',
            'password' => bcrypt('ayyub'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Ivan Setiawan',
            'nim' => 1202200173,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Laki - laki',
            'email' => 'ivan@student.telkomuniversity.ac.id',
            'password' => bcrypt('ivan'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Dimas Pahlevi',
            'nim' => 1202200327,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Laki - laki',
            'email' => 'dimas@student.telkomuniversity.ac.id',
            'password' => bcrypt('dimas'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Maya Angelia Br Surbakti',
            'nim' => 1202200150,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Perempuan',
            'email' => 'maya@student.telkomuniversity.ac.id',
            'password' => bcrypt('maya'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Muhammad Habibi Akmal',
            'nim' => 1202204284,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Laki - laki',
            'email' => 'habibi@student.telkomuniversity.ac.id',
            'password' => bcrypt('habibi'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Ramya Anindita',
            'nim' => 1202204223,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Perempuan',
            'email' => 'ramya@student.telkomuniversity.ac.id',
            'password' => bcrypt('ramya'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'MAPEKA',
            'email' => 'MAPEKA@ukm.Maranatha.edu',
            'password' => bcrypt('MAPEKA'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Legal Drafting FH UKM',
            'email' => 'LD.FH.Maranatha@ukm.Maranatha.edu',
            'password' => bcrypt('LD-FH-UKM'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)]);
            
        DB::table('users')->insert([
            'nama' => 'MCU Choir',
            'email' => 'MCU.Choir@ukm.Maranatha.edu',
            'password' => bcrypt('MCU Choir'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)]);

        DB::table('users')->insert([
            'nama' => 'MCU Photography Club',
            'email' => 'MCU.Photography@ukm.Maranatha.edu',
            'password' => bcrypt('MCU Photography'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)]);

        DB::table('users')->insert([
            'nama' => 'MCU Diving Club',
            'email' => 'Diving@ukm.Maranatha.edu',
            'password' => bcrypt('MCU Diving'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)]);
    
        DB::table('users')->insert([
                'nama' => 'AIESEC',
                'email' => 'AIESEC@ukm.Maranatha.edu',
                'password' => bcrypt('AIESEC'),
                'role' => 'ukm',
                'remember_token' =>  Str::random(60)]);

        DB::table('users')->insert([
            'nama' => 'Anugrah Bagas',
            'nim' => 1202200124,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Laki - laki',
            'email' => 'bagas@student.telkomuniversity.ac.id',
            'password' => bcrypt('bagas'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Yudas Iskariot',
            'nim' => 1202200000,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Laki - laki',
            'email' => 'yudas@student.telkomuniversity.ac.id',
            'password' => bcrypt('yudas'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Ponti Pilatus',
            'nim' => 1202200002,
            'jurusan' => 'S1 Teknik Nuklir',
            'jk' => 'Laki - laki',
            'email' => 'Pilatus@student.telkomuniversity.ac.id',
            'password' => bcrypt('pilatus'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Herodes',
            'nim' => 1202200012,
            'jurusan' => 'S1 Teknik Kimia',
            'jk' => 'Laki - laki',
            'email' => 'herodes@student.telkomuniversity.ac.id',
            'password' => bcrypt('herodes'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Yakobus',
            'nim' => 1202200312,
            'jurusan' => 'S1 Teknik Fisika',
            'jk' => 'Laki - laki',
            'email' => 'Yakobus@student.telkomuniversity.ac.id',
            'password' => bcrypt('yakobus'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'Simon',
            'nim' => 1202201312,
            'jurusan' => 'S1 Teknik Geofisika',
            'jk' => 'Laki - laki',
            'email' => 'Simon@student.telkomuniversity.ac.id',
            'password' => bcrypt('simon'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Maria',
            'nim' => 120220312,
            'jurusan' => 'S1 Teknik Fisika',
            'jk' => 'Perempuan',
            'email' => 'Maria@student.telkomuniversity.ac.id',
            'password' => bcrypt('maria'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Bartomoleus',
            'nim' => 1202253312,
            'jurusan' => 'S1 Teknik Logistik',
            'jk' => 'Laki - laki',
            'email' => 'Bartomoleus@student.telkomuniversity.ac.id',
            'password' => bcrypt('bartomoleus'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Filipus',
            'nim' => 1202200412,
            'jurusan' => 'S1 Fakultas Hukum',
            'jk' => 'Laki - laki',
            'email' => 'Filipus@student.telkomuniversity.ac.id',
            'password' => bcrypt('Filipus'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Thomas',
            'nim' => 1202205412,
            'jurusan' => 'S1 Fakultas Kedokteran',
            'jk' => 'Laki - laki',
            'email' => 'Thomas@student.telkomuniversity.ac.id',
            'password' => bcrypt('thomas'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Nur Afni',
            'nim' => 1202200177,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Perempuan',
            'email' => 'afni@student.telkomuniversity.ac.id',
            'password' => bcrypt('afni'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Amanda Aurelie',
            'nim' => 1202201129,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Perempuan',
            'email' => 'manda@student.telkomuniversity.ac.id',
            'password' => bcrypt('manda'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Ni putu Diah Putri Utami',
            'nim' => 1202200062,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Perempuan',
            'email' => 'diah@student.telkomuniversity.ac.id',
            'password' => bcrypt('diah'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Andi Aswan',
            'nim' => 1202200062,
            'jurusan' => 'S1 Sistem Informasi',
            'jk' => 'Perempuan',
            'email' => 'aswan@student.telkomuniversity.ac.id',
            'password' => bcrypt('aswan'),
            'role' => 'mahasiswa',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'ASTACALA',
            'email' => 'astacala@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('astacala'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'KBMS',
            'email' => 'kbms@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('kbms'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);
        
        DB::table('users')->insert([
            'nama' => 'IMABEST',
            'email' => 'imabest@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('imabest'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'KBSU',
            'email' => 'kbsu@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('kbsu'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'pmi',
            'email' => 'pmi@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('pmi'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'kmk',
            'email' => 'kmk@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('kmk'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Nippon',
            'email' => 'nippon@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('nippon'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'BTS',
            'email' => 'bts@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('bts'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'UKMBali',
            'email' => 'ukmbali@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('UKMBali'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);

        DB::table('users')->insert([
            'nama' => 'Al-Fath',
            'email' => 'alfath@ukm.telkomuniversity.ac.id',
            'password' => bcrypt('Alfath'),
            'role' => 'ukm',
            'remember_token' =>  Str::random(60)
        ]);
        DB::table('users')->insert([
            'nama' => 'General Admin',
            'email' => 'generaladmin@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'general admin',
            'remember_token' =>  Str::random(60)
        ]);

    }
}
