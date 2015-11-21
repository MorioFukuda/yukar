<?php
namespace App\Model\Table;

use App\Model\Entity\Jpa9PotBall;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jpa9PotBalls Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Jpa9ShootLogs
 * @property \Cake\ORM\Association\BelongsTo $Jpa9Players
 * @property \Cake\ORM\Association\BelongsTo $PocketPositions
 */
class Jpa9PotBallsTable extends Table
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

        $this->table('jpa9_pot_balls');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Jpa9ShootLogs', [
            'foreignKey' => 'jpa9_shoot_log_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Jpa9Players', [
            'foreignKey' => 'jpa9_player_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PocketPositions', [
            'foreignKey' => 'pocket_position_id'
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
            ->add('ball_number', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ball_number', 'create')
            ->notEmpty('ball_number');

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
        $rules->add($rules->existsIn(['jpa9_shoot_log_id'], 'Jpa9ShootLogs'));
        $rules->add($rules->existsIn(['jpa9_player_id'], 'Jpa9Players'));
        $rules->add($rules->existsIn(['pocket_position_id'], 'PocketPositions'));
        return $rules;
    }
}
