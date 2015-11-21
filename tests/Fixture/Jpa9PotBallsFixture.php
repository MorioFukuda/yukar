<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Jpa9PotBallsFixture
 *
 */
class Jpa9PotBallsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'jpa9_shoot_log_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ショットのID', 'precision' => null, 'autoIncrement' => null],
        'jpa9_player_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ショットした人のplayer_id', 'precision' => null, 'autoIncrement' => null],
        'ball_number' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ボールの番号', 'precision' => null, 'autoIncrement' => null],
        'pocket_position_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'ポケットした場所', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'jpa9_shoot_log_id' => ['type' => 'unique', 'columns' => ['jpa9_shoot_log_id', 'ball_number'], 'length' => []],
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
            'jpa9_shoot_log_id' => 1,
            'jpa9_player_id' => 1,
            'ball_number' => 1,
            'pocket_position_id' => 1,
            'created' => '2015-11-21 16:13:41'
        ],
    ];
}
