<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateIdentitasAndUsersTable extends Migration
{
    public function up()
    {
        // Create 'identitas' table
        $this->forge->addField([
            'npm' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'primary' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->createTable('identitas');

        // Create 'users' table
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'pass' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'level' => [
                'type' => 'INT',
            ],
            'npm' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'null' => true,
            ],
        ]);
        $this->forge->addForeignKey('npm', 'identitas', 'npm', 'SET NULL', 'CASCADE');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropForeignKey('users', 'users_npm_foreign');
        $this->forge->dropTable('users');
        $this->forge->dropTable('identitas');
    }
}
