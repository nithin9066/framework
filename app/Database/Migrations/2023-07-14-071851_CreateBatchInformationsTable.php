<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBatchInformationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'batch_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'batch_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'dosage_form' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'strength' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'package_size' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'batch_expiry' => [
                'type' => 'date',
            ],
            'packaging_batch_quantity' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'carton_count' => [
                'type' => 'INT',
            ],
            'end_user_country' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('batch_id', true);
        $this->forge->createTable('batch_information');
    }

    public function down()
    {
        $this->forge->dropTable('batch_information');
    }
}
