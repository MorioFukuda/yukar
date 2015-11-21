<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jpa9Player Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property int $jpa9_game_id
 * @property \App\Model\Entity\Jpa9Game $jpa9_game
 * @property int $skill_level
 * @property int $point
 * @property int $turn
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Jpa9PotBall[] $jpa9_pot_balls
 * @property \App\Model\Entity\Jpa9ShootLog[] $jpa9_shoot_logs
 */
class Jpa9Player extends Entity
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
