<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'name'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'image'         => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
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
    
        $this->forge->createTable('categories');
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
