<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryDetails extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'category_id' => ['type' => 'int'],
            'name' => ['type' => 'varchar', 'constraint' => 255],
            'description' => ['type' => 'text'],
            'slug' => ['type' => 'varchar', 'constraint' => 255],
            'deleted_at' => ['type' => 'timestamp', 'null' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        $this->forge->addForeignKey('category_id', 'categories', 'id');
        $this->forge->createTable('category_details');
    }

    public function down()
    {
        $this->forge->dropTable('category_details', true);
    }
}
