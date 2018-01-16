<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TweetsTableSeeder::class);
        $this->call(SeguidoresTableSeeder::class);
        $this->call(UsersConversationsTableSeeder::class);
    }
}
