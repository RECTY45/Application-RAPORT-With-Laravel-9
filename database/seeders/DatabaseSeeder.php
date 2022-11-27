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
                ]
                ];

            $mapels = [
                [
                    'nama_mapel' => 'matematika',
                    'kkm' => '75',
                    'level' => 'XI',
                    'id_jurusan' => 1,
                ]
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
