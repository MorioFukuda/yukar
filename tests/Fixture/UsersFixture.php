<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'display_name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '表示用ユーザ名', 'precision' => null, 'fixed' => null],
        'account_id' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => 'ユーザのアカウントID', 'precision' => null, 'fixed' => null],
        'salt' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => 'パスワードの暗号化に使用するsalt', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => 'パスワード(ハッシュ化後の値)', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'comment' => 'メールアドレス', 'precision' => null, 'fixed' => null],
        'jpa_skill_level' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'スキルレベル', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'account_id' => ['type' => 'unique', 'columns' => ['account_id'], 'length' => []],
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
            'display_name' => 'Lorem ipsum dolor sit amet',
            'account_id' => 'Lorem ipsum dolor sit amet',
            'salt' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'jpa_skill_level' => 1,
            'created' => '2015-11-21 16:13:42',
            'modified' => '2015-11-21 16:13:42'
        ],
    ];
}
