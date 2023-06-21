<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProductImages extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'product_id' => ['type' => 'int'],
            'image' => ['type' => 'varchar', 'constraint' => 255],
            'title' => ['type' => 'varchar', 'constraint' => 255],
            'color' => ['type' => 'varchar', 'constraint' => 255],
            'description' => ['type' => 'text'],
            'slug' => ['type' => 'varchar', 'constraint' => 255],
            'deleted_at' => ['type' => 'timestamp', 'null' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        $this->forge->addForeignKey('product_id', 'products', 'id');
        // $this->forge->createTable('product_images');
    }

    public function down()
    {
        $this->forge->dropTable('product_images', true);
    }
}
