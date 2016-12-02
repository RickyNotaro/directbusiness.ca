<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enterprise Entity
 *
 * @property int $id
 * @property string $enterpriseName
 * @property string $history
 * @property string $domain
 * @property string $culture
 * @property string $description
 * @property int $activity_area_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\ActivityArea $activity_area
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Job[] $jobs
 */
class Enterprise extends Entity
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
        'id' => false
    ];
}
