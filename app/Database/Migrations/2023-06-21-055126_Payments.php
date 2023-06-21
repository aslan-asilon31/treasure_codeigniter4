<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Payments extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'product_id' => ['type' => 'int'],
            'order_id' => ['type' => 'int'],
            'payment_code' => ['type' => 'int'],
            'name' => ['type' => 'varchar', 'constraint' => 255],
            'price' => ['type' => 'int'],
            'discount' => ['type' => 'int'],
            'total_price' => ['type' => 'int'],
            'quantity' => ['type' => 'int'],
            'amount' => ['type' => 'int'],
            'payment_method' => ['type' => 'varchar', 'constraint' => 255],
            'slug' => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        // $this->forge->addForeignKey('product_id', 'products', 'id');
        $this->forge->addForeignKey('order_id', 'orders', 'id');
        $this->forge->createTable('payments');
    }

    public function down()
    {
        $this->forge->dropTable('payments', true);
    }
}
