<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carousel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'carousel_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'carousel_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'carousel_desc' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'carousel_image' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('carousel_id', true);
        $this->forge->createTable('carousel_data');
    }

    public function down()
    {
        $this->forge->dropTable('carousel_data');
    }
}
