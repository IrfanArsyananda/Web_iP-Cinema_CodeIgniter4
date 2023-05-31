<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class admin_dataSeeder extends Seeder
{
    public function run()
    {
        // $data = [
        //     [
        //         'admin_username' => 'Peter',
        //         'admin_password'    => 'peter',
        //         'admin_avatar'    => 'default-avatar-image.png',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ],
        //     [
        //         'admin_username' => 'Quill',
        //         'admin_password'    => 'quill',
        //         'admin_avatar'    => 'default-avatar-image.png',
        //         'created_at'    => Time::now(),
        //         'updated_at'    => Time::now(),
        //     ]
        // ];

        $faker = \Faker\Factory::create('id_ID');
        for ($i = 1; $i <= 100; $i++) {
            $data = [
                'admin_username' => $faker->userName(),
                'admin_password'    => $faker->password(),
                'admin_avatar'    => 'default-avatar-image.png',
                'created_at'    => Time::createFromTimestamp($faker->unixTime()),
                'updated_at'    => Time::now(),

            ];

            // Using Query Builder - Hanya 1 Data
            $this->db->table('admin_data')->insert($data);
        }
        // Simple Queries
        // $this->db->query('INSERT INTO admin_data (admin_username, admin_password, admin_avatar, created_at, updated_at) 
        // VALUES(:username:, :password:, :avatar:, :created:, :updated:)', $data);


        // $this->db->table('admin_data')->insertBatch($data);
    }
}
