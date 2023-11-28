<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Maps extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nid' => [
                'type'           => 'INT',
                'constraint'     => 11
            ],
            'parent_nid' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'serial' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'type' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'latitude' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'longitude' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('nid', true);
        // $this->forge->addForeignKey('admin_id', 'admin_data', 'admin_id', 'RESTRICT', 'RESTRICT');
        $this->forge->createTable('maps_geo');
        // gives CONSTRAINT `my_fk_name` FOREIGN KEY(`users_id`) REFERENCES `users`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
    }

    public function down()
    {
        $this->forge->dropTable('maps_geo');
    }
}
