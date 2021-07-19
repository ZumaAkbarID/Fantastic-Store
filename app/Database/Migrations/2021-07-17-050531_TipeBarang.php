<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TipeBarang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'tipe' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('tipebarang');
	}

	public function down()
	{
		$this->forge->dropTable('tipebarang');
	}
}