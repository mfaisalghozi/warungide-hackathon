<?php

use Illuminate\Database\Seeder;
// use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        
        DB::table('User')->insert([
            'name' => 'Admin niBos',
            'email' => 'adminnibos@gmail.com',
            'password' => 'admin',
            'phone' => 12345678910,
            'roleid' => 3,
        ]);
        DB::table('User')->insert([
            'name' => 'Creator Ganteng',
            'email' => 'creator99@gmail.com',
            'password' => 'creator',
            'phone' => 88210248911,
            'roleid' => 2,
        ]);
        DB::table('User')->insert([
            'name' => 'Member idaman',
            'email' => 'membermulia@gmail.com',
            'password' => 'member',
            'phone' => 34561234566,
            'roleid' => 1,
        ]);

    	for($i = 1; $i <= 10; $i++){
            DB::table('User')->insert([
                'name' => 'budi irawan',
                'email' => 'budiganteng@gmail.com',
                'password' => 'budisejahteraselalu',
                'phone' => 123123123,
                'roleid' => 2,
            ]);
        }
    }
}
