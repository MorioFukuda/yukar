<?php
namespace App\Model\Table;

use App\Model\Entity\Jpa9SkillLevelsAndBallCount;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jpa9SkillLevelsAndBallCounts Model
 *
 */
class Jpa9SkillLevelsAndBallCountsTable extends Table
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

        $this->table('jpa9_skill_levels_and_ball_counts');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->add('ball_count', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ball_count', 'create')
            ->notEmpty('ball_count');

        return $validator;
    }
}
