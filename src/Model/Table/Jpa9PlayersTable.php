<?php
namespace App\Model\Table;

use App\Model\Entity\Jpa9Player;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jpa9Players Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Jpa9Games
 * @property \Cake\ORM\Association\HasMany $Jpa9PotBalls
 * @property \Cake\ORM\Association\HasMany $Jpa9ShootLogs
 */
class Jpa9PlayersTable extends Table
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

        $this->table('jpa9_players');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Jpa9Games', [
            'foreignKey' => 'jpa9_game_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Jpa9PotBalls', [
            'foreignKey' => 'jpa9_player_id'
        ]);
        $this->hasMany('Jpa9ShootLogs', [
            'foreignKey' => 'jpa9_player_id'
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
            ->add('skill_level', 'valid', ['rule' => 'numeric'])
            ->requirePresence('skill_level', 'create')
            ->notEmpty('skill_level');

        $validator
            ->add('point', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('point');

        $validator
            ->add('turn', 'valid', ['rule' => 'numeric'])
            ->requirePresence('turn', 'create')
            ->notEmpty('turn');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['jpa9_game_id'], 'Jpa9Games'));
        return $rules;
    }
}
