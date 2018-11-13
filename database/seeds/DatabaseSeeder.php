<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insertGetId(
            [
                'first_name' => 'Иван',
                'second_name' => 'Иванов',
                'last_name' => 'Иванович',
                'email' => 'test1@gmail.com',
                'phone' => '+79788888888',
                'city' => 'Севастополь',
                'school' => 'Школа№4',
                'class' => '10',
                'password' => Hash::make('123456'),
            ]
        );
    }
}
