<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Jpa9LoserSkillLevelsAndLoserPointsFixture
 *
 */
class Jpa9LoserSkillLevelsAndLoserPointsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'loser_skill_level' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '敗者のスキルレベル', 'precision' => null, 'autoIncrement' => null],
        'loser_score_from' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '獲得ポイントを算出するための敗者の得点レンジ始点（始点を含む）', 'precision' => null, 'autoIncrement' => null],
        'loser_score_to' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '獲得ポイントを算出するための敗者の得点レンジの終点（終点を含む)', 'precision' => null, 'autoIncrement' => null],
        'winner_point' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '敗者のスキルレベルと合計得点に応じた勝者の獲得ポイント', 'precision' => null, 'autoIncrement' => null],
        'loser_point' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '敗者のスキルレベルと合計得点に応じた敗者の獲得ポイント', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'loser_skill_level' => 1,
            'loser_score_from' => 1,
            'loser_score_to' => 1,
            'winner_point' => 1,
            'loser_point' => 1
        ],
    ];
}
