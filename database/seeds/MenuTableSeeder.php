<?php

use App\Menu;
use App\User;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //插入数据
        factory(Menu::class, 30)->create();

        $user = User::find(1); //插入完后，找到 id 为 1 的用户
        $user->name = "han"; //设置 用户名
        $user->email = "admin@admin.com"; //设置 邮箱
        $user->password = bcrypt('admin'); //设置 密码
        $user->save(); //保存
    }
}
