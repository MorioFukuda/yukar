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
        $table->addColumn('jpa9_player_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '参加者のplayer_id',
        ]);
        $table->addColumn('jpa9_game_id', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '参加しているgame_id',
        ]);
        $table->addColumn('rack', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '何ラック目か',
        ]);
        $table->addColumn('inning', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '何イニング目か',
        ]);
        $table->addColumn('in_a_row_count', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '何連続目のショットか',
        ]);
        $table->addColumn('score', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => 'このショットで取得したスコア',
        ]);
        $table->addColumn('is_break', 'boolean', [
            'default' => null,
            'null' => false,
            'comment' => 'ブレークショットかどうか',
        ]);
        $table->addColumn('is_safety', 'boolean', [
            'default' => null,
            'null' => false,
            'comment' => 'セーフティーかどうか',
        ]);
        $table->addColumn('is_fall', 'boolean', [
            'default' => null,
            'null' => false,
            'comment' => 'ファールかどうか',
        ]);
        $table->addColumn('is_turn_end', 'boolean', [
            'default' => null,
            'null' => false,
            'comment' => '自分のターンが終了したかどうか',
        ]);
        $table->addColumn('is_ruck_end', 'boolean', [
            'default' => null,
            'null' => false,
            'comment' => 'ラックが終了したかどうか',
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
