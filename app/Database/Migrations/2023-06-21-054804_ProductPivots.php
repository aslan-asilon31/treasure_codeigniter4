<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductPivots extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'category_id' => ['type' => 'int'],
            'product_id' => ['type' => 'int'], // Make sure the data type matches the 'id' column in the 'products' table
            'order_id' => ['type' => 'int'],
            'member_id' => ['type' => 'int'],
            'review_id' => ['type' => 'int'],
            'transaction_id' => ['type' => 'int'],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE'); // Make sure the foreign key reference is correct
        // $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE'); // Make sure the foreign key reference is correct
        $this->forge->addForeignKey('order_id', 'orders', 'id'); // Make sure the foreign key reference is correct
        $this->forge->addForeignKey('member_id', 'members', 'id'); // Make sure the foreign key reference is correct
        $this->forge->addForeignKey('review_id', 'reviews', 'id'); // Make sure the foreign key reference is correct
        $this->forge->addForeignKey('transaction_id', 'transactions', 'id'); // Make sure the foreign key reference is correct
        // Add other foreign key constraints for other tables
        $this->forge->createTable('product_pivots');
    }

    public function down()
    {
        $this->forge->dropTable('product_pivots', true);
    }
}
