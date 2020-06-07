<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
                'is_admin'=>'1',
               'password'=> bcrypt('admin123'),
            ]
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
