<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $id
 * @property string $number
 * @property string $street
 * @property string $apartment
 * @property string $city
 * @property string $postalCode
 * @property int $state_province_id
 * @property int $candidate_id
 *
 * @property \App\Model\Entity\StateProvince $state_province
 * @property \App\Model\Entity\Candidate $candidate
 */
class Address extends Entity
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
