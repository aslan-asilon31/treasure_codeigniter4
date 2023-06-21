<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Members extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'name' => ['type' => 'varchar', 'constraint' => 255],
            'password' => ['type' => 'varchar', 'constraint' => 255],
            'image' => ['type' => 'varchar', 'constraint' => 255],
            'wishlist' => ['type' => 'varchar', 'constraint' => 255],
            'email' => ['type' => 'varchar', 'constraint' => 255],
            'shipping_address' => ['type' => 'varchar', 'constraint' => 255],
            'member_type' => ['type' => 'varchar', 'constraint' => 255],
            'slug' => ['type' => 'varchar', 'constraint' => 255],
            'deleted_at' => ['type' => 'timestamp', 'null' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        $this->forge->createTable('members');
    }

    public function down()
    {
        $this->forge->dropTable('members', true);
    }
}
