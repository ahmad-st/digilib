<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TableUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'fullname' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'userlevel' => [
                'type'       => 'INT',
                'constraint' => 5,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'created' => [
                'type'       => 'DATETIME',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
