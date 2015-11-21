<?php
use Migrations\AbstractMigration;

class CreateJpa9SkillLevelsAndBallCounts extends AbstractMigration
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
        $table = $this->table('jpa9_skill_levels_and_ball_counts');
        $table->addColumn('skill_level', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => 'スキルレベル',
        ]);
        $table->addColumn('ball_count', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => 'スキルレベルに対応する先取点',
        ]);
        $table->create();
    }
}
