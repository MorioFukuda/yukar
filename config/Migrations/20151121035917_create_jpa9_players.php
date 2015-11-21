<?php
use Migrations\AbstractMigration;

class CreateJpa9Players extends AbstractMigration
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
        $table = $this->table('jpa9_players');
        $table->addColumn('user_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '参加者のuser_id',
        ]);
        $table->addColumn('jpa9_game_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '参加しているgame_id',
        ]);
        $table->addColumn('skill_level', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '参加時のスキルレベル',
        ]);
        $table->addColumn('point', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => true,
            'comment' => 'スコアから計算した最終ポイント',
        ]);
        $table->addColumn('turn', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => 'プレイする順番',
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex(['user_id', 'jpa9_game_id'], [
            'unique' => true]
        );
        $table->create();
    }
}
