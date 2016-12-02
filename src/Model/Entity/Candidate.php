<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Candidate Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $views
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Address[] $addresses
 * @property \App\Model\Entity\Apply[] $applys
 * @property \App\Model\Entity\CoverLetter[] $cover_letters
 * @property \App\Model\Entity\Cv[] $cvs
 * @property \App\Model\Entity\File[] $files
 * @property \App\Model\Entity\Phone[] $phones
 */
class Candidate extends Entity
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
