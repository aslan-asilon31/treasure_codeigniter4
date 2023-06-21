<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'prod_transactions_id' => ['type' => 'int'],
            'barcode' => ['type' => 'varchar', 'constraint' => 255],
            'invoice_code' => ['type' => 'varchar', 'constraint' => 255],
            'cust_name' => ['type' => 'varchar', 'constraint' => 255],
            'cust_email' => ['type' => 'varchar', 'constraint' => 255],
            'cust_phone' => ['type' => 'varchar', 'constraint' => 255],
            'cust_address' => ['type' => 'text'],
            'cust_type' => ['type' => 'varchar', 'constraint' => 255],
            'total_price' => ['type' => 'decimal', 'constraint' => '10,2'],
            'payment_method' => ['type' => 'varchar', 'constraint' => 255],
            'slug' => ['type' => 'varchar', 'constraint' => 255],
            'deleted_at' => ['type' => 'timestamp', 'null' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions', true);
    }
}
