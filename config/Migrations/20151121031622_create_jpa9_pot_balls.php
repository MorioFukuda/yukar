<?php
use Migrations\AbstractMigration;

class CreateJpa9PotBalls extends AbstractMigration
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
        $table = $this->table('jpa9_pot_balls');
        $table->addColumn('jpa9_shoot_log_id', 'integer', [
            'default' => null,
            'signed' => false,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'signed' => false,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('ball_number', 'integer', [
            'default' => null,
            'signed' => false,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('pot_position', 'integer', [
            'default' => null,
            'signed' => false,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
