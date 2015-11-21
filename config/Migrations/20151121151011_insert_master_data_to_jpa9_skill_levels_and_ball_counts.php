<?php
use Migrations\AbstractMigration;

class InsertMasterDataToJpa9SkillLevelsAndBallCounts extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $masterDataList = [
           ['skill_level' => 1, 'ball_count' => 14],
           ['skill_level' => 2, 'ball_count' => 19],
           ['skill_level' => 3, 'ball_count' => 25],
           ['skill_level' => 4, 'ball_count' => 31],
           ['skill_level' => 5, 'ball_count' => 38],
           ['skill_level' => 6, 'ball_count' => 46],
           ['skill_level' => 7, 'ball_count' => 55],
           ['skill_level' => 8, 'ball_count' => 65],
           ['skill_level' => 9, 'ball_count' => 75],
        ];

        foreach ($masterDataList as $masterData) {
            $this->execute(sprintf(
                '
                    insert into jpa9_skill_levels_and_ball_counts (
                        skill_level, ball_count
                    ) values (
                        %s, %s
                    )
                ',
                $masterData['skill_level'],
                $masterData['ball_count']
            )); 
        }
    }
}
