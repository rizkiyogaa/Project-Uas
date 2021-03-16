<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Super Admin',
            'username' => 'admin',
            'email' => 'admin@restoran.id',
            'email_verified_at' => Carbon::now(),
            'role_id' => 1,
            'password' => bcrypt('admin'),
        ]);
    }
}
