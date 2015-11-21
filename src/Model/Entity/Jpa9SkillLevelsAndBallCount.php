<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jpa9SkillLevelsAndBallCount Entity.
 *
 * @property int $id
 * @property int $skill_level
 * @property int $ball_count
 */
class Jpa9SkillLevelsAndBallCount extends Entity
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
