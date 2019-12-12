<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'name' => 'Nama Siswa',
            'username' => 'siswa',
            'password' => bcrypt(121212)
        ]);
        DB::table('gurus')->insert([
            'name' => 'Nama Guru',
            'username' => 'guru',
            'password' => bcrypt(121212)
        ]);
    }
}
