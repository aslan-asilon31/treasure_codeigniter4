<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'number' => ['type' => 'varchar', 'constraint' => 16],
            'total_price' => ['type' => 'decimal', 'constraint' => '10,2'],
            'payment_status' => ['type' => 'ENUM("1", "2", "3", "4")', 'default' => '1'],
            'snap_token' => ['type' => 'varchar', 'constraint' => 36],
            'slug' => ['type' => 'varchar', 'constraint' => 360],
            'deleted_at' => ['type' => 'timestamp', 'null' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('orders');
    }

    public function down()
    {
        $this->forge->dropTable('orders', true);
    }
}
