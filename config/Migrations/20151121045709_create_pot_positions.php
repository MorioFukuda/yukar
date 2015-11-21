<?php
use Migrations\AbstractMigration;

class CreatePotPositions extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('pot_positions');
        $table->addColumn('display_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => '表示用ポケット名',
        ]);
        $table->addColumn('type', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => 'ポケット種別(1:コーナー, 2:サイド)',
        ]);
        $table->create();
    }
}
