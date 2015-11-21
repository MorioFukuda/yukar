<?php
use Migrations\AbstractMigration;

class CreateJpa9ShootLogs extends AbstractMigration
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
        $table = $this->table('jpa9_shoot_logs');
        $table->addColumn('user_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('jpa9_game_id', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('lack', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('enninge', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('is_safety', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('is_fall', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('is_break', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('is_luck_end', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('is_turn_end', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
