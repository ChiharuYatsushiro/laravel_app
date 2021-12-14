<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            [
                'content' => '開発環境を構築する',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'content' => 'Laravelをインストールする',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
