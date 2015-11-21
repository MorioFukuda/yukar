<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
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
        $table = $this->table('users');
        $table->addColumn('display_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => '表示用ユーザ名',
        ]);
        $table->addColumn('account_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => 'ユーザのアカウント名',
        ]);
        $table->addColumn('salt', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => 'パスワードの暗号化に使用するsalt',
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
            'comment' => 'パスワード(ハッシュ化後の値)',
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => true,
            'comment' => 'メールアドレス',
        ]);
        $table->addColumn('jpa_skill_level', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
            'comment' => 'スキルレベル',
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addIndex(['account_name'], [
            'unique' => true]
        );
        $table->create();
    }
}
