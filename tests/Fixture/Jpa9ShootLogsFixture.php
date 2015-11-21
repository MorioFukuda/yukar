<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Jpa9ShootLogsFixture
 *
 */
class Jpa9ShootLogsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'jpa9_player_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '参加者のplayer_id', 'precision' => null, 'autoIncrement' => null],
        'jpa9_game_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '参加しているgame_id', 'precision' => null, 'autoIncrement' => null],
        'rack' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '何ラック目か', 'precision' => null, 'autoIncrement' => null],
        'inning' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '何イニング目か', 'precision' => null, 'autoIncrement' => null],
        'in_a_row_count' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '何連続目のショットか', 'precision' => null, 'autoIncrement' => null],
        'score' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'このショットで取得したスコア', 'precision' => null, 'autoIncrement' => null],
        'is_break' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'ブレークショットかどうか', 'precision' => null],
        'is_safety' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'セーフティーかどうか', 'precision' => null],
        'is_fall' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'ファールかどうか', 'precision' => null],
        'is_turn_end' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => '自分のターンが終了したかどうか', 'precision' => null],
        'is_ruck_end' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'ラックが終了したかどうか', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
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
            'jpa9_player_id' => 1,
            'jpa9_game_id' => 1,
            'rack' => 1,
            'inning' => 1,
            'in_a_row_count' => 1,
            'score' => 1,
            'is_break' => 1,
            'is_safety' => 1,
            'is_fall' => 1,
            'is_turn_end' => 1,
            'is_ruck_end' => 1,
            'created' => '2015-11-21 17:49:00'
        ],
    ];
}
