<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductImagesTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'product_id'    => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
            ],
            'image'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'title'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'description'   => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'slug'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'deleted_at'    => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
            'created_at'    => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
            'updated_at'    => [
                'type'           => 'TIMESTAMP',
                'null'           => true,
            ],
        ]);
    
        // $this->forge->addPrimaryKey('id');
        // $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('product_images');
    }

    public function down()
    {
        //
    }
}
