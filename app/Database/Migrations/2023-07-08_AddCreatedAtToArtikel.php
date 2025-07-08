<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCreatedAtToArtikel extends Migration
{
    public function up()
    {
        $this->forge->addColumn('artikel', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
                'default' => null,
                'after' => 'slug' // opsional: tempatkan setelah kolom 'slug'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('artikel', 'created_at');
    }
}
