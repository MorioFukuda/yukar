<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jpa9Game Entity.
 *
 * @property int $id
 * @property string $title
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\Jpa9Player[] $jpa9_players
 * @property \App\Model\Entity\Jpa9ShootLog[] $jpa9_shoot_logs
 */
class Jpa9Game extends Entity
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
