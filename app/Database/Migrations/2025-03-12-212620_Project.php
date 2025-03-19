<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class Project extends Migration
{
    public function up()
    {
        // Definisikan struktur tabel
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'project_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'manager_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'start_date' => [
                'type' => 'DATE', // Format tanggal: YYYY-MM-DD
            ],
            'finish_date' => [
                'type' => 'DATE', // Format tanggal: YYYY-MM-DD
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true, // Opsional, jika deskripsi boleh kosong
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['On-Progress', 'On-Hold', 'Done'],
                'default' => 'On-Progress',
            ],
            'created_at' => [
                'type' => 'DATETIME', // Timestamp saat data dibuat
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME', // Timestamp saat data diupdate
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME', // Timestamp untuk soft delete
                'null' => true,
            ],
        ]);

        // Tambahkan primary key
        $this->forge->addKey('id', true);

        // Tambahkan foreign key untuk manager_id (jika diperlukan)
        $this->forge->addForeignKey('manager_id', 'users', 'id', 'CASCADE', 'CASCADE', 'users_manager_id');

        // Tambahkan foreign key untuk user_id (jika diperlukan)
        $this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE', 'users_user_id');

        // Buat tabel
        $this->forge->createTable('projects');
    }

    public function down()
    {
        $this->forge->dropForeignKey('projects', 'users_manager_id');
        $this->forge->dropForeignKey('projects', 'users_user_id');
        // Hapus tabel jika migration di-rollback
        $this->forge->dropTable('projects');
    }
}
