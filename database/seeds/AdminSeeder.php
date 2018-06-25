<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "dap134@yandex.ru",
            'password' => Hash::make("Totv12ka"),
        ]);
    }
}
