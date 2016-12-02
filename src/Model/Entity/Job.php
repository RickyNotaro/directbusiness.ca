<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $responsibility
 * @property string $aptitude
 * @property string $requirement
 * @property string $asset
 * @property string $note
 * @property \Cake\I18n\Time $start_date
 * @property int $activity_area_id
 * @property int $profession_id
 * @property int $employment_status_id
 * @property \Cake\I18n\Time $start_date_publication
 * @property \Cake\I18n\Time $end_date_publication
 * @property \Cake\I18n\Time $created_date
 * @property int $status_id
 * @property int $education_level_id
 * @property int $skill_level_id
 * @property int $job_type_id
 * @property int $enterprise_id
 *
 * @property \App\Model\Entity\ActivityArea $activity_area
 * @property \App\Model\Entity\Profession $profession
 * @property \App\Model\Entity\EmploymentStatus $employment_status
 * @property \App\Model\Entity\Status $status
 * @property \App\Model\Entity\EducationLevel $education_level
 * @property \App\Model\Entity\SkillLevel $skill_level
 * @property \App\Model\Entity\JobType $job_type
 * @property \App\Model\Entity\Enterprise $enterprise
 * @property \App\Model\Entity\Apply[] $applys
 */
class Job extends Entity
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
