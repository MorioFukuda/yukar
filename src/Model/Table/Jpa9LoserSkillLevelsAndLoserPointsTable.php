<?php
namespace App\Model\Table;

use App\Model\Entity\Jpa9LoserSkillLevelsAndLoserPoint;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jpa9LoserSkillLevelsAndLoserPoints Model
 *
 */
class Jpa9LoserSkillLevelsAndLoserPointsTable extends Table
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

        $this->table('jpa9_loser_skill_levels_and_loser_points');
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
            ->add('loser_skill_level', 'valid', ['rule' => 'numeric'])
            ->requirePresence('loser_skill_level', 'create')
            ->notEmpty('loser_skill_level');

        $validator
            ->add('loser_score_from', 'valid', ['rule' => 'numeric'])
            ->requirePresence('loser_score_from', 'create')
            ->notEmpty('loser_score_from');

        $validator
            ->add('loser_score_to', 'valid', ['rule' => 'numeric'])
            ->requirePresence('loser_score_to', 'create')
            ->notEmpty('loser_score_to');

        $validator
            ->add('winner_point', 'valid', ['rule' => 'numeric'])
            ->requirePresence('winner_point', 'create')
            ->notEmpty('winner_point');

        $validator
            ->add('loser_point', 'valid', ['rule' => 'numeric'])
            ->requirePresence('loser_point', 'create')
            ->notEmpty('loser_point');

        return $validator;
    }
}
