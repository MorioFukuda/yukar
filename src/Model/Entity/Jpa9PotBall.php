<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jpa9PotBall Entity.
 *
 * @property int $id
 * @property int $jpa9_shoot_log_id
 * @property \App\Model\Entity\Jpa9ShootLog $jpa9_shoot_log
 * @property int $jpa9_player_id
 * @property \App\Model\Entity\Jpa9Player $jpa9_player
 * @property int $ball_number
 * @property int $pocket_position_id
 * @property \App\Model\Entity\PocketPosition $pocket_position
 * @property \Cake\I18n\Time $created
 */
class Jpa9PotBall extends Entity
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
