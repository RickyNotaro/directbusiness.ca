<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CvsSkillCard Entity
 *
 * @property int $id
 * @property int $cv_id
 * @property int $skill_card_id
 *
 * @property \App\Model\Entity\Cv $cv
 * @property \App\Model\Entity\SkillCard $skill_card
 */
class CvsSkillCard extends Entity
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
