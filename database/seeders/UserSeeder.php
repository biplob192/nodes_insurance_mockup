<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $users = [
        //     [
        //         'name' => 'MD BIPLOB MIA',
        //         'email' => 'admin@gmail.com',
        //         'phone' => '01725361208',
        //         'password' => bcrypt('password'),
        //         'user_type' => 1,
        //     ],
        //     [
        //         'name' => 'MASUD RANA',
        //         'email' => 'employee@gmail.com',
        //         'phone' => '01930384220',
        //         'password' => bcrypt('password'),
        //         'user_type' => 2,
        //     ]
        // ];

        // foreach ($users as $user) {
        //     User::create($user);
        // }

        $user = [
            'name' => 'MD BIPLOB MIA',
            'email' => 'admin@gmail.com',
            'phone' => '01725361208',
            'password' => bcrypt('password'),
            'user_type' => 1,
        ];

        User::create($user);

        $user = User::find(1);
        $user->assignRole('admin');
    }
}
