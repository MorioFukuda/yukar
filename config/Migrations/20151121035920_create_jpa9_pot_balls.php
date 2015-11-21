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
            'limit' => 11,
            'null' => false,
            'comment' => 'ショットのID',
        ]);
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => 'ショットした人のuser_id',
        ]);
        $table->addColumn('ball_number', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => 'ボールの番号',
        ]);
        $table->addColumn('pot_position_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
            'comment' => 'ポケットした場所',
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex(['jpa9_shoot_log_id', 'ball_number'], [
            'unique' => true]
        );
        $table->create();
    }
}
