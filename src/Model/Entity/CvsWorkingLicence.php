<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CvsWorkingLicence Entity
 *
 * @property int $id
 * @property int $cv_id
 * @property int $working_licence_id
 *
 * @property \App\Model\Entity\Cv $cv
 * @property \App\Model\Entity\WorkingLicence $working_licence
 */
class CvsWorkingLicence extends Entity
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
