<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MultiplePrices extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'product_id' => ['type' => 'int'],
            'price' => ['type' => 'int'],
            'discount' => ['type' => 'int'],
            'total_price' => ['type' => 'int'],
            'slug' => ['type' => 'varchar', 'constraint' => 255],
            'deleted_at' => ['type' => 'timestamp', 'null' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        // $this->forge->addForeignKey('product_id', 'products', 'id');
        $this->forge->createTable('multiple_prices');
    }

    public function down()
    {
        $this->forge->dropTable('multiple_prices', true);
    }
}
