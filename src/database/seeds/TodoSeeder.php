<?php

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()//runメソッドの中にテストデータを投入していく
    {
        DB::table('todos')->truncate(); // 追記　該当のテーブルのレコードをすべて削除する（シーダーの実行により、開発者間のテストデータに差異が生じないようにするため、元々テーブルに存在していたデータを削除後、テストデータを投入する必要がある）

        $testData = [
        [
            'content' => 'PHP Appセクションを終える',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'content' => 'Laravel Lessonを終える',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];

    DB::table('todos')->insert($testData); // 追記
    }
}
