<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\MapsModel;

class MapsDataSeeder extends Seeder
{
    public function run()
    {
        $csvFile = fopen("data/daftar-nama-daerah.csv", "r");
        // It will automatically read file from /public/data folder.

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                $object = new MapsModel;
                $object->insert([
                    "nid" => $data[0],
                    "parent_nid" => $data[1],
                    "name" => $data[2],
                    "serial" => $data[3],
                    "type" => $data[4],
                    "latitude" => $data[5],
                    "longitude" => $data[6],
                    "status" => $data[7]
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
