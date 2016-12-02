<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cv Entity
 *
 * @property int $id
 * @property string $cvName
 * @property string $position_sought
 * @property float $minimum_wage
 * @property float $maximum_wage
 * @property string $position_location
 * @property string $current_employer
 * @property bool $ready_to_relocate
 * @property \Cake\I18n\Time $start_date
 * @property int $career_level_id
 * @property int $employment_status_id
 * @property int $activity_area_id
 * @property int $profession_id
 * @property int $education_level_id
 * @property int $ready_to_travel_id
 * @property int $can_work_for_id
 * @property int $candidate_id
 * @property int $cv_visibility_id
 * @property int $views
 *
 * @property \App\Model\Entity\CareerLevel $career_level
 * @property \App\Model\Entity\EmploymentStatus $employment_status
 * @property \App\Model\Entity\ActivityArea $activity_area
 * @property \App\Model\Entity\Profession $profession
 * @property \App\Model\Entity\EducationLevel $education_level
 * @property \App\Model\Entity\ReadyToTravel $ready_to_travel
 * @property \App\Model\Entity\CanWorkFor $can_work_for
 * @property \App\Model\Entity\Candidate $candidate
 * @property \App\Model\Entity\CvVisibility $cv_visibility
 * @property \App\Model\Entity\Apply[] $applys
 * @property \App\Model\Entity\CvsLanguageLevelsLanguage[] $cvs_language_levels_languages
 * @property \App\Model\Entity\SkillCard[] $skill_cards
 * @property \App\Model\Entity\WorkingLicence[] $working_licences
 */
class Cv extends Entity
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
