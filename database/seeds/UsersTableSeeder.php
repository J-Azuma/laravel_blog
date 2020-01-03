<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1,4) as $num) {
            DB::table('users')->insert([
                'name' => "user {$num}",
                'email' => "user{$num}@example.com",
                'password' => bcrypt("user{$num}_password"),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
