<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
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
        DB::table('users')->insert([

            //admin
            [
                'name'=>'Nguyễn Văn Quyết',
                'email'=>"admin1@gmail.com",
                'password'=>bcrypt(11111111),
                'role'=>1,
                 'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'name'=>'Nguyễn Việt Hoàng ',
                'email'=>"admin2@gmail.com",
                'password'=>bcrypt(11111111),
                'role'=>1,
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'name'=>'Nguyễn Anh  Đức',
                'email'=>"admin3@gmail.com",
                'password'=>bcrypt(11111111),
                'role'=>1,
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'name'=>'Nguyễn Thanh Tùng',
                'email'=>"admin4@gmail.com",
                'password'=>bcrypt(11111111),
                'role'=>1,
                'created_at' =>Carbon::now()->addDays(1)
            ],

            //user
            [
                'name'=>'Nguyễn Văn A',
                'email'=>"user1@gmail.com",
                'password'=>bcrypt(11111111),
                'role'=>0,
                'created_at' =>Carbon::now()->addDays(1)
            ],
            [
                'name'=>'Nguyễn Thị B',
                'email'=>"user2@gmail.com",
                'password'=>bcrypt(11111111),
                'role'=>0,
                'created_at' =>Carbon::now()->addDays(1)
            ],


        ]);
    }
}
