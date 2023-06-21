<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductTransactions extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'transaction_id' => ['type' => 'int'],
            'prod_name' => ['type' => 'varchar', 'constraint' => 255],
            'prod_code' => ['type' => 'varchar', 'constraint' => 255],
            'prod_price' => ['type' => 'int'],
            'prod_amount' => ['type' => 'int'],
            'prod_images' => ['type' => 'varchar', 'constraint' => 255],
            'total_price' => ['type' => 'int'],
            'slug' => ['type' => 'varchar', 'constraint' => 255],
            'deleted_at' => ['type' => 'timestamp', 'null' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        $this->forge->addForeignKey('transaction_id', 'transactions', 'id');
        $this->forge->createTable('product_transactions');
    }

    public function down()
    {
        $this->forge->dropTable('product_transactions', true);
    }
}
