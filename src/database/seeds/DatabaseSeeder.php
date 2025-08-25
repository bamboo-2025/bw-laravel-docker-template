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
        $this->call([
            TodoSeeder::class,//コメントアウトしていたのを解除して[]を追加した
        ]);
    }
}
