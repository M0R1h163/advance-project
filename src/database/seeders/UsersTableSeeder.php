<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'test',
            'email' => 'test123@test.jp',
            'email_verified_at' => null,
            'password' => Hash::make('test'),
            'remember_token' => '',
            'created_at' => '2024-8-10 10:35:36',
            'updated_at' => '2024-8-11 10:35:36',
        ];
        DB::table('Users')->insert($param);
        $param = [
            'name' => 'テスト太郎',
            'email' => 'testTaro@test.jp',
            'email_verified_at' => null,
            'password' => Hash::make('taro'),
            'remember_token' => '',
            'created_at' => '2024-8-11 10:35:36',
            'updated_at' => null,
        ];
        DB::table('Users')->insert($param);
        $param = [
            'name' => 'ユーザー',
            'email' => 'user@user.co.jp',
            'email_verified_at' => null,
            'password' => Hash::make('user'),
            'remember_token' => '',
            'created_at' => '2024-8-11 10:35:36',
            'updated_at' => '2024-8-13 10:35:36',
        ];
        DB::table('Users')->insert($param);
    }
}
