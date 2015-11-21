<?php
use Migrations\AbstractMigration;

class InsertMasterDataToJpa9LoserSkillLevelsAndLoserPoints extends AbstractMigration
{
    /**
     * Migrate Up.
     */
    public function up()
    {
        $masterDataList = [
            ['loser_skill_level' => 1, 'loser_score_from' => 0,  'loser_score_to' => 2,  'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 1, 'loser_score_from' => 3,  'loser_score_to' => 3,  'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 1, 'loser_score_from' => 4,  'loser_score_to' => 4,  'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 1, 'loser_score_from' => 5,  'loser_score_to' => 6,  'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 1, 'loser_score_from' => 7,  'loser_score_to' => 7,  'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 1, 'loser_score_from' => 8,  'loser_score_to' => 8,  'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 1, 'loser_score_from' => 9,  'loser_score_to' => 10, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 1, 'loser_score_from' => 11, 'loser_score_to' => 11, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 1, 'loser_score_from' => 12, 'loser_score_to' => 13, 'winner_point' => 12, 'loser_point' => 8],
            ['loser_skill_level' => 2, 'loser_score_from' => 0,  'loser_score_to' => 3,  'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 2, 'loser_score_from' => 4,  'loser_score_to' => 5,  'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 2, 'loser_score_from' => 6,  'loser_score_to' => 7,  'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 2, 'loser_score_from' => 8,  'loser_score_to' => 8,  'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 2, 'loser_score_from' => 9,  'loser_score_to' => 10, 'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 2, 'loser_score_from' => 11, 'loser_score_to' => 12, 'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 2, 'loser_score_from' => 13, 'loser_score_to' => 14, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 2, 'loser_score_from' => 15, 'loser_score_to' => 16, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 2, 'loser_score_from' => 17, 'loser_score_to' => 18, 'winner_point' => 12, 'loser_point' => 8],
            ['loser_skill_level' => 3, 'loser_score_from' => 0,  'loser_score_to' => 4,  'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 3, 'loser_score_from' => 5,  'loser_score_to' => 6,  'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 3, 'loser_score_from' => 7,  'loser_score_to' => 9,  'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 3, 'loser_score_from' => 10, 'loser_score_to' => 11, 'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 3, 'loser_score_from' => 12, 'loser_score_to' => 14, 'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 3, 'loser_score_from' => 15, 'loser_score_to' => 16, 'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 3, 'loser_score_from' => 17, 'loser_score_to' => 19, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 3, 'loser_score_from' => 20, 'loser_score_to' => 21, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 3, 'loser_score_from' => 22, 'loser_score_to' => 24, 'winner_point' => 12, 'loser_point' => 8],
            ['loser_skill_level' => 4, 'loser_score_from' => 0,  'loser_score_to' => 5,  'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 4, 'loser_score_from' => 6,  'loser_score_to' => 8,  'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 4, 'loser_score_from' => 9,  'loser_score_to' => 11, 'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 4, 'loser_score_from' => 12, 'loser_score_to' => 14, 'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 4, 'loser_score_from' => 15, 'loser_score_to' => 18, 'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 4, 'loser_score_from' => 19, 'loser_score_to' => 21, 'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 4, 'loser_score_from' => 22, 'loser_score_to' => 24, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 4, 'loser_score_from' => 25, 'loser_score_to' => 27, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 4, 'loser_score_from' => 28, 'loser_score_to' => 30, 'winner_point' => 12, 'loser_point' => 8],
            ['loser_skill_level' => 5, 'loser_score_from' => 0,  'loser_score_to' => 6,  'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 5, 'loser_score_from' => 7,  'loser_score_to' => 10, 'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 5, 'loser_score_from' => 11, 'loser_score_to' => 14, 'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 5, 'loser_score_from' => 15, 'loser_score_to' => 18, 'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 5, 'loser_score_from' => 19, 'loser_score_to' => 22, 'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 5, 'loser_score_from' => 23, 'loser_score_to' => 26, 'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 5, 'loser_score_from' => 27, 'loser_score_to' => 29, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 5, 'loser_score_from' => 30, 'loser_score_to' => 33, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 5, 'loser_score_from' => 34, 'loser_score_to' => 37, 'winner_point' => 12, 'loser_point' => 8],
            ['loser_skill_level' => 6, 'loser_score_from' => 0,  'loser_score_to' => 8,  'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 6, 'loser_score_from' => 9,  'loser_score_to' => 12, 'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 6, 'loser_score_from' => 13, 'loser_score_to' => 17, 'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 6, 'loser_score_from' => 18, 'loser_score_to' => 22, 'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 6, 'loser_score_from' => 23, 'loser_score_to' => 27, 'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 6, 'loser_score_from' => 28, 'loser_score_to' => 31, 'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 6, 'loser_score_from' => 32, 'loser_score_to' => 36, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 6, 'loser_score_from' => 37, 'loser_score_to' => 40, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 6, 'loser_score_from' => 41, 'loser_score_to' => 45, 'winner_point' => 12, 'loser_point' => 8],
            ['loser_skill_level' => 7, 'loser_score_from' => 0,  'loser_score_to' => 10, 'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 7, 'loser_score_from' => 11, 'loser_score_to' => 15, 'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 7, 'loser_score_from' => 16, 'loser_score_to' => 21, 'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 7, 'loser_score_from' => 22, 'loser_score_to' => 26, 'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 7, 'loser_score_from' => 27, 'loser_score_to' => 32, 'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 7, 'loser_score_from' => 33, 'loser_score_to' => 37, 'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 7, 'loser_score_from' => 38, 'loser_score_to' => 43, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 7, 'loser_score_from' => 44, 'loser_score_to' => 49, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 7, 'loser_score_from' => 50, 'loser_score_to' => 54, 'winner_point' => 12, 'loser_point' => 8],
            ['loser_skill_level' => 8, 'loser_score_from' => 0,  'loser_score_to' => 13, 'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 8, 'loser_score_from' => 14, 'loser_score_to' => 19, 'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 8, 'loser_score_from' => 20, 'loser_score_to' => 26, 'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 8, 'loser_score_from' => 27, 'loser_score_to' => 32, 'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 8, 'loser_score_from' => 33, 'loser_score_to' => 39, 'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 8, 'loser_score_from' => 40, 'loser_score_to' => 45, 'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 8, 'loser_score_from' => 46, 'loser_score_to' => 52, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 8, 'loser_score_from' => 53, 'loser_score_to' => 58, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 8, 'loser_score_from' => 59, 'loser_score_to' => 64, 'winner_point' => 12, 'loser_point' => 8],
            ['loser_skill_level' => 9, 'loser_score_from' => 0,  'loser_score_to' => 17, 'winner_point' => 20, 'loser_point' => 0],
            ['loser_skill_level' => 9, 'loser_score_from' => 18, 'loser_score_to' => 24, 'winner_point' => 19, 'loser_point' => 1],
            ['loser_skill_level' => 9, 'loser_score_from' => 25, 'loser_score_to' => 31, 'winner_point' => 18, 'loser_point' => 2],
            ['loser_skill_level' => 9, 'loser_score_from' => 32, 'loser_score_to' => 38, 'winner_point' => 17, 'loser_point' => 3],
            ['loser_skill_level' => 9, 'loser_score_from' => 39, 'loser_score_to' => 46, 'winner_point' => 16, 'loser_point' => 4],
            ['loser_skill_level' => 9, 'loser_score_from' => 47, 'loser_score_to' => 53, 'winner_point' => 15, 'loser_point' => 5],
            ['loser_skill_level' => 9, 'loser_score_from' => 54, 'loser_score_to' => 60, 'winner_point' => 14, 'loser_point' => 6],
            ['loser_skill_level' => 9, 'loser_score_from' => 61, 'loser_score_to' => 67, 'winner_point' => 13, 'loser_point' => 7],
            ['loser_skill_level' => 9, 'loser_score_from' => 68, 'loser_score_to' => 74, 'winner_point' => 12, 'loser_point' => 8],
        ];

        foreach ($masterDataList as $masterData) {
            $this->execute(sprintf(
                '
                    insert into jpa9_loser_skill_levels_and_loser_points (
                        loser_skill_level, loser_score_from, loser_score_to, winner_point, loser_point
                    ) values (
                        %s, %s, %s, %s, %s
                    )
                ',
		$masterData['loser_skill_level'],
		$masterData['loser_score_from'],
		$masterData['loser_score_to'],
		$masterData['winner_point'],
		$masterData['loser_point']
            ));
        }
    }
}
