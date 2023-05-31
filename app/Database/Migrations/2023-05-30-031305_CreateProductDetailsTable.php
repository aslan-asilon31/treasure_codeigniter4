<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductDetailsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'sold' => [
                'type' => 'INT',
                'constraint' => 100,
            ],
            'shipping' => [
                'type' => 'Varchar',
                'constraint' => 15,
            ],
            'size' => [
                'type' => 'varchar',
                'constraint' => 100,
            ],
            'rating' => [
                'type' => 'int',
                'constraint' => 100,
            ],
            'wishlist' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'description' => [
                'type' => 'text',
                'constraint' => 100,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
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

        $this->forge->addKey('id', true);
        $this->forge->createTable('product_details');
    }

    public function down()
    {
        $this->forge->dropTable('product_details');
    }
}
