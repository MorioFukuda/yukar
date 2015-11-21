<?php
namespace App\Model\Table;

use App\Model\Entity\Jpa9Game;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jpa9Games Model
 *
 * @property \Cake\ORM\Association\HasMany $Jpa9Players
 * @property \Cake\ORM\Association\HasMany $Jpa9ShootLogs
 */
class Jpa9GamesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('jpa9_games');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Jpa9Players', [
            'foreignKey' => 'jpa9_game_id'
        ]);
        $this->hasMany('Jpa9ShootLogs', [
            'foreignKey' => 'jpa9_game_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('title');

        return $validator;
    }
}
