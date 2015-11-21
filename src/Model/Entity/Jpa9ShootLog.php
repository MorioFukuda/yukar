<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Jpa9ShootLog Entity.
 *
 * @property int $id
 * @property int $jpa9_player_id
 * @property \App\Model\Entity\Jpa9Player $jpa9_player
 * @property int $jpa9_game_id
 * @property \App\Model\Entity\Jpa9Game $jpa9_game
 * @property int $rack
 * @property int $inning
 * @property int $in_a_row_count
 * @property int $score
 * @property bool $is_break
 * @property bool $is_safety
 * @property bool $is_fall
 * @property bool $is_turn_end
 * @property bool $is_ruck_end
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\Jpa9PotBall[] $jpa9_pot_balls
 */
class Jpa9ShootLog extends Entity
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
