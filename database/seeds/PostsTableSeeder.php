<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <4; $i++) {
            DB::table('posts')->insert([
                'title' => "Post ${i}",
                'content' => "unko unko unko unko unko ${i}",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id' => $i,
            ]);
        }
    }
}
