<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CarouselDataSeeder extends Seeder
{
    public function run()
    {

        for ($i = 1; $i <= 3; $i++) {
            $data = [
                'carousel_name' => 'Carousel ' . $i,
                'carousel_desc'    => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'carousel_image'    => 'boss_level.jpg',

            ];
            // Using Query Builder - Hanya 1 Data
            $this->db->table('carousel_data')->insert($data);
        }
    }
}
