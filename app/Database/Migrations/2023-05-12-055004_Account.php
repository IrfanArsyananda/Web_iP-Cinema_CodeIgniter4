<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Account extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'admin_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'admin_username' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'admin_password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'admin_avatar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('admin_id', true);
        $this->forge->createTable('admin_data');
    }

    public function down()
    {
        $this->forge->dropTable('admin_data');
    }
}
