<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Guru;
use App\Models\Walas;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Tapel;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            $gurus = [
                [
                    'nama_guru' => 'Bintang Sensei',
                    'id_mapel' => 1,
                ],
                [
                    'nama_guru' => 'Zhaka Sensei',
                    'id_mapel' => 2,
                ],
                [
                    'nama_guru' => 'Fery Sensei',
                    'id_mapel' => 3,
                ],
                [
                    'nama_guru' => 'Salim Sensei',
                    'id_mapel' => 4,
                ],
                [
                    'nama_guru' => 'Aris Sensei',
                    'id_mapel' => 5,
                ],
                [
                    'nama_guru' => 'Syahru Sensei',
                    'id_mapel' => 6,
                ],
                ];

            $mapels = [
                [
                    'nama_mapel' => 'matematika',
                    'kkm' => '75',
                    'level' => 'XI',
                    'id_jurusan' => 1,
                ],
                [
                    'nama_mapel' => 'pbo',
                    'kkm' => '85',
                    'level' => 'XI',
                    'id_jurusan' => 2,
                ],
                [
                    'nama_mapel' => 'pwm',
                    'kkm' => '95',
                    'level' => 'XI',
                    'id_jurusan' => 3,
                ],
                [
                    'nama_mapel' => 'pai',
                    'kkm' => '88',
                    'level' => 'XII',
                    'id_jurusan' => 4,
                ],
                [
                    'nama_mapel' => 'pkn',
                    'kkm' => '76',
                    'level' => 'XI',
                    'id_jurusan' => 5,
                ],
                [
                    'nama_mapel' => 'pkkp',
                    'kkm' => '77',
                    'level' => 'X',
                    'id_jurusan' => 6,
                ],
                ];


            $users = [
                [
                    'id' => 1,
                    'nama_pengguna' => 'RECTY.Exploit',
                    'username' => 'admin',
                    'password' => bcrypt('admin'),
                    'role' => 'admin',
                ],
                [
                    'id' => 2,
                    'nama_pengguna' => 'Zhaka Hidayat Yasir',
                    'username' => 'zhaka',
                    'password' => bcrypt('zhaka'),
                    'role' => 'Siswa',
                ],
                [
                    'id' => 3,
                    'nama_pengguna' => 'Yasir Sensei',
                    'username' => 'yasir',
                    'password' => bcrypt('yasir'),
                    'role' => 'guru',
                ],
                [
                    'id' => 4,
                    'nama_pengguna' => 'zulfaidah',
                    'username' => 'zulfa',
                    'password' => bcrypt('zulfa'),
                    'role' => 'walas',
                ],
                ];



            $siswas = [
                [
                    'nis' => '202-048',
                    'nama' => 'Fery Fadul Rahman',
                    'profile' => 'XI',
                    'id_kelas' => 1,
                    'id_jurusan' => 1,
                    'jk' => 'L',
                    'agama' => 'Islam',
                    'nisn' => 1111111111,
                ],
                ];

                $kelas = [
                    [
                        'nama_kelas' => 'RPL2',
                        'level' => 'XII',
                    ],
                ];

                $jurusans = [
                    [
                        'kode_jurusan' => 'RPL',
                        'nama_jurusan' => 'Rekayasa Perangkat Lunak',
                    ],
                ];


                $tapels = [
                    [
                        'tahun_pelajaran' => '08-09-2023',
                        'semester' => '02',
                        'aktif' => '1'
                    ],
                    [
                        'tahun_pelajaran' => '05-03-2023',
                        'semester' => '05',
                        'aktif' => '0'
                    ],
                ];


                $walas = [
                    [
                       'id_guru' => 1,
                       'id_kelas' => 1
                    ],
                    [
                        'id_guru' => 2,
                        'id_kelas' => 2
                    ],
                    [
                        'id_guru' => 3,
                        'id_kelas' => 3
                    ]
                 ];


                foreach($users as $user){
                    User::create($user);
                }

                foreach($mapels as $mapel){
                    Mapel::create($mapel);
                }

                foreach($gurus as $guru){
                    Guru::create($guru);
                }
                foreach($siswas as $siswa){
                    Siswa::create($siswa);
                }
                foreach($kelas as $kelas){
                    Kelas::create($kelas);
                }
                foreach($jurusans as $jurusan){
                    Jurusan::create($jurusan);
                }
                foreach($tapels as $tapel){
                    Tapel::create($tapel);
                }
                foreach($walas as $walas){
                    Walas::create($walas);
                }
    }
}
