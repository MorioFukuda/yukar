<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jpa9LoserSkillLevelsAndLoserPoint Entity.
 *
 * @property int $id
 * @property int $loser_skill_level
 * @property int $loser_score_from
 * @property int $loser_score_to
 * @property int $winner_point
 * @property int $loser_point
 */
class Jpa9LoserSkillLevelsAndLoserPoint extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
