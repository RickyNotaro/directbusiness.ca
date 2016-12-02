<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Apply Entity
 *
 * @property int $id
 * @property int $file_id
 * @property int $cv_id
 * @property int $job_id
 * @property int $candidate_id
 * @property int $cover_letter_id
 *
 * @property \App\Model\Entity\File $file
 * @property \App\Model\Entity\Cv $cv
 * @property \App\Model\Entity\Job $job
 * @property \App\Model\Entity\CoverLetter $cover_letter
 */
class Apply extends Entity
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
