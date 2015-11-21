<?php
namespace App\Model\Table;

use App\Model\Entity\Jpa9ShootLog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jpa9ShootLogs Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Jpa9Players
 * @property \Cake\ORM\Association\BelongsTo $Jpa9Games
 * @property \Cake\ORM\Association\HasMany $Jpa9PotBalls
 */
class Jpa9ShootLogsTable extends Table
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

        $this->table('jpa9_shoot_logs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Jpa9Players', [
            'foreignKey' => 'jpa9_player_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Jpa9Games', [
            'foreignKey' => 'jpa9_game_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Jpa9PotBalls', [
            'foreignKey' => 'jpa9_shoot_log_id'
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
            ->add('rack', 'valid', ['rule' => 'numeric'])
            ->requirePresence('rack', 'create')
            ->notEmpty('rack');

        $validator
            ->add('inning', 'valid', ['rule' => 'numeric'])
            ->requirePresence('inning', 'create')
            ->notEmpty('inning');

        $validator
            ->add('in_a_row_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('in_a_row_count', 'create')
            ->notEmpty('in_a_row_count');

        $validator
            ->add('score', 'valid', ['rule' => 'numeric'])
            ->requirePresence('score', 'create')
            ->notEmpty('score');

        $validator
            ->add('is_break', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_break', 'create')
            ->notEmpty('is_break');

        $validator
            ->add('is_safety', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_safety', 'create')
            ->notEmpty('is_safety');

        $validator
            ->add('is_fall', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_fall', 'create')
            ->notEmpty('is_fall');

        $validator
            ->add('is_turn_end', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_turn_end', 'create')
            ->notEmpty('is_turn_end');

        $validator
            ->add('is_ruck_end', 'valid', ['rule' => 'boolean'])
            ->requirePresence('is_ruck_end', 'create')
            ->notEmpty('is_ruck_end');

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
        $rules->add($rules->existsIn(['jpa9_player_id'], 'Jpa9Players'));
        $rules->add($rules->existsIn(['jpa9_game_id'], 'Jpa9Games'));
        return $rules;
    }
}
