<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Guru;
use App\Models\Mapel;
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
                    'nama_mapel' => 'PBO',
                    'kkm' => '85',
                    'level' => 'XI',
                    'id_jurusan' => 2,
                ],
                [
                    'nama_mapel' => 'PWM',
                    'kkm' => '95',
                    'level' => 'XI',
                    'id_jurusan' => 3,
                ],
                [
                    'nama_mapel' => 'PAI',
                    'kkm' => '88',
                    'level' => 'XII',
                    'id_jurusan' => 4,
                ],
                [
                    'nama_mapel' => 'PKN',
                    'kkm' => '76',
                    'level' => 'XI',
                    'id_jurusan' => 5,
                ],
                [
                    'nama_mapel' => 'PKKP',
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

                foreach($users as $user){
                    User::create($user);
                }

                foreach($mapels as $mapel){
                    Mapel::create($mapel);
                }

                foreach($gurus as $guru){
                    Guru::create($guru);
                }
    }
}
