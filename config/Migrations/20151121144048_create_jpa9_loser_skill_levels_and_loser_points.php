<?php
use Migrations\AbstractMigration;

class CreateJpa9LoserSkillLevelsAndLoserPoints extends AbstractMigration
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
        $table = $this->table('jpa9_loser_skill_levels_and_loser_points');
        $table->addColumn('loser_skill_level', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '敗者のスキルレベル',
        ]);
        $table->addColumn('loser_score_from', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '獲得ポイントを算出するための敗者の得点レンジ始点（始点を含む）',
        ]);
        $table->addColumn('loser_score_to', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '獲得ポイントを算出するための敗者の得点レンジの終点（終点を含む)',
        ]);
        $table->addColumn('winner_point', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '敗者のスキルレベルと合計得点に応じた勝者の獲得ポイント',
        ]);
        $table->addColumn('loser_point', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => '敗者のスキルレベルと合計得点に応じた敗者の獲得ポイント',
        ]);
        $table->create();
    }
}
