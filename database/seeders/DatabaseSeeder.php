<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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

        User::create(
            [
                'id' => 1,
                'nama_pengguna' => 'RECTY.Exploit',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 'admin',
    
            ]);

            User::create(
                [
                    'id' => 2,
                    'nama_pengguna' => 'Zhaka Hidayat Yasir',
                    'username' => 'zhaka',
                    'password' => bcrypt('zhaka'),
                    'role' => 'Siswa',
        
                ]);

            User::create(
                [
                    'id' => 3,
                    'nama_pengguna' => 'Yasir Sensei',
                    'username' => 'yasir',
                    'password' => bcrypt('yasir'),
                    'role' => 'guru',
        
                ]);

            User::create(
                [
                    'id' => 4,
                    'nama_pengguna' => 'zulfaidah',
                    'username' => 'zulfa',
                    'password' => bcrypt('zulfa'),
                    'role' => 'walas',
        
                ]);
    }
}
