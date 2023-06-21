<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reviews extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'name' => ['type' => 'varchar', 'constraint' => 255],
            'rating' => ['type' => 'int', 'constraint' => 20],
            'comments' => ['type' => 'text'],
            'slug' => ['type' => 'varchar', 'constraint' => 360],
            'deleted_at' => ['type' => 'timestamp', 'null' => true],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        $this->forge->createTable('reviews');
    }

    public function down()
    {
        $this->forge->dropTable('reviews', true);
    }
}
