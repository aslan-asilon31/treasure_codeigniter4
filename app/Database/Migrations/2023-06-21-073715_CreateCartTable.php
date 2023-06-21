<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCartTable extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'name'        => ['type' => 'VARCHAR', 'constraint' => 255],
            'amount'      => ['type' => 'INT', 'constraint' => 11],
            'price'       => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'total_price' => ['type' => 'DECIMAL', 'constraint' => '10,2'],
            'created_at'  => ['type' => 'DATETIME'],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('cart');
    }

    public function down()
    {
        //
    }
}
