<?php
namespace App\Model\Table;

use App\Model\Entity\PocketPosition;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PocketPositions Model
 *
 * @property \Cake\ORM\Association\HasMany $Jpa9PotBalls
 */
class PocketPositionsTable extends Table
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

        $this->table('pocket_positions');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Jpa9PotBalls', [
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
            ->requirePresence('display_name', 'create')
            ->notEmpty('display_name');

        $validator
            ->add('type', 'valid', ['rule' => 'numeric'])
            ->requirePresence('type', 'create')
            ->notEmpty('type');

        return $validator;
    }
}
