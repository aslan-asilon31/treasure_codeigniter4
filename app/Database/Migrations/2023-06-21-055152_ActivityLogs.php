<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ActivityLogs extends Migration
{
    public function up()
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'log_name' => ['type' => 'varchar', 'constraint' => 255],
            'description' => ['type' => 'text'],
            'subject_id' => ['type' => 'bigint'],
            'subject_type' => ['type' => 'varchar', 'constraint' => 255],
            'causer_id' => ['type' => 'bigint'],
            'causer_type' => ['type' => 'varchar', 'constraint' => 255],
            'properties' => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'timestamp'],
            'updated_at' => ['type' => 'timestamp'],
        ]);
        $this->forge->createTable('activity_logs');
    }

    public function down()
    {
        $this->forge->dropTable('activity_logs', true);
    }
}
